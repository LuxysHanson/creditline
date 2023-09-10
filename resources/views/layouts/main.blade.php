<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@if(strlen($__env->yieldContent('seo_title')) > 2) @yield('seo_title') @else @yield('page_title') @endif</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="title" content="@yield('seo_title')"/>
    @if(View::hasSection('seo'))
        @yield('seo')
    @endif

    {{--    <link rel="preload" href="https://fonts.googleapis.com">--}}
    {{--    <link rel="preload" href="https://fonts.gstatic.com" crossorigin="">--}}
    <link rel="stylesheet" href="{{ asset('/assets/css/style.min.css?v='. time()) }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/depense.min.css?v='. time()) }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css?v='. time()) }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/assets/css/baguetteBox.min.css?v='. time()) }}" media="print" onload="this.media='all'">
@yield('styles')

<!-- Fallback that only gets inserted when JavaScript is disabled, in which case we can't load CSS asynchronously. -->
    <noscript>
        <link rel="stylesheet" href="{{ asset('/assets/css/style.min.css?v='. time()) }}" media="all">
        <link rel="stylesheet" href="{{ asset('/assets/css/depense.min.css?v='. time()) }}" media="all">
        <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css?v='. time()) }}" media="all">
        <link rel="stylesheet" href="{{ asset('/assets/css/baguetteBox.min.css?v='. time()) }}" media="all">
        @yield('styles')
    </noscript>
</head>
<body id="app">
@include('layouts.main_header')
@yield('content')
<div class="preloader" style="display: none;">
    <img class="preloader_img" src="/assets/images/icons/logo.svg" alt="preloader-icon">
</div>
@include('layouts.scripts')
</body>
</html>
