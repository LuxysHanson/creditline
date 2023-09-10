<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageBlock;
use App\Models\PageBlockMocked;
use App\Traits\Blocks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;
use Intervention\Image\Facades\Image as InterventionImage;
use Pvtl\VoyagerPageBlocks\Validators\BlockValidators;
use TCG\Voyager\Events\FileDeleted;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class PageBlockController extends VoyagerBaseController
{
    use Blocks;

    public function index(Request $request)
    {
        return redirect('/admin/pages');
    }

    /**
     * POST B(R)EAD - Read data.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param string $subject
     *
     * @return View
     */
    public function edit(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $isModelTranslatable = true;
        return view('voyager::page-blocks.edit-add', [
            'page' => $page,
            'isModelTranslatable' => $isModelTranslatable,
            'pageBlocks' => $page->blocks->sortBy('order'),
        ]);
    }

    /**
     * POST BR(E)AD - Edit data.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $block = PageBlock::findOrFail($id);
        $template = $block->template();
        /* @var \TCG\Voyager\Models\DataType $dataType */
        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-blocks')->first();

        // Get all block data & validate
        $data = [];

        foreach ($template->fields as $row) {
            $existingData = $block->data;

            if (
                $row->type === 'image'
                || $row->type === 'multiple_images'
            ) {
                if (is_null($request->file($row->field))) {
                    if (isset($existingData->{$row->field})) {
                        $data[$row->field] = $existingData->{$row->field};
                    }

                    continue;
                }

                $data[$row->field] = $request->file($row->field);
            } else {
                $data[$row->field] = $request->input($row->field);
            }
        }

        // Just.Do.It! (Nike, TM)
        $validator = BlockValidators::validateBlock($request, $block);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with([
                    'message' => __('voyager::json.validation_errors'),
                    'alert-type' => 'error',
                ]);
        }

        $data = $this->uploadImages($request, $data);

        // Save translations if applied
        $translations = $this->prepareTranslations($request, $block, $dataType);
        $block->data = $data;
//        $block->page_type = $request->page_type;
        $block->path = $block->type === 'include' ? $request->input('path') : $block->path;
        $block->is_hidden = $request->has('is_hidden');
        $block->is_delete_denied = $request->has('is_delete_denied');
        $block->cache_ttl = $request->input('cache_ttl');
        $block->save();

        $this->saveTranslations($translations, $block);

        return redirect()
            ->to(URL::previous() . "#block-id-" . $id)
            ->with([
                'message' => __('voyager::generic.successfully_updated') . " {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }

    public function prepareTranslations($request, $block, $dataType)
    {
        $translations = [];
        // Translatable Fields
        $transFields = $block->getTranslatableAttributes();
        $fields = !empty($request->attributes->get('breadRows')) ? array_intersect($request->attributes->get('breadRows'), $transFields) : $transFields;

        foreach ($fields as $key => $field) {
            if ($request->has($field . '_i18n') && strpos($field, 'image') === false && strpos($field, 'checked') === false && strpos($field, 'value') === false) {
                if (!$request->input($field . '_i18n')) {
                    throw new \Exception('Invalid Translatable field ' . $field);
                }
                $trans = json_decode($request->input($field . '_i18n'), true);
                $trans_value = $trans[config('voyager.multilingual.default', 'en')] ?? null;
                // Set the default local value

                $request->merge([$field => $trans_value]);
                $translations[$field] = $this->setAttributeTranslations(
                    $field,
                    $trans,
                    $block
                );

                // Remove field hidden input
                unset($request[$field . '_i18n']);
            }
        }
        // Remove language selector input
        unset($request['i18n_selector']);
        return $translations;
    }


    public function setAttributeTranslations($attribute, array $translations, $block, $save = false)
    {
        $response = [];

        if (!$block->relationLoaded('translations')) {
            $block->load('translations');
        }

        $default = config('voyager.multilingual.default', 'ru');
        $locales = config('voyager.multilingual.locales', [$default]);
        $dataAttr = [];
        $dataAttrTranslator = [];
        foreach ($locales as $locale) {
//            if (empty($translations[$locale])) {
//                continue;
//            }
            if ($locale == $default) {
                $dataAttr[$attribute] = $translations[$locale] ?? null;
                continue;
            }
            $tranlator = (new PageBlockMocked($block->data))->translate($locale, false);
            $tranlator->$attribute = $translations[$locale] ?? '';
            $dataAttrTranslator[$attribute] = $translations[$locale] ?? null;
            if ($save) {
                $tranlator->save();
            }

            $response[] = $tranlator;
        }

        return $response;
    }

    /**
     * Save translations.
     *
     * @param object $translations
     *
     * @return void
     */
    public function saveTranslations($translations, $block)
    {
        foreach ($translations as $field => $locales) {
            foreach ($locales as $locale => $translation) {
                $this->translationSave($translation, $block);
            }
        }
    }

    /**
     * Save changes made to the translator attributes.
     *
     * @return bool
     */
    public function translationSave($translation, $block)
    {
        $attributes = $translation->getModifiedAttributes();
        $savings = [];

        foreach ($attributes as $key => $attribute) {

            if ($attribute['exists']) {
                $translation = $block->getTranslationModel($key);

            } else {
                $translation = Voyager::model('Translation')->where('table_name', $block->getTable())
                    ->where('column_name', $key)
                    ->where('foreign_key', $block->getKey())
                    ->where('locale', $attribute['locale'])
                    ->get()
                    ->first();
            }
            if (is_null($translation)) {
                $translation = Voyager::model('Translation');
            }
            $translation->table_name = $block->getTable();
            $translation->column_name = $key;
            $translation->foreign_key = $block->getKey();
            $translation->value = $attribute['value'];
            $translation->locale = $attribute['locale'];
            $translation->save();

            $savings[] = $translation;

            $this->attributes[$key]['locale'] = $attribute['locale'];
            $this->attributes[$key]['exists'] = true;
            $this->attributes[$key]['modified'] = false;
        }

        return in_array(false, $savings);
    }


    /**
     * POST - Order data.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function sort(Request $request)
    {
        $blockOrder = json_decode($request->input('order'));

        foreach ($blockOrder as $index => $item) {
            $block = PageBlock::findOrFail($item->id);
            $block->order = $index + 1;
            $block->save();
        }
    }

    /**
     * POST - Minimize Block
     *
     * @param \Illuminate\Http\Request $request
     */
    public function minimize(Request $request)
    {
        $block = PageBlock::findOrFail((int)$request->id);
        $block->is_minimized = (int)$request->is_minimized;
        $block->save();
    }

    /**
     * POST - Change Page Layout
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id - the page id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLayout(Request $request, $id)
    {
        $page = Page::findOrFail((int)$id);
        $page->layout = $request->layout;
        $page->save();

        return redirect()
            ->back()
            ->with([
                'message' => __('voyager::generic.successfully_updated') . " Page Layout",
                'alert-type' => 'success',
            ]);
    }

    /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => ['required']
        ]);

        $pageType = $request->get('page_type');
        if ($pageType == 'portfolio') {
            $page = Portfolio::findOrFail($request->get('page_id'));
        } elseif ($pageType == 'service') {
            $page = Service::findOrFail($request->get('page_id'));
        } else {
            $page = Page::findOrFail($request->get('page_id'));
        }

        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-blocks')->first();

        if ($request->input('type') === 'include') {
            $type = $request->input('type');
            $path = '\Pvtl\VoyagerFrontend\Http\Controllers\PostController::recentBlogPosts()';
        } else {
            list($type, $path) = explode('|', $request->input('type'));
        }
        $block = $page->blocks()->create([
            'page_type' => $pageType,
            'type' => $type,
            'path' => $path,
            'data' => $type === 'include' ? '' : $this->generatePlaceholders($request),
            'order' => time(),
        ]);

        return redirect()
            ->route('voyager.page-blocks.edit', array($page->id, 'subject' => $pageType, '#block-id-' . $block->id))
            ->with([
                'message' => __('voyager::generic.successfully_added_new') . " {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }

    /**
     * DELETE BREA(D) - Delete data.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $block = PageBlock::findOrFail($id);
        $dataType = Voyager::model('DataType')->where('slug', '=', 'page-blocks')->first();

        try {
            $block->delete();
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with([
                    'message' => "Unable to delete {$dataType->display_name_singular}",
                    'alert-type' => 'error',
                ]);
        }

        return redirect()
            ->back()
            ->with([
                'message' => __('voyager::generic.successfully_deleted') . " {$dataType->display_name_singular}",
                'alert-type' => 'success',
            ]);
    }

    public function removeMedia(Request $request)
    {
        try {
            // GET THE SLUG, ex. 'posts', 'pages', etc.
            $slug = $request->get('slug');

            // GET file name
            $filename = $request->get('filename');

            // GET record id
            $id = $request->get('id');

            // GET field name
            $field = $request->get('field');

            // GET multi value
            $multi = $request->get('multi');

            $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

            // Load model and find record
            $model = app($dataType->model_name);
            $data = $model::find([$id])->first();
            // Check if field exists
            if (!isset($data->data->{$field})) {
                throw new \Exception(__('voyager::generic.field_does_not_exist'), 400);
            }

            // Check permission
            $this->authorize('edit', $data);

            if (@json_decode($multi)) {
                // Check if valid json
                if (is_null(@json_decode(json_decode($data->data)->{$field}))) {
                    throw new \Exception(__('voyager::json.invalid'), 500);
                }

                // Decode field value
                $fieldData = @json_decode($data->{$field}, true);
                $key = null;

                // Check if we're dealing with a nested array for the case of multiple files
                if (is_array($fieldData[0])) {
                    foreach ($fieldData as $index => $file) {
                        // file type has a different structure than images
                        if (!empty($file['original_name'])) {
                            if ($file['original_name'] == $filename) {
                                $key = $index;
                                break;
                            }
                        } else {
                            $file = array_flip($file);
                            if (array_key_exists($filename, $file)) {
                                $key = $index;
                                break;
                            }
                        }
                    }
                } else {
                    $key = array_search($filename, $fieldData);
                }

                // Check if file was found in array
                if (is_null($key) || $key === false) {
                    throw new \Exception(__('voyager::media.file_does_not_exist'), 400);
                }

                $fileToRemove = $fieldData[$key]['download_link'] ?? $fieldData[$key];

                // Remove file from array
                unset($fieldData[$key]);

                // Generate json and update field
                $data->{$field} = empty($fieldData) ? null : json_encode(array_values($fieldData));
            } else {
                if ($filename == Voyager::image($data->data->{$field})) {
                    $fileToRemove = $data->data->{$field};
                    $newData = $data->data;
                    $newData->{$field} = null;
                } else {
                    throw new \Exception(__('voyager::media.file_does_not_exist'), 400);
                }
            }

//            $row = $dataType->rows->where('field', $field)->first();

            // Remove file from filesystem
            $this->deleteFileIfExists($fileToRemove);

            if (\Storage::disk(config('voyager.storage.disk'))->exists(str_replace('.' . pathinfo($fileToRemove, PATHINFO_EXTENSION), '.webp', $fileToRemove))) {
                \Storage::disk(config('voyager.storage.disk'))->delete(str_replace('.' . pathinfo($fileToRemove, PATHINFO_EXTENSION), '.webp', $fileToRemove));
                event(new FileDeleted(str_replace('.' . pathinfo($fileToRemove, PATHINFO_EXTENSION), '.webp', $fileToRemove)));
            }
            $data->data = $newData;
            $data->save();

            return response()->json([
                'data' => [
                    'status' => 200,
                    'message' => __('voyager::media.file_removed'),
                ],
            ]);
        } catch (\Exception $e) {
            $code = 500;
            $message = __('voyager::generic.internal_error');

            if ($e->getCode()) {
                $code = $e->getCode();
            }

            if ($e->getMessage()) {
                $message = $e->getMessage();
            }

            return response()->json([
                'data' => [
                    'status' => $code,
                    'message' => $message,
                ],
            ], $code);
        }
    }

    public function recoverImages()
    {
        $images = array_filter(\File::allFiles(storage_path('app/public/blocks')), function ($file) {
            return !in_array($file->getExtension(), ['webp', 'svg']);
        });
        foreach ($images as $image) {
            $path = $image->getPath();
            $filename = $image->getFilenameWithoutExtension();
            $ext = $image->getExtension();

            $cropImage = InterventionImage::make($image->getRealPath())->resize(480, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($ext, 100);
            $cropImageWeb = InterventionImage::make($image->getRealPath())->resize(480, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('webp', 100);
            $cropImage->save($path ."/". $filename . '-small' . '.' . $ext);
            $cropImageWeb->save($path."/". $filename . '-small' . '.webp');
        }

        return count($images);
    }
}
