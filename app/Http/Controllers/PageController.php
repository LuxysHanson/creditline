<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Brand;
use App\Models\Locality;
use App\Models\Model;
use App\Models\Page;
use App\Models\PageBlock;
use App\Models\Question;
use Illuminate\Http\Request;
use Pvtl\VoyagerPageBlocks\Traits\Blocks;

class PageController extends Controller
{
    use Blocks;

    public function callAction($method, $parameters)
    {
        app()->setLocale(session()->get('locale'));
        return parent::callAction($method, $parameters);
    }

    public function getPage($slug = '/')
    {

        $page = Page::query()->where('slug', $slug)->firstOrFail();
        $page = $page->translate(session()->get('locale'));

        if ($page->blocks) {
            $this->setPageWithBlocks($page);
        }

        return view($page->getModel()->getTemplate(), compact('page'));
    }

    public function form(Request $request)
    {

        $application = null;
        if ($hash = $request->get('hash')) {
            $application = Application::query()->where('id_hash', $hash)->firstOrFail();
        }

        $page = Page::query()->where('slug', 'form')->firstOrFail();
        $page = $page->translate(session()->get('locale'));

        $params = $this->getParams($request, $application);

        return view('form', compact('page', 'application'), $params);
    }

    public function getQuestions()
    {
        $questions = Question::with(['translations'])->orderBy('sort')->get();
        return view('vendor.voyager-page-blocks.blocks.block7', compact('questions'));
    }

    public function setLocale(string $locale)
    {

        if (in_array($locale, config()->get('voyager.multilingual.locales'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }

    protected function getParams(Request $request, $application): array
    {
        $step = $application ? $application->step : 1;
        if ($stepTo = $request->get('stepTo')) {
            if ($stepTo <= $step) {
                $step = $stepTo;
            } else {
                abort(404);
            }
        }

        switch ($step) {
            case 3:
                $page_block = PageBlock::query()
                    ->where('path', 'block3')
                    ->first();
                if ($page_block) {
                    $params['blockData'] = $page_block->cachedData;
                }
                break;
            case 4:
                $params['models'] = Model::query()->orderBy('name')->pluck('name');
                $params['brands'] = Brand::query()->orderBy('name')->pluck('name');
                break;
            case 7:
                $params['localities'] = Locality::query()->pluck('name');
        }

        $params['step'] = $step;
        return $params;
    }

    protected function setPageWithBlocks($page): void
    {
        $blocks = $page->blocks
            ->where('is_hidden', '=', '0')
            ->sortBy('order')
            ->map(function ($block) {
                return (object)[
                    'id' => $block->id,
                    'page_id' => $block->page_id,
                    'updated_at' => $block->updated_at,
                    'cache_ttl' => $block->cache_ttl,
                    'template' => $block->template()->template,
                    'data' => $block->cachedData,
                    'path' => $block->path,
                    'type' => $block->type,
                ];
            });

        // Override standard body content, with page block content
        $page->body = view('voyager-page-blocks::default', [
            'page' => $page,
            'blocks' => $this->prepareEachBlock($blocks),
        ]);
    }

}
