<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DocumentController extends Controller
{
    public function index()
    {
        $page = Page::query()->where('slug', 'form')->firstOrFail();
        $page = $page->translate(session()->get('locale'));

        return view('documents', ['page' => $page]);
    }

    public function show(string $name): BinaryFileResponse
    {
        return response()->file(resource_path("files/$name"));
    }
}
