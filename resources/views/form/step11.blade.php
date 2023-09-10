<div class="container">
    <div class="img"><img src="/assets/images/icons/surrounded.svg" alt="surrounded"></div>
    <div class="title">@lang('form.step11.title')</div>
    <div class="desc">@lang('form.step11.desc')</div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=10') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green goLoadPhotoAuto active" data-id="{{ $application->id }}" data-step="12">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
