<div class="container">
    <div class="img"><img src="/assets/images/icons/loan.svg" alt="loan-icon"></div>
    <div class="title">@lang('form.step2.title')</div>
    <div class="desc">@lang('form.step2.desc') &nbsp;<span class="phoneNumberString">{{ $application->phone }}</span></div>
    <div class="input">
        <div class="input_title">@lang('form.step2.input_title')</div>
        <div class="input_input">
            <input class="a_validCode1" type="code" autocomplete="off" placeholder="__ __ __ __ __ __" name="getCode" onkeypress="return AllowOnlyNumbers(event);">
        </div>
    </div>
    <div class="btn_again" data-href="{{ route('form', 'hash='. $application->id_hash) }}"
         data-id="{{ $application->id }}" data-phone="{{ $application->phone }}">
        <div class="btn1 active">@lang('form.step2.again_title')</div>
        <div class="btn2">
            @lang('form.step2.again_desc')
        </div>
    </div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=1') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green nextAnket" data-id="{{ $application->id }}">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
