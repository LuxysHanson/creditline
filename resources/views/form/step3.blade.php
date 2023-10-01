<div class="container">
    <div class="img"><img src="/assets/images/icons/checklist.svg" alt="check-icon"></div>
    <div class="title">@lang('form.step3.title')</div>
    <div class="input">
        <div class="input_title">@lang('form.step3.iin')</div>
        <div class="input_input">
            <input class="a_iin" type="iin" placeholder="XXX-XXX-XXX-XXX" name="iin" autocomplete="off"
                value="{{ $application->loan['iin'] ?? '' }}">
        </div>
    </div>
    <div class="calculate">
        <div class="input">
            <label>@lang('general.block3.cost_title')</label>
            <input class="allSum tengeInput" type="text" value="{{ $application->loan['summa'] ?? $blockData->cost }}"
                   onkeypress="return AllowOnlyNumbers(event);">
        </div>
        <div class="range">
            <input class="allSumRange" type="range"
                   min="{{ $blockData->cost_min }}"
                   max="{{ $blockData->cost_max }}"
                   value="{{ $application->loan['summa'] ?? $blockData->cost }}" step="10000">
            <div class="range_row">
                <div class="min">{{ \App\Helpers\Common::getCostToString($blockData->cost_min) }}</div>
                @if($blockData->cost_avg)
                    <div class="center">{{ \App\Helpers\Common::getCostToString($blockData->cost_avg) }}</div>
                @endif
                <div class="max">{{ \App\Helpers\Common::getCostToString($blockData->cost_max) }}</div>
            </div>
        </div>

        @php($type = $application->loan['repayment_type'] ?? 1)
        <div class="input repaymentSelect">
            @php($type2 = $type == 1 ? 2 : 1)
            <label data-title="{{ __('general.block3.deadline_title_'. $type2) }}">
                @lang('general.block3.deadline_title_'. $type)
            </label>
            @php($deadline = $application->loan['deadline'] ?? '')
            <input class="monthInput" type="text" value="{{ intval($deadline) ?? intval($blockData->deadline) }}"
                   onkeypress="return AllowOnlyNumbers(event);">
        </div>
        <div class="range">
            <input class="monthRange" type="range"
                   min="{{ intval($blockData->deadline_min) }}"
                   max="{{ intval($blockData->deadline_max) }}"
                   value="{{ intval($deadline) ?? intval($blockData->deadline) }}" step="1">
            <div class="range_row">
                <div class="min">{{ $blockData->deadline_min }}</div>
                @if($blockData->deadline_avg)
                    <div class="center">{{ $blockData->deadline_avg }}</div>
                @endif
                <div class="max">{{ $blockData->deadline_max }}</div>
            </div>
        </div>
        @php($cost = $application->loan['summa'] ?? $blockData->cost)
        @if(intval($cost) >= 2000000)
            <div class="question">
                <img src="/assets/images/icons/warning.svg" alt="warning-icon">
                <div class="text">@lang('general.block3.gps_text')</div>
                <img class="info" src="/assets/images/icons/question.svg" alt="question-icon">
                <div class="absolute">@lang('general.block3.gps_desc')</div>
            </div>
        @endif
        <div class="select selectPayment">
            <div class="title">@lang('general.block3.type_repayment')</div>
            <div class="select_row">
                <input type="radio" name="repaymentType" id="repaymentType1" value="1"
                       @if($type == 1) checked @endif>
                <label for="repaymentType1">@lang('general.block3.repayment_type1')</label>
            </div>
            <div class="select_row">
                <input type="radio" name="repaymentType" id="repaymentType2" value="2"
                       @if($type == 2) checked @endif>
                <label for="repaymentType2">@lang('general.block3.repayment_type2')</label>
            </div>
        </div>
        <div class="monthlyPay">
            <div class="monthlyPay_title">@lang('general.block3.payment_title'):</div>
            <div class="monthlyPay_sum calcSumRow">{{ $blockData->payment }} ₸</div>
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step3.payment')</div>
        <div class="input_input">
            <input class="tengeInput monthlyIncome" type="text" name="monthlyIncome" value="{{ $application->loan['payment'] ?? '' }}"
                   onkeypress="return AllowOnlyNumbers(event);" autocomplete="off">
        </div>
    </div>
    <div class="input">
        <div class="input_title">
            @lang('form.step3.additional_phone')
            <img src="/assets/images/icons/question.svg" alt="question-icon"></div>
        <div class="input_input">
            <input class="a_phoneNumber2" type="tel2" placeholder="+7 (___) ___-__-__"
                   name="phoneNumber2" autocomplete="off" value="{{ $application->loan['additional_phone'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step3.email')</div>
        <div class="input_input">
            <input class="anketEmail" type="email" placeholder="" name="email" autocomplete="off"
                value="{{ $application->loan['email'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">
            @lang('form.step3.iban')
            <img src="/assets/images/icons/question.svg" alt="question-icon"></div>
        <div class="input_input">
            <input class="a_iban" type="iban" placeholder="KZ**************" name="iban" autocomplete="off"
                   value="{{ $application->loan['iban'] ?? '' }}">
        </div>
    </div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=2') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green infoBTN" data-id="{{ $application->id }}" data-key="loan" data-step="4">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
