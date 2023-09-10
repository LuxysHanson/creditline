<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image as InterventionImage;
use Pvtl\VoyagerFrontend\Helpers\ClassEvents;

trait Blocks
{
    /**
     * Ensure each page block has the correct data, in the correct format
     *
     * @param Collection $blocks
     * @return array
     */
    protected function prepareEachBlock(Collection $blocks)
    {
        return array_map(function ($block) {
            // 'Include' block types
            if ($block->type === 'include' && !empty($block->path)) {
                $block->html = ClassEvents::executeClass($block->path)->render();
            }

            // 'Template' block types
            if ($block->type === 'template' && !empty($block->template)) {
                $block = $this->prepareTemplateBlockTypes($block);
            }

            // Add HTML to cache by key: $block->id - $block->page_id - $block->updated_at
            $cacheKey = "blocks/$block->id-$block->page_id-$block->updated_at";

            $ttl = $block->cache_ttl;
            // When not in local dev (eg. prod), let's always cache for at least 1min
            if (empty($ttl) && app('env') != 'local') {
                $ttl = 1;
            }
            return Cache::remember($cacheKey, $ttl, function () use ($block) {
                return $block;
            });
        }, $blocks->toArray());
    }

    /**
     * Ensure each page block has all of the keys from
     * config, in the DB output (to prevent errors in views)
     * + compile each piece of HTML (eg. for short codes)
     *
     * @param $block
     * @return mixed
     * @throws \Exception
     */
    protected function prepareTemplateBlockTypes($block)
    {
        $templateKey = $block->path;
        $templateConfig = Config::get("page-blocks.$templateKey");

        // Ensure every key from config exists in collection
        foreach ((array)$templateConfig['fields'] as $fieldName => $fieldConfig) {
            if (!isset($block->data->$fieldName)) {
                $block->data->$fieldName = null;
            }
        }

        // Compile each piece of content from the DB, into HTML
        $blockModel = new \App\PageBlockMocked($block->data);
        $blockModel->id = $block->id;
        $locale = session()->get('locale');
        $fallbackLocale = \config('app.fallback_locale');

        foreach ($blockModel->getAttributes() as $key => $data) {
            $blockModel->$key = $blockModel->get_translated_attribute($blockModel, $key, $locale, $fallbackLocale);
        }
        // Compile the Blade View to give us HTML output
        if (View::exists($block->template)) {
            $block->html = View::make($block->template, [
                'blockData' => $blockModel,
                'block' => $block,
            ])->render();
        }

        return $block;
    }

    public function uploadImages(Request $request, array $data): array
    {
        foreach ($request->files as $key => $field) {
            unset($data[$key]);
            if (is_array($request->file($key))) {
                $filesPath = [];
                $multiImages = array();
                $path = 'blocks' . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;
                if (!is_dir(storage_path('app/public/') . $path)) {
                    if (!mkdir(storage_path('app/public/') . $path, 0755, true))
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', storage_path('app/public/') . $path));
                }
                foreach ($request->file($key) as $key2 => $file) {
//                    $filePath = $file->store('public/blocks');
                    if (!$file->isValid()) {
                        continue;
                    }

                    $filename = \Str::random(20);

                    if (stripos($file->getClientMimeType(), 'image/') !== false
                        && in_array($file->getClientOriginalExtension(), [
                        'webp', 'png', 'jpg', 'jpeg', 'gif', 'bmp'
                    ])) {
                        $image = InterventionImage::make($file->getRealPath());
                        $resize_width = $image->width();
                        $resize_height = $image->height();

                        $resize_quality = 90;

                        array_push($filesPath, $path . $filename . '.' . $file->getClientOriginalExtension());
                        $filePath = $path . $filename . '.' . $file->getClientOriginalExtension();

                        $image = $image
                            ->resize(1000, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })
                            ->encode($file->getClientOriginalExtension(), $resize_quality);
                        $image->save(storage_path('app/public/') . $filePath);

                        $imageWeb = $image
                            ->resize(1000, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })
                            ->encode('webp', $resize_quality);
                        $imageWeb->save(storage_path('app/public/') . $path . $filename . '.webp');

                        $cropImage = $image
                            ->resize(480, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })
                            ->encode($file->getClientOriginalExtension(), $resize_quality);
                        $cropImageWeb = $image
                            ->resize(480, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })
                            ->encode('webp', $resize_quality);
                        $cropImage->save(storage_path('app/public/') . $path . $filename . '-small.'.$file->getClientOriginalExtension());
                        $cropImageWeb->save(storage_path('app/public/') . $path . $filename . '-small.webp');
//                    Storage::disk(config('voyager.storage.disk'))->put($filePath, (string)$image, 'public');
//                    Storage::disk(config('voyager.storage.disk'))->put($path . $filename . '.webp', (string)$imageWeb, 'public');

                        $multiImages[] = str_replace('public/', '', $filePath);
                    } else {
                        $fullPath = $path . $filename . '.' . $file->getClientOriginalExtension();
                        Storage::disk(config('voyager.storage.disk'))->put($fullPath, file_get_contents($file), 'public');

                        $multiImages[] = str_replace('public/', '', $fullPath);
                    }

                }
                $data[$key] = json_encode($multiImages);
            } else {
                $file = $request->file($key);
                $path = 'blocks' . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;
                if (!is_dir(storage_path('app/public/') . $path)) {
                    if (!mkdir(storage_path('app/public/') . $path, 0755, true))
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', storage_path('app/public/') . $path));
                }
                $filename = \Str::random(20);

                if (stripos($file->getClientMimeType(), 'image/') !== false
                    && in_array($file->getClientOriginalExtension(), [
                        'webp', 'png', 'jpg', 'jpeg', 'gif', 'bmp'
                    ])) {

                    $image = InterventionImage::make($file->getRealPath());
                    $fullPath = $path . $filename . '.' . $file->getClientOriginalExtension();
                    $resize_width = $image->width();
                    $resize_height = $image->height();
                    $resize_quality = 90;

                    $image = $image
                         ->resize(1000, null, function ($constraint) {
                         $constraint->aspectRatio();
                         $constraint->upsize();
                     })
                        ->encode($file->getClientOriginalExtension(), $resize_quality);
                    $image->save(storage_path('app/public/') . $fullPath);

                    $imageWeb = $image
                        ->resize(1000, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                        ->encode('webp', $resize_quality);
                    $imageWeb->save(storage_path('app/public/') . $path . $filename . '.webp');

                    $cropImage = $image
                        ->resize(480, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                        ->encode($file->getClientOriginalExtension(), $resize_quality);
                    $cropImageWeb = $image
                        ->resize(480, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                        ->encode('webp', $resize_quality);
                    $cropImage->save(storage_path('app/public/') . $path . $filename . '-small.'.$file->getClientOriginalExtension());
                    $cropImageWeb->save(storage_path('app/public/') . $path . $filename . '-small.webp');

                    $data[$key] = $fullPath;

                } else {
                    $fullPath = $path . $filename . '.' . $file->getClientOriginalExtension();
                    Storage::disk(config('voyager.storage.disk'))->put($fullPath, file_get_contents($file), 'public');

                    $data[$key] = str_replace('public/', '', $fullPath);
//                    $multiImages[] = str_replace('public/', '', $fullPath);
                }

            }
        }

        foreach ($request->all() as $key => $field) {
            if ($request->has($key . '_i18n') && !in_array($key, ['image', 'bg_image']) && (strpos($key, 'image') === false && strpos($key, 'checked') === false && strpos($key, 'value') === false)) {

                $trans = json_decode($request->input($key . '_i18n'), true);
                if (array_key_exists('ru', $trans)) {
                    $data[$key] = $trans[\config('app.fallback_locale')];
                }

// Remove field hidden input
//                unset($request[$key . '_i18n']);
            }
        }
        return $data;
    }

    public function generatePlaceholders(Request $request): array
    {
        $configKey = explode('|', $request->input('type'))[1];

        return array_map(function ($field) {
            return array_key_exists('placeholder', $field) ? $field['placeholder'] : '';
        }, config("page-blocks.$configKey.fields"));
    }
}
