<div class="container">
    <div class="img"><img src="/assets/images/icons/driver-license.svg" alt="license-icon"></div>
    <div class="title">@lang('form.step10.title')</div>
    <div class="desc mobile-visible">@lang('form.step10.desc')</div>

    <div class="desktop-visible stop-contiunous" style="margin: 3px">
        <p>@lang('form.stop-contiunous1')</p>
        <div class="qr-code" >
        </div>
        <p>@lang('form.stop-contiunous2')</p>
    </div>

    <div class="mobile-visible">
        <div class="box active">
            <div class="input">
                <div class="input_title">@lang('form.step10.input_title')</div>
                <div class="input_input filer">
                    <form action="{{ route('ajax.file.store') }}" method="post"
                          class="frontScreenAutoForm" enctype="multipart/form-data">
                        <input type="file" id="frontScreenAuto" name="file" accept="image/*" capture="environment" required
                            value="{{ $application->car_images_1['front_side'] ?? '' }}">
                        <label class="label" onclick="showScreenModal(1)">
                            <div>@lang('form.step10.front_side')</div>
                            <img class="default" src="/assets/images/icons/camera2.svg" alt="camera2-icon">
                            <img class="error" src="/assets/images/icons/errorFile.svg" alt="error-icon">
                        </label>
                        <input type="hidden" name="store_type" value="images">
                    </form>
                    <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
                        <div class="text">@lang('form.step5.down_again')</div>
                    </div>
                </div>
            </div>
            <div class="input">
                <div class="input_title">@lang('form.step10.input_title')</div>
                <div class="input_input filer">
                    <form action="{{ route('ajax.file.store') }}" method="post"
                          class="backScreenAutoForm" enctype="multipart/form-data">
                        <input type="file" id="backScreenAuto" name="file" accept="image/*" capture="environment" required
                               value="{{ $application->car_images_1['back_side'] ?? '' }}">
                        <label class="label" onclick="showScreenModal(2)">
                            <div>@lang('form.step10.back_side')</div>
                            <img class="default" src="/assets/images/icons/camera2.svg" alt="camera2-icon">
                            <img class="error" src="/assets/images/icons/errorFile.svg" alt="error-icon">
                        </label>
                        <input type="hidden" name="store_type" value="images">
                    </form>
                    <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
                        <div class="text">@lang('form.step5.down_again')</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=9') }}">
                @lang('form.back_btn')
            </div>
            <div class="btn btn_green goPhotoAuto" data-id="{{ $application->id }}"
                data-key="car_images_1" data-step="11">
                @lang('form.continue_btn')
                <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
            </div>
        </div>
    </div>
</div>

<div class="screenModal">
    <div class="container">
        <div class="img"><img src="/assets/images/icons/driver-license.svg" alt="license-icon"></div>
        <div class="title">@lang('form.step10.modal1_title')</div>
        <div class="bannerPhoto" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/frontSPTC.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/frontSPTC.webp" type="image/pjp2">--}}
                <img src="/assets/images/frontSPTC.png" alt="front-photo">
            </picture>
            <div class="title">@lang('form.step10.sub_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step5.modal_text')</div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="frontScreenAuto">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="img"><img src="/assets/images/icons/driver-license.svg" alt="license"></div>
        <div class="title">@lang('form.step10.title')</div>
        <div class="bannerPhoto" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/backSPTC.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/backSPTC.webp" type="image/pjp2">--}}
                <img src="/assets/images/backSPTC.png" alt="back-photo">
            </picture>
            <div class="title">@lang('form.step10.modal2_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step5.modal_text')</div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="backScreenAuto">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/englishextra/qrjs2@0.1.7/js/qrjs2.min.js"></script>
    <script>
        // Generate a QR code with the page URL to direct the user to an alternative device
        let qrcode = QRCode.generatePNG(window.location.href, {
            ecclevel: "M",
            format: "html",
            fillcolor: "#FFFFFF",
            textcolor: "#000000",
            margin: 2,
            modulesize: 10
        });
        let img = document.createElement("img")
        img.src = qrcode
        img.style = "margin: 10px";
        $('.qr-code').append(img)
    </script>
@endsection