<div class="container">
    <div class="img"><img src="/assets/images/icons/camera.svg" alt="camera-icon"></div>
    <div class="title">@lang('form.step5.title')</div>
    <div class="select selectType">
        @php($doc_type = $application->doc_images['doc_type'] ?? 1)
        <div class="title">@lang('form.step5.udl_title')</div>
        <div class="select_row">
            <input type="radio" name="documentType" id="UdLichnost" value="1"
                   @if($doc_type == 1) checked @endif>
            <label for="UdLichnost">@lang('form.step5.udl')</label>
        </div>
        <div class="select_row">
            <input type="radio" name="documentType" id="Password" value="2"
                   @if($doc_type == 2) checked @endif>
            <label for="Password">@lang('form.step5.passport')</label>
        </div>
    </div>
    <div class="box active">
        <div class="input">
            <div class="input_title">@lang('form.step5.udl')</div>
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                    class="frontScreenForm" enctype="multipart/form-data">
                    <input type="file" id="frontScreen" name="file" accept="image/*" required
                        value="{{ $application->doc_images['front_side'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(1)">
                        <div>@lang('form.step5.front_side')</div>
                        <img class="default" src="/assets/images/icons/camera2.svg" alt="camera2-img">
                        <img class="error" src="/assets/images/icons/errorFile.svg" alt="error-file-icon">
                    </label>
                    <input type="hidden" name="store_type" value="images">
                </form>
                <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
                    <div class="text">@lang('form.step5.down_again')</div>
                </div>
            </div>
        </div>
        <div class="input">
            <div class="input_title">@lang('form.step5.udl')</div>
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="backScreenForm" enctype="multipart/form-data">
                    <input type="file" id="backScreen" name="file" accept="image/*" required
                        value="{{ $application->doc_images['back_side'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(2)">
                        <div>@lang('form.step5.reverse_side')</div>
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
            <div class="input_title">@lang('form.step5.selfie')</div>
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="selfieScreenForm" enctype="multipart/form-data">
                    <input type="file" id="selfieScreen" name="file" accept="image/*" required
                           value="{{ $application->doc_images['selfie'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(3)">
                        <div>@lang('form.step5.with_udl')</div>
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
    <div class="box">
        <div class="input">
            <div class="input_title">@lang('form.step5.passport')</div>
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="passwordScreenForm" enctype="multipart/form-data">
                    <input type="file" id="passwordScreen" name="file" accept="image/*" required
                           value="{{ $application->doc_images['passport'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(4)">
                        <div>@lang('form.step5.passport')</div>
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
            <div class="input_title">@lang('form.step5.selfie')</div>
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="withPasswordScreenForm" enctype="multipart/form-data">
                    <input type="file" id="withPasswordScreen" name="file" accept="image/*" required
                           value="{{ $application->doc_images['with_passport'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(5)">
                        <div>@lang('form.step5.with_passport')</div>
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
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=4') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green personalData" data-id="{{ $application->id }}" data-key="doc_images" data-step="6">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>

<div class="screenModal">
    <div class="container">
        <div class="img"><img src="/assets/images/icons/camera.svg" alt="camera-icon"></div>
        <div class="title">@lang('form.step5.modal1_title')</div>
        <div class="bannerPhoto" style="position: relative">
            <picture>
{{--                <source srcset="/assets/images/frontUdLich.webp" type="image/webp">--}}
{{--                <source srcset="/assets/images/frontUdLich.webp" type="image/pjp2">--}}
                <img src="{{ $application->doc_images['front_side'] ?? '/assets/images/frontUdLich.png' }}" alt="banner-photo">
            </picture>
            <div class="title">@lang('form.step5.udl_side_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step5.modal_text')</div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="frontScreen">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="img"><img src="/assets/images/icons/camera.svg" alt="camera-icon"></div>
        <div class="title">@lang('form.step5.modal1_title')</div>
        <div class="bannerPhoto" style="position: relative">
            <picture>
{{--                <source srcset="/assets/images/backUdLich.webp" type="image/webp">--}}
{{--                <source srcset="/assets/images/backUdLich.webp" type="image/pjp2">--}}
                <img src="{{ $application->doc_images['back_side'] ?? '/assets/images/backUdLich.png' }}" alt="back-udl-photo">
            </picture>
            <div class="title">@lang('form.step5.reverse_side_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step5.modal_text')</div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="backScreen">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto vertical" style="position: relative">
            <picture>
{{--                <source srcset="/assets/images/selfieUdLich.webp" type="image/webp">--}}
{{--                <source srcset="/assets/images/selfieUdLich.webp" type="image/pjp2">--}}
                <img src="{{ $application->doc_images['selfie'] ?? '/assets/images/selfieUdLich.png' }}" alt="selfie-photo">
            </picture>
            <div class="title">@lang('form.step5.modal3_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step5.modal_text')</div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="selfieScreen">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto vertical" style="position: relative">
            <picture>
{{--                <source srcset="/assets/images/passport.webp" type="image/webp">--}}
{{--                <source srcset="/assets/images/passport.webp" type="image/pjp2">--}}
                <img src="{{ $application->doc_images['passport'] ?? '/assets/images/passport.png' }}" alt="passport-photo">
            </picture>
            <div class="title">@lang('form.step5.modal4_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step5.modal_text')</div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="passwordScreen">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto vertical" style="position: relative">
            <picture>
{{--                <source srcset="/assets/images/withPassport.webp" type="image/webp">--}}
{{--                <source srcset="/assets/images/withPassport.webp" type="image/pjp2">--}}
                <img src="{{ $application->doc_images['with_passport'] ?? '/assets/images/withPassport.png' }}" alt="with-passport-photo">
            </picture>
            <div class="title">@lang('form.step5.modal5_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="question"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step5.modal_text')</div>
        </div>
        <div class="btn_row">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="withPasswordScreen">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
