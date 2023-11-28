@extends('layouts.app')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))

@section('content')
    <main class="mainPage">
        {!! $page->body !!}
    </main>
    <div class="table" style="display: none;">
        <div class="table_head">
            <div class="text">@lang('general.table.title')</div>
            <img src="/assets/images/icons/union.svg" alt="union-icon" onclick="closeTable()">
        </div>
        <div class="container">
            <div class="table_desc">
                <p>@lang('general.table.desc1') &nbsp;<strong>239 167₸</strong></p>
                <p>@lang('general.table.desc2')</p>
            </div>
            <div class="cell">
                <table>
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">@lang('general.table.column1')</th>
                        <th scope="col">@lang('general.table.column2')</th>
                        <th scope="col">@lang('general.table.column3')</th>
                        <th scope="col">@lang('general.table.column4')</th>
                        <th scope="col">@lang('general.table.column5')</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td>01.08.2023</td>
                        <td>230 640 ₸</td>
                        <td>230 640 ₸</td>
                        <td>0 ₸</td>
                        <td>6 200 000 ₸</td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>01.08.2023</td>
                        <td>230 640 ₸</td>
                        <td>230 640 ₸</td>
                        <td>0 ₸</td>
                        <td>6 200 000 ₸</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="table_desc2">
                <h3>@lang('general.table.sub_title')</h3>
                <ol>
                    <li>@lang('general.table.point1')</li>
                    <li>@lang('general.table.point2')</li>
                    <li>@lang('general.table.point3')</li>
                </ol>
            </div>
        </div>
        <div class="table_footer">
            <div class="container">
                <p>@lang('general.table.footer_text')</p>
            </div>
        </div>
    </div>
@endsection
