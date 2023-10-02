<div class="container">
    <div class="img"><img src="/assets/images/icons/personalInfo.svg" alt="personal-icon"></div>
    <div class="title">@lang('form.step7.title')</div>
    <div class="input">
        <div class="input_title">@lang('form.step7.locality')</div>
        <div class="tt-select">
            <select class="a_locality" name="locality">
                @php($locality = $application->address['locality'] ?? '')
                @if($localities)
                    @foreach($localities as $key => $value)
                        <option value="{{ $key }}"
                                @if($locality == $key) selected @endif
                        >{{ $value }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step7.street')</div>
        <div class="input_input">
            <input class="a_street" type="text" name="street" autocomplete="off"
                   value="{{ $application->address['street'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step7.number_home')</div>
        <div class="input_input">
            <input class="a_numberHome" type="text" name="numberHome" autocomplete="off"
                   value="{{ $application->address['number_home'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step7.apartment')</div>
        <div class="input_input">
            <input class="a_numberKv" type="text" name="numberKv" autocomplete="off"
                   value="{{ $application->address['apartment'] ?? '' }}">
        </div>
    </div>
    <div class="question">
        <div class="text">@lang('form.step7.address')</div>
        <img class="info" src="/assets/images/icons/question.svg" alt="question-icon">
        <div class="absolute">@lang('general.block3.gps_desc')</div>
    </div>
    @php($equal_address = $application->address['equal_address'] ?? 'false')
    <div class="select2">
        <div class="select2_row">
            <input type="checkbox" name="equalAddress" id="equalAddress" value="1"
                @if($equal_address == 'true') checked @endif>
            <label for="equalAddress">@lang('form.step7.equal_address')</label>
        </div>
    </div>
    <div class="box {{ $equal_address == 'true' ? '' : 'active' }}">
        <div class="input">
            <div class="input_title">@lang('form.step7.locality')</div>
            <div class="input_input">
                <input class="a_locality2" type="text" name="locality2" autocomplete="off"
                       value="{{ $application->address['locality2'] ?? '' }}">
            </div>
        </div>
        <div class="input">
            <div class="input_title">@lang('form.step7.street')</div>
            <div class="input_input">
                <input class="a_street2" type="text" name="street2" autocomplete="off"
                       value="{{ $application->address['street2'] ?? '' }}">
            </div>
        </div>
        <div class="input">
            <div class="input_title">@lang('form.step7.number_home')</div>
            <div class="input_input">
                <input class="a_numberHome2" type="text" name="numberHome2" autocomplete="off"
                       value="{{ $application->address['number_home2'] ?? '' }}">
            </div>
        </div>
        <div class="input">
            <div class="input_title">@lang('form.step7.apartment')</div>
            <div class="input_input">
                <input class="a_numberKv2" type="text" name="numberKv2" autocomplete="off"
                    value="{{ $application->address['apartment2'] ?? '' }}">
            </div>
        </div>
    </div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=6') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green nextApplication" data-id="{{ $application->id }}" data-key="address" data-step="8">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
