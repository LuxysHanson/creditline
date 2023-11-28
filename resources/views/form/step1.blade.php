<div class="container">
    <div class="img"><img src="{{ asset('/assets/images/icons/loan.svg') }}" alt=""></div>
    <div class="title">@lang('form.step1.title')</div>
    <div class="input">
        <div class="input_title">@lang('form.step1.input_title')</div>
        <div class="input_input">
            <input class="a_phoneNumber" type="tel" placeholder="+7 (___) ___-__-__" name="phoneNumber"
                   autocomplete=off" value="{{ $application ? $application->phone : '' }}">
        </div>
    </div>
    <div class="agreement">
        <input type="checkbox" name="agreement" checked>
        <div class="agreement_text">@lang('form.step1.agreement_text')</div>
    </div>
    <div class="btn_row"><a class="btn btn_gray" href="/">@lang('form.back_btn')</a>
        <div class="btn btn_green getCode" onclick="timerAgain()">@lang('form.code_btn')</div>
    </div>
</div>
