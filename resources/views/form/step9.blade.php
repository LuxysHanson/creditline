<div class="container">
    <div class="img"><img src="/assets/images/icons/g2232.svg" alt="g2232-icon"></div>
    <div class="title">@lang('form.step9.title')</div>
    <a class="pdf" href="{{ route('pdf.generate', [
    'hash' => $application->id_hash, 'type' => 'questionnaire'
]) }}" target="_blank">
        <div class="pdf_list">
            <img src="/assets/images/icons/docs.svg" alt="docs-icon1">
            <div class="pdf_text">@lang('form.step9.doc1_name')</div>
        </div>
    </a>
    <a class="pdf" href="{{ route('pdf.generate', [
    'hash' => $application->id_hash, 'type' => 'consent'
]) }}" target="_blank">
        <div class="pdf_list">
            <img src="/assets/images/icons/docs.svg" alt="docs-icon2">
            <div class="pdf_text">@lang('form.step9.doc2_name')</div>
        </div>
    </a>
    <a class="pdf" href="{{ route('pdf.generate', [
    'hash' => $application->id_hash, 'type' => 'information_form'
]) }}" target="_blank">
        <div class="pdf_list">
            <img src="/assets/images/icons/docs.svg" alt="docs-icon4">
            <div class="pdf_text">@lang('form.step9.doc4_name')</div>
        </div>
    </a>
    <div class="input">
        <div class="input_title">@lang('form.step9.code')</div>
        <div class="input_input">
            <input class="a_validCode2" type="code" autocomplete="off" placeholder="__ __ __ __ __ __" name="getCode" onkeypress="return AllowOnlyNumbers(event);">
        </div>
    </div>
    <div class="btn_again2" data-href="{{ route('form', 'hash='. $application->id_hash) }}"
         data-id="{{ $application->id }}" data-phone="{{ $application->phone }}">
        <div class="btn1 active">@lang('form.step2.again_title')</div>
        <div class="btn2">@lang('form.step2.again_desc')</div>
    </div>
    <div class="btn_row">
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=8') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green goTechPhotoAuto" data-id="{{ $application->id }}">
            @lang('form.sign_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>
