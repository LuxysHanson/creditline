<div class="container">
    <div class="img"><img src="./assets/images/icons/lease.svg" alt=""></div>
    <div class="title">@lang('form.step4.title')</div>
    <div class="input">
        <div class="input_title">@lang('form.step4.brand')</div>
        <div class="tt-select mark-select brands">
            <select class="a_marka" id="brandSelect" name="brand">
                <option>Выбирите</option>
                @if($brands)
                    @php($brand = $application->car['brand'] ?? '')
                    @foreach($brands as $value)
                        <option value="{{ $value }}"
                            @if($brand == $value) selected @endif
                        >{{ $value }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step4.model')</div>
        <div class="tt-select mark-select models">
            <select class="a_marka" id="modelSelect" name="model">
                <option>Выбирите</option>
                @if($models)
                    @php($model = $application->car['model'] ?? '')
                    @foreach($models as $value)
                        <option value="{{ $value }}"
                                @if($model == $value) selected @endif
                        >{{ $value }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step4.year')</div>
        <div class="input_input">
            <input class="a_yearCar" type="number" placeholder="2010" name="dateCar" autocomplete="off"
                value="{{ $application->car['year'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step4.color')</div>
        <div class="input_input">
            <input class="a_colorCar" type="text" placeholder="Белый металлик" name="colorCar"
                   autocomplete="off" value="{{ $application->car['color'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step4.number')</div>
        <div class="input_input">
            <input class="a_numberCar" type="text" placeholder="777ХХХ02, Х777ХХХ" name="numberCar"
                   autocomplete="off" value="{{ $application->car['number'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">VIN</div>
        <div class="input_input">
            <input class="a_vin" type="text" placeholder="G3WD63R12BVIGRF43T" name="vin" autocomplete="off"
                   value="{{ $application->car['vin'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step4.tech_password')</div>
        <div class="input_input">
            <input class="a_techPassword" type="text" placeholder="AT00501383" name="techPassword"
                   autocomplete="off" value="{{ $application->car['tech_password'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title"> </div>
        <div class="question">
            <div class="input_title">@lang('form.step4.tech_date')</div><img class="info" src="./assets/images/icons/question.svg" alt="">
            <div class="absolute info-2 info-6">@lang('general.block3.doc_date_desc')</div>
        </div>
        <div class="input_input">
            <input class="a_techPasswordDate" type="date" min="2010-01-01" placeholder="2010-01-01"
                   name="techPasswordDate" required value="{{ $application->car['tech_date'] ?? '' }}">
        </div>
    </div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=3') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green nextScreen" data-id="{{ $application->id }}" data-key="car" data-step="5">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
