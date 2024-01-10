<div class="container">
    <div class="img"><img src="/assets/images/icons/personalInfo.svg" alt="personal-icon"></div>
    <div class="title">@lang('form.step6.title')</div>
    <div class="input">
        <div class="input_title">@lang('form.step6.patronymic')</div>
        <div class="input_input">
            <input class="a_patronymic" type="text" name="patronymic" autocomplete="off"
                value="{{ $application->client['patronymic'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.name')</div>
        <div class="input_input">
            <input class="a_name" type="text" name="name" autocomplete="off"
                   value="{{ $application->client['name'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.surname')</div>
        <div class="input_input">
            <input class="a_surname" type="text" name="surname" autocomplete="off"
                   value="{{ $application->client['surname'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.birth_date')</div>
        <div class="input_input">
            <input class="a_bornDate" id="a_bornDate" type="text" name="bornDate" required
                   value="{{ $application->client['birth_date'] ?? '' }}"  max="<?=date('Y-m-d', mktime(0, 0, 0, date("m"),   date("d"),   date("Y")-18))?>">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.status')</div>
        <div class="tt-select">
            <select class="a_fStatus" name="fStatus">
                <option>Выбирите</option>
                @php($f_status = $application->client['family_status'] ?? 0)
                @foreach($application->getFamilyStatuses() as $key => $value)
                    <option value="{{ $key }}"
                            @if(isset($application->client['family_status'])) @if($f_status == $key) selected @endif @endif
                    >{{ $value }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.doc_type')</div>
        <div class="tt-select">
            <select class="a_typeDoc" name="typeDoc">

                <option>Выбирите</option>
                @php($doc_type = $application->client['doc_type'] ?? 0)
                @foreach($application->getDocumentTypes() as $key => $value)
                    <option value="{{ $key }}"
                            @if(isset($application->client['doc_type']))   @if($doc_type == $key) selected @endif @endif
                    >{{ $value }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.number_doc')</div>
        <div class="input_input">
            <input class="a_numberDoc" type="number" name="numberDoc" autocomplete="off" maxlength="9" minlength="9"
                value="{{ $application->client['number_doc'] ?? '' }}">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.date_doc')</div>
        <div class="input_input">
            <input class="a_dateDoc" id="a_dateDoc" type="text" name="dateDoc" required
                   value="{{ $application->client['date_doc'] ?? '' }}" max="<?=date('Y-m-d')?>">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.date_doc2')</div>
        <div class="input_input">
            <input class="a_dateDoc2" id="a_dateDoc2" type="text" name="dateDoc2" required
                   value="{{ $application->client['date_doc2'] ?? '' }}" min="<?=date('Y-m-d', mktime(0, 0, 0, date("m"),   date("d")+2,   date("Y")))?>">
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.issued_title')</div>
        <div class="tt-select">
            <select class="a_issuedByDoc" name="issuedByDoc">
                <option>Выбирите</option>
                @php($issued = $application->client['issued_by_doc'] ?? 0)
                @foreach($application->getIssuedByDocument() as $key => $value)
                    <option value="{{ $key }}"
                            @if(isset($application->client['issued_by_doc'])) @if($issued == $key) selected @endif @endif
                    >{{ $value }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="input">
        <div class="input_title">@lang('form.step6.citizienship_title')</div>
        <div class="tt-select">
            <select class="a_citizenshipDoc" name="citizenshipDoc">
                <option>Выбирите</option>
                @php($citizienship = $application->client['citizienship'] ?? 0)
                @foreach($application->getCitizienships() as $key => $value)
                    <option value="{{ $key }}"
                        @if(isset($application->client['citizienship'])) @if($citizienship == $key) selected @endif @endif
                    >{{ $value }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=5') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green nextAddress" data-id="{{ $application->id }}" data-key="client" data-step="7">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
<script>
    var today = new Date();
    var maxyear = new Date();
    maxyear.setFullYear(maxyear.getFullYear() - 18);
    console.log(maxyear);
    var picker = new Pikaday({
        field: document.getElementById('a_bornDate'),
        format:'YYYY-MM-DD',
        defaultDate:maxyear,
        onSelect: function() {
            var date = document.createTextNode(this.getMoment().format('Do MMMM YYYY') + ' ');
            startDate = maxyear;
        },
        maxDate: maxyear,  // maximum/latest date set to today
        // demo only
        position: 'top left',
        reposition: true,
        theme:'triangle-theme'

    });
    picker.setEndRange(maxyear);
    var picker2 = new Pikaday({
        field: document.getElementById('a_dateDoc'),
        format:'YYYY-MM-DD',
        onSelect: function() {
            var date = document.createTextNode(this.getMoment().format('Do MMMM YYYY') + ' ');
            startDate = today;
        },
        maxDate: today,  // maximum/latest date set to today
        // demo only
        position: 'top left',
        reposition: true,
        theme:'triangle-theme'

    });
    var picker3 = new Pikaday({
        field: document.getElementById('a_dateDoc2'),
        format:'YYYY-MM-DD',
        onSelect: function() {
            var date = document.createTextNode(this.getMoment().format('Do MMMM YYYY') + ' ');
            startDate = today;
        },
        minDate: today,  // maximum/latest date set to today
        // demo only
        position: 'top left',
        reposition: true,
        theme:'triangle-theme'

    });

</script>
