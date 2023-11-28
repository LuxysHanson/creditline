<div class="container">
    <div class="img"><img src="/assets/images/icons/surrounded.svg" alt="surrounded-icon"></div>
    <div class="title">@lang('form.step12.title')</div>
    <div class="box active">
        <div class="input">
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="auto1Form" enctype="multipart/form-data">
                    <input type="file" id="auto1" name="file" accept="image/*" capture="environment" required
                           value="{{ $application->car_images_2['auto1'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(1)">
                        <div>@lang('form.step12.input1_title')</div>
                        <img class="default" src="/assets/images/icons/camera2.svg" alt="camera2-icon">
                        <img class="error" src="/assets/images/icons/errorFile.svg" alt="error-icon">
                    </label>
                    <input type="hidden" name="store_type" value="images">
                </form>
                <div class="question"><img src="./assets/images/icons/warning.svg" alt="warning-auto">
                    <div class="text">@lang('form.step5.down_again')</div>
                </div>
            </div>
        </div>
        <div class="input">
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="auto2Form" enctype="multipart/form-data">
                    <input type="file" id="auto2" name="file" accept="image/*" capture="environment" required
                           value="{{ $application->car_images_2['auto2'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(2)">
                        <div>@lang('form.step12.input2_title')</div>
                        <img class="default" src="/assets/images/icons/camera2.svg" alt="camer2-icon">
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
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="auto3Form" enctype="multipart/form-data">
                    <input type="file" id="auto3" name="file" accept="image/*" capture="environment" required
                           value="{{ $application->car_images_2['auto3'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(3)">
                        <div>@lang('form.step12.input3_title')</div>
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
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="auto4Form" enctype="multipart/form-data">
                    <input type="file" id="auto4" name="file" accept="image/*" capture="environment" required
                           value="{{ $application->car_images_2['auto4'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(4)">
                        <div>@lang('form.step12.input4_title')</div>
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
        <div class="question2"><img src="/assets/images/icons/warning.svg" alt="warning-icon">
            <div class="text">@lang('form.step12.input4_text')</div>
        </div>
        <div class="input">
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="auto5Form" enctype="multipart/form-data">
                    <input type="file" id="auto5" name="file" accept="image/*" capture="environment" required
                           value="{{ $application->car_images_2['auto5'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(5)">
                        <div>@lang('form.step12.input5_title')</div>
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
            <div class="input_input filer">
                <form action="{{ route('ajax.file.store') }}" method="post"
                      class="auto6Form" enctype="multipart/form-data">
                    <input type="file" id="auto6" name="file" accept="image/*" capture="environment" required
                           value="{{ $application->car_images_2['auto6'] ?? '' }}">
                    <label class="label" onclick="showScreenModal(6)">
                        <div>@lang('form.step12.input6_title')</div>
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
        <div class="btn btn_gray goBackBtn" data-href="{{ route('form', 'hash='. $application->id_hash .'&stepTo=11') }}">
            @lang('form.back_btn')
        </div>
        <div class="btn btn_green goPushAll" data-id="{{ $application->id }}"
            data-key="car_images_2" data-step="13">
            @lang('form.continue_btn')
            <img src="/assets/images/icons/arrow_left.svg" alt="arrow-left-icon">
        </div>
    </div>
</div>

<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto type2" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/a2.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/a2.webp" type="image/pjp2">--}}
                <img src="/assets/images/a1.png" alt="banner1-img">
            </picture>
            <div class="title">@lang('form.step12.input1_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="btn_row type2">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="auto1">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto type2" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/a1.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/a1.webp" type="image/pjp2">--}}
                <img src="/assets/images/a2.png" alt="banner2-img">
            </picture>
            <div class="title">@lang('form.step12.input2_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="btn_row type2">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="auto2">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto type2" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/a3.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/a3.webp" type="image/pjp2">--}}
                <img src="/assets/images/a3.png" alt="banner3-img">
            </picture>
            <div class="title">@lang('form.step12.input3_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="btn_row type2">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="auto3">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto type2" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/a4.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/a4.webp" type="image/pjp2">--}}
                <img src="/assets/images/a4.png" alt="banner4-img">
            </picture>
            <div class="title">@lang('form.step12.input4_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="btn_row type2">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="auto4">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto type2" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/a6.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/a6.webp" type="image/pjp2">--}}
                <img src="/assets/images/a6.png" alt="banner6-img">
            </picture>
            <div class="title">@lang('form.step12.input5_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="btn_row type2">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="auto5">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
<div class="screenModal">
    <div class="container">
        <div class="bannerPhoto vertical" style="position: relative">
            <picture>
{{--                <source srcset="./assets/images/a5.webp" type="image/webp">--}}
{{--                <source srcset="./assets/images/a5.webp" type="image/pjp2">--}}
                <img src="/assets/images/a5.png" alt="banner5-img">
            </picture>
            <div class="title">@lang('form.step12.modal5_title')</div>
            <div class="global-preloader" style="display: none"></div>
        </div>
        <div class="btn_row type2">
            <div class="btn btn_gray" onclick="closeScreenModal()">@lang('form.back_btn')</div>
            <label class="btn btn_green active uploadPhotoBtn" for="auto6">@lang('form.upload_photo')</label>
        </div>
    </div>
</div>
