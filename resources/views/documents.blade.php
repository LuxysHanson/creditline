@extends('layouts.main')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))

@section('styles')
    <link rel="shortcut icon" href="https://www.creditline.kz/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="preload" as="image" href="./assets/images/icons/logo.svg">
    <link rel="shortcut icon" type="image/svg" href="./assets/images/icons/logo.svg">
    <link rel="stylesheet" href="./assets/css/docs.min.css?v=77365719" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="./assets/css/docs.min.css?v=77365719" media="all">
    </noscript>
@endsection

@section('content')
@include('layouts.header-inner')

<main class="docPage">
    <div class="block1">
        <div class="container">
            <div class="title">Документы</div>
            <a class="link" href="./assets/files/microcredit_rules.pdf" target="_blank">
                Правила предоставления микрокредитов<img src="./assets/images/docs.png" alt="doc">
            </a>
            <a class="link" href="./assets/files/rules.pdf" target="_blank">
                Порядок урегулирования просроченной задолженности<img src="./assets/images/docs.png" alt="doc">
            </a>
        </div>
    </div>
</main>
@include('layouts.footer')

@endsection
