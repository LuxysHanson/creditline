<div class="container">
    <div class="img"><img src="/assets/images/icons/g2232.svg" alt="g2232-icon"></div>
    <div class="title">@lang('form.step8.title')</div>
    <div class="bannerPhoto a_loading">
        <picture>
            <source srcset="/assets/images/icons/loading_a.webp" type="image/webp">
            <source srcset="/assets/images/icons/loading_a.webp" type="image/pjp2">
            <img src="/assets/images/icons/loading_a.png" alt="loading-icon">
        </picture>
        <div class="title">@lang('form.step8.title2')</div>
    </div>
    <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
        <div class="text">@lang('form.step8.text')</div>
    </div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=7') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green nextApplicationCode active" data-id="{{ $application->id }}"
            data-phone="{{ $application->phone }}" data-step="9">
            @lang('form.send_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
