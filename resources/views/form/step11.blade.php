<div class="container">
    <div class="img"><img src="/assets/images/icons/surrounded.svg" alt="surrounded"></div>
    <div class="title">@lang('form.step11.title')</div>


    <div class="desktop-visible stop-contiunous" style="margin: 3px">
        <p>@lang('form.stop-contiunous1')</p>
        <div class="qr-code" >
        </div>
        <p>@lang('form.stop-contiunous2')</p>
    </div>
    <div class="mobile-visible">
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