@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                          class="form-edit-add"
                          action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                          method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if($dataTypeContent->status == \App\Models\Application::STATUS_CONFIRMED)
                                <div class="alert alert-success">Заявка принято</div>
                            @endif
                            @if($dataTypeContent->status == \App\Models\Application::STATUS_NOT_CONFIRMED)
                                <div class="alert alert-warning">Заявка отказано</div>
                            @endif
                                <input id="status" type="hidden" name="status" class="form-control" value="{{ $dataTypeContent->status }}">
                            <div class="form-group">
                                <label for="a_step">Текущий шаг</label>
                                <input id="a_step" type="text" name="step" class="form-control"
                                       value="{{ $dataTypeContent->step ?? 1 }}">
                            </div>

                            <div class="alert alert-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 style="font-weight: bold">Шаг №1 (Номер телефона)</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" disabled
                                               value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 1) }}">
                                        <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                            Скопировать ссылку
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="a_phone">Номер телефона</label>
                                <input id="a_phone" type="text" name="phone" class="form-control"
                                       value="{{ $dataTypeContent->phone ?? '' }}">
                            </div>

                            <hr>

                            @if($dataTypeContent->step >= 2)
                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №2 (Авторизация: СМС-код)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 2) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <hr>

                            @if($dataTypeContent->step >= 3)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №3 (Сведения о займе)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 3) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="a_iin">ИИН</label>
                                    <input id="a_iin" type="text" name="loan[iin]" class="form-control"
                                           value="{{ $dataTypeContent->loan['iin'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_summa">Сумма микрокредита</label>
                                    <input id="a_summa" type="text" name="loan[summa]" class="form-control"
                                           value="{{ $dataTypeContent->loan['summa'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_deadline">Срок микрокредита</label>
                                    <input id="a_deadline" type="text" name="loan[deadline]" class="form-control"
                                           value="{{ $dataTypeContent->loan['deadline'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_repayment_type">Тип погашения</label>
                                    @php($type = $dataTypeContent->loan['repayment_type'] ?? '')
                                    <select name="loan[repayment_type]" id="a_repayment_type" class="form-control">
                                        <option value="1" @if($type == 1) selected @endif>Процентный</option>
                                        <option value="2" @if($type == 2) selected @endif>Аннуитетный</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="a_monthly_pay">Ежемесячный платеж</label>
                                    <input id="a_monthly_pay" type="text" name="loan[monthly_pay]" class="form-control"
                                           value="{{ $dataTypeContent->loan['monthly_pay'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_payment">Ежемесячный доход</label>
                                    <input id="a_payment" type="text" name="loan[payment]" class="form-control"
                                           value="{{ $dataTypeContent->loan['payment'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_add_phone">Дополнительный номер</label>
                                    <input id="a_add_phone" type="text" name="loan[additional_phone]"
                                           class="form-control"
                                           value="{{ $dataTypeContent->loan['additional_phone'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_email">Электронная почта</label>
                                    <input id="a_email" type="email" name="loan[email]" class="form-control"
                                           value="{{ $dataTypeContent->loan['email'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_iban">Номер счета (IBAN)</label>
                                    <input id="a_iban" type="text" name="loan[iban]" class="form-control"
                                           value="{{ $dataTypeContent->loan['iban'] ?? '' }}">
                                </div>
                            @endif

                            @if($dataTypeContent->step >= 4)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №4 (Сведения об автомобиле)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 4) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="a_brand">Марка</label>
                                    @php($brand = $dataTypeContent->car['brand'] ?? '')
                                    <select name="car[brand]" id="a_brand" class="form-control">
                                        @php($brands = \App\Models\Brand::query()->orderBy('name')->pluck('name'))
                                        @if($brands->isNotEmpty())
                                            @foreach($brands as $value)
                                                <option value="{{ $value }}" @if($brand == $value) selected @endif>
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="a_model">Модель</label>
                                    @php($model = $dataTypeContent->car['model'] ?? '')
                                    <select name="car[model]" id="a_model" class="form-control">
                                        @php($models = \App\Models\Model::query()->orderBy('name')->pluck('name'))
                                        @if($models->isNotEmpty())
                                            @foreach($models as $value)
                                                <option value="{{ $value }}" @if($model == $value) selected @endif>
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="a_year">Год выпуска</label>
                                    <input id="a_year" type="number" name="car[year]" class="form-control"
                                           value="{{ $dataTypeContent->car['year'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_color">Цвет</label>
                                    <input id="a_color" type="text" name="car[color]" class="form-control"
                                           value="{{ $dataTypeContent->car['color'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_number">Гос номер</label>
                                    <input id="a_number" type="text" name="car[number]" class="form-control uppercase"
                                           value="{{ $dataTypeContent->car['number'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_vin">VIN</label>
                                    <input id="a_vin" type="text" name="car[vin]" class="form-control uppercase"
                                           value="{{ $dataTypeContent->car['vin'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_tech_password">Номер свидетельства о регистрации ТС (Тех.
                                        паспорт)</label>
                                    <input id="a_tech_password" type="text" name="car[tech_password]"
                                           class="form-control uppercase"
                                           value="{{ $dataTypeContent->car['tech_password'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_tech_date">Дата выдачи свидетельства о регистрации ТС (Тех.
                                        паспорт)</label>
                                    <input id="a_tech_date" type="date" name="car[tech_date]" class="form-control"
                                           value="{{ $dataTypeContent->car['tech_date'] ?? '' }}">
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 5)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №5 (Фото документов клиента)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 5) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="a_document_type">Тип документа</label>
                                    @php($doc_type = $dataTypeContent->doc_images['doc_type'] ?? '')
                                    <select name="doc_images[doc_type]" id="a_document_type" class="form-control">
                                        <option value="1" @if($type == 1) selected @endif>Удостоверение личности
                                        </option>
                                        <option value="2" @if($type == 2) selected @endif>Паспорт</option>
                                    </select>
                                </div>

                                @if($doc_type == 2)

                                    @php($passport = $dataTypeContent->doc_images['passport'] ?? '')
                                    <div class="form-group">
                                        <label for="a_passport">Паспорт</label>
                                        @if($passport)
                                            <div data-field-name="doc_images[passport]">
                                                <a href="#" class="voyager-x remove-single-image"
                                                   style="position:absolute;"></a>
                                                <img src="{{ env('APP_URL') . $passport }}"
                                                     data-file-name="doc_images[passport]"
                                                     data-id="{{ $dataTypeContent->getKey() }}"
                                                     style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                            </div>
                                        @endif
                                        <!--input id="a_passport" type="file" name="doc_images[passport]" accept="image/*"-->
                                    </div>

                                    @php($with_passport = $dataTypeContent->doc_images['with_passport'] ?? '')
                                    <div class="form-group">
                                        <label for="a_with_passport">Селфи (С паспортом)</label>
                                        @if($with_passport)
                                            <div data-field-name="doc_images[with_passport]">
                                                <a href="#" class="voyager-x remove-single-image"
                                                   style="position:absolute;"></a>
                                                <img src="{{ env('APP_URL') . $with_passport }}"
                                                     data-file-name="doc_images[with_passport]"
                                                     data-id="{{ $dataTypeContent->getKey() }}"
                                                     style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                            </div>
                                        @endif
                                        <!--input id="a_with_passport" type="file" name="doc_images[with_passport]"
                                               accept="image/*"-->
                                    </div>

                                @else

                                    @php($front_side = $dataTypeContent->doc_images['front_side'] ?? '')
                                    <div class="form-group">
                                        <label for="a_front_side">Удостоверение личности (Лицевая сторона)</label>
                                        @if($front_side)
                                            <div data-field-name="doc_images[front_side]">
                                                <a href="#" class="voyager-x remove-single-image"
                                                   style="position:absolute;"></a>
                                                <img src="{{ env('APP_URL') . $front_side }}"
                                                     data-file-name="doc_images[front_side]"
                                                     data-id="{{ $dataTypeContent->getKey() }}"
                                                     style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                            </div>
                                        @endif
                                        <!--input id="a_front_side" type="file" name="doc_images[front_side]"
                                               accept="image/*"-->
                                    </div>

                                    @php($back_side = $dataTypeContent->doc_images['back_side'] ?? '')
                                    <div class="form-group">
                                        <label for="a_back_side">Удостоверение личности (Оборотная сторона)</label>
                                        @if($back_side)
                                            <div data-field-name="doc_images[back_side]">
                                                <a href="#" class="voyager-x remove-single-image"
                                                   style="position:absolute;"></a>
                                                <img src="{{ env('APP_URL') . $back_side }}"
                                                     data-file-name="doc_images[back_side]"
                                                     data-id="{{ $dataTypeContent->getKey() }}"
                                                     style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                            </div>
                                        @endif
                                        <!--input id="a_back_side" type="file" name="doc_images[back_side]"
                                               accept="image/*"-->
                                    </div>

                                    @php($selfie = $dataTypeContent->doc_images['selfie'] ?? '')
                                    <div class="form-group">
                                        <label for="a_selfie">Селфи (С удостоверением личности)</label>
                                        @if($selfie)
                                            <div data-field-name="doc_images[selfie]">
                                                <a href="#" class="voyager-x remove-single-image"
                                                   style="position:absolute;"></a>
                                                <img src="{{ env('APP_URL') . $selfie }}"
                                                     data-file-name="doc_images[selfie]"
                                                     data-id="{{ $dataTypeContent->getKey() }}"
                                                     style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                            </div>
                                        @endif
                                        <!--input id="a_selfie" type="file" name="doc_images[selfie]" accept="image/*"-->
                                    </div>

                                @endif

                            @endif

                            @if($dataTypeContent->step >= 6)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №6 (Данные клиента)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 6) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="a_patronymic">Фамилия</label>
                                    <input id="a_patronymic" type="text" name="client[patronymic]" class="form-control"
                                           value="{{ $dataTypeContent->client['patronymic'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_name">Имя</label>
                                    <input id="a_name" type="text" name="client[name]" class="form-control"
                                           value="{{ $dataTypeContent->client['name'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_surname">Отчество</label>
                                    <input id="a_surname" type="text" name="client[surname]" class="form-control"
                                           value="{{ $dataTypeContent->client['surname'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_birth_date">Дата рождения</label>
                                    <input id="a_birth_date" type="date" name="client[birth_date]" class="form-control"
                                           value="{{ $dataTypeContent->client['birth_date'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_f_status">Семейное положение</label>
                                    @php($f_status = $dataTypeContent->client['family_status'] ?? '')
                                    <select name="client[family_status]" id="a_f_status" class="form-control">
                                        @foreach($dataTypeContent->getFamilyStatuses() as $key => $value)
                                            <option value="{{ $value }}" @if($f_status == $value) selected @endif>
                                                {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="a_doc_type">Тип документа</label>
                                    @php($doc_type = $dataTypeContent->client['doc_type'] ?? '')
                                    <select name="client[doc_type]" id="a_doc_type" class="form-control">
                                        @foreach($dataTypeContent->getDocumentTypes() as $key => $value)
                                            <option value="{{ $value }}" @if($doc_type == $value) selected @endif>
                                                {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="a_number_doc">Номер документа</label>
                                    <input id="a_number_doc" type="text" name="client[number_doc]" class="form-control"
                                           value="{{ $dataTypeContent->client['number_doc'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_date_doc">Дата выдачи</label>
                                    <input id="a_date_doc" type="date" name="client[date_doc]" class="form-control"
                                           value="{{ $dataTypeContent->client['date_doc'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_date_doc2">Дата окончания</label>
                                    <input id="a_date_doc2" type="date" name="client[date_doc2]" class="form-control"
                                           value="{{ $dataTypeContent->client['date_doc2'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_issued_by_doc">Кем выдано</label>
                                    @php($issued_by_doc = $dataTypeContent->client['issued_by_doc'] ?? '')
                                    <select name="client[issued_by_doc]" id="a_issued_by_doc" class="form-control">
                                        @foreach($dataTypeContent->getIssuedByDocument() as $key => $value)
                                            <option value="{{ $value }}" @if($doc_type == $value) selected @endif>
                                                {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="a_citizienship">Гражданство</label>
                                    @php($citizienship = $dataTypeContent->client['citizienship'] ?? '')
                                    <select name="client[citizienship]" id="a_citizienship" class="form-control">
                                        @foreach($dataTypeContent->getCitizienships() as $key => $value)
                                            <option value="{{ $value }}" @if($doc_type == $value) selected @endif>
                                                {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 7)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №7 (Адресные данные клиента)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 7) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="a_locality">Населённый пункт</label>
                                    <input id="a_locality" type="text" name="address[locality]" class="form-control"
                                           value="{{ $dataTypeContent->address['locality'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_street">Улица</label>
                                    <input id="a_street" type="text" name="address[street]" class="form-control"
                                           value="{{ $dataTypeContent->address['street'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_number_home">Номер дома</label>
                                    <input id="a_number_home" type="text" name="address[number_home]"
                                           class="form-control"
                                           value="{{ $dataTypeContent->address['number_home'] ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="a_apartment">Номер квартиры</label>
                                    <input id="a_apartment" type="text" name="address[apartment]" class="form-control"
                                           value="{{ $dataTypeContent->address['apartment'] ?? '' }}">
                                </div>

                                @php($equal_address = $dataTypeContent->address['equal_address'] ?? 'false')
                                <div class="form-group">
                                    <label for="a_equal_address">Адрес проживания (Совпадает с адресом прописки)</label>
                                    <input id="a_equal_address" type="checkbox" name="address[equal_address]"
                                           @if($equal_address == 'true') checked data-on="On" @else data-off="Off"
                                           @endif
                                           class="toggleswitch" value="{{ $equal_address == 'true' }}">
                                </div>

                                @if($equal_address == 'false')
                                    <div class="form-group">
                                        <label for="a_locality2">Населённый пункт</label>
                                        <input id="a_locality2" type="text" name="address[locality2]"
                                               class="form-control"
                                               value="{{ $dataTypeContent->address['locality2'] ?? '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="a_street2">Улица</label>
                                        <input id="a_street2" type="text" name="address[street2]" class="form-control"
                                               value="{{ $dataTypeContent->address['street2'] ?? '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="a_number_home2">Номер дома</label>
                                        <input id="a_number_home2" type="text" name="address[number_home2]"
                                               class="form-control"
                                               value="{{ $dataTypeContent->address['number_home2'] ?? '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="a_apartment2">Номер квартиры</label>
                                        <input id="a_apartment2" type="text" name="address[apartment2]"
                                               class="form-control"
                                               value="{{ $dataTypeContent->address['apartment2'] ?? '' }}">
                                    </div>
                                @endif

                            @endif

                            @if($dataTypeContent->step >= 8)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №8 (Подписание заявки)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 8) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 9)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №9 (Подписание документов заявки: СМС-код)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 9) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a target="_blank" style="font-weight: bold;display: block" href="{{ route('pdf.generate', [
    'hash' => $dataTypeContent->id_hash, 'type' => 'questionnaire'
]) }}">Заявление-анкеты на предоставление кредита</a>
                                            <a target="_blank" style="font-weight: bold;display: block" href="{{ route('pdf.generate', [
    'hash' => $dataTypeContent->id_hash, 'type' => 'consent'
]) }}">Согласие субъекта КИ</a>
                                            <a target="_blank" style="font-weight: bold;display: block" href="{{ route('pdf.generate', [
    'hash' => $dataTypeContent->id_hash, 'type' => 'agreement'
]) }}">Согласие на сбор и обработку персональных данных</a>
                                            <a target="_blank" style="font-weight: bold;display: block" href="{{ route('pdf.generate', [
    'hash' => $dataTypeContent->id_hash, 'type' => 'information_form'
]) }}">Заявление на соответствие</a>
                                        </div>
                                    </div>
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 10)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №10 (Фото документов авто)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 10) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                @php($c_front_side = $dataTypeContent->car_images_1['front_side'] ?? '')
                                <div class="form-group">
                                    <label for="ac_front_side">СРСТ/Техпаспорт (Лицевая сторона)</label>
                                    @if($c_front_side)
                                        <div data-field-name="car_images_1[front_side]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $c_front_side }}"
                                                 data-file-name="car_images_1[front_side]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="ac_front_side"  type="file" name="car_images_1[front_side]"
                                           accept="image/*"-->
                                </div>

                                @php($c_back_side = $dataTypeContent->car_images_1['back_side'] ?? '')
                                <div class="form-group">
                                    <label for="ac_back_side">СРСТ/Техпаспорт (Оборотная сторона)</label>
                                    @if($c_back_side)
                                        <div data-field-name="car_images_1[back_side]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $c_back_side }}"
                                                 data-file-name="car_images_1[back_side]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="ac_back_side"  type="file" name="car_images_1[back_side]"
                                           accept="image/*"-->
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 11)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №11 (Фото автомобиля)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 11) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 12)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №12 (Фото автомобиля)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 12) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                @php($auto1 = $dataTypeContent->car_images_2['auto1'] ?? '')
                                <div class="form-group">
                                    <label for="a_auto1">Фото авто (Спереди слева)</label>
                                    @if($auto1)
                                        <div data-field-name="car_images_2[auto1]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $auto1 }}"
                                                 data-file-name="car_images_2[auto1]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="a_auto1" type="file" name="car_images_2[auto1]"
                                           accept="image/*"-->
                                </div>

                                @php($auto2 = $dataTypeContent->car_images_2['auto2'] ?? '')
                                <div class="form-group">
                                    <label for="a_auto2">Фото авто (Спереди справа)</label>
                                    @if($auto2)
                                        <div data-field-name="car_images_2[auto2]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $auto2 }}"
                                                 data-file-name="car_images_2[auto2]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="a_auto2" type="file" name="car_images_2[auto2]"
                                           accept="image/*"-->
                                </div>

                                @php($auto3 = $dataTypeContent->car_images_2['auto3'] ?? '')
                                <div class="form-group">
                                    <label for="a_auto3">Фото авто (Сзади слева)</label>
                                    @if($auto3)
                                        <div data-field-name="car_images_2[auto3]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $auto3 }}"
                                                 data-file-name="car_images_2[auto3]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="a_auto3" type="file" name="car_images_2[auto3]"
                                           accept="image/*"-->
                                </div>

                                @php($auto4 = $dataTypeContent->car_images_2['auto4'] ?? '')
                                <div class="form-group">
                                    <label for="a_auto4">Фото авто (Сзади справа)</label>
                                    @if($auto4)
                                        <div data-field-name="car_images_2[auto4]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $auto4 }}"
                                                 data-file-name="car_images_2[auto4]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="a_auto4" type="file" name="car_images_2[auto4]"
                                           accept="image/*"-->
                                </div>

                                @php($auto5 = $dataTypeContent->car_images_2['auto5'] ?? '')
                                <div class="form-group">
                                    <label for="a_auto5">Приборная панель с заведённым двигателем</label>
                                    @if($auto5)
                                        <div data-field-name="car_images_2[auto5]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $auto5 }}"
                                                 data-file-name="car_images_2[auto5]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="a_auto5" type="file" name="car_images_2[auto5]"
                                           accept="image/*"-->
                                </div>

                                @php($auto6 = $dataTypeContent->car_images_2['auto6'] ?? '')
                                <div class="form-group">
                                    <label for="a_auto6">VIN код на кузове, не под стеклом</label>
                                    @if($auto6)
                                        <div data-field-name="car_images_2[auto6]">
                                            <a href="#" class="voyager-x remove-single-image"
                                               style="position:absolute;"></a>
                                            <img src="{{ env('APP_URL') . $auto6 }}"
                                                 data-file-name="car_images_2[auto6]"
                                                 data-id="{{ $dataTypeContent->getKey() }}"
                                                 style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                        </div>
                                    @endif
                                    <!--input id="a_auto6" type="file" name="car_images_2[auto6]"
                                           accept="image/*"-->
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 13)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №13 (Обработка заявки менеджером)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 13) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="assessed">Оценочная стоимость</label>
                                            <input type="text" class="form-control" id="assessed"
                                                   value="{{ $dataTypeContent->assessed ?? '' }}">
                                        </div>
                                    </div>

                                    @if($dataTypeContent->status == \App\Models\Application::STATUS_NEW)
                                        <button type="button" class="btn btn-warning" onclick="applicationReject(this)">
                                            Отказать
                                        </button>
                                        <button type="button" class="btn btn-success" onclick="applicationAccept(this)">
                                            Принять
                                        </button>
                                    @else
                                        @if($dataTypeContent->status == \App\Models\Application::STATUS_CONFIRMED)
                                            <div class="alert alert-success">Заявка принята</div>
                                        @endif
                                        @if($dataTypeContent->status == \App\Models\Application::STATUS_NOT_CONFIRMED)
                                            <div class="alert alert-warning">Заявка отказано</div>
                                        @endif
                                    @endif
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 14)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №14 (Подписание документов микрокредита: СМС-код)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 14) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a target="_blank" style="font-weight: bold;display: block" href="{{ route('pdf.generate', [
    'hash' => $dataTypeContent->id_hash, 'type' => 'repayment_schedule'
]) }}">График погашения микрокредита</a>
                                            <a target="_blank" style="font-weight: bold;display: block" href="{{ route('pdf.generate', [
    'hash' => $dataTypeContent->id_hash, 'type' => 'pledge_ticket'
]) }}">Залоговый билет с правом управления транспортным средством</a>
                                            <a target="_blank" style="font-weight: bold;display: block" href="{{ route('pdf.generate', [
    'hash' => $dataTypeContent->id_hash, 'type' => 'notification'
]) }}">Уведомление в ГАИ о регистрации залога транспортного средства</a>
                                        </div>
                                    </div>
                                </div>

                            @endif

                            @if($dataTypeContent->step >= 15)

                                <div class="alert alert-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="font-weight: bold">Шаг №15 (Последний шаг)</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" disabled
                                                   value="{{ \App\Helpers\Common::generateLink($dataTypeContent, 15) }}">
                                            <button type="button" class="btn btn-danger" onclick="copylink(this)">
                                                Скопировать ссылку
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            @endif

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit"
                                        class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>

                    <div style="display:none">
                        <input type="hidden" id="upload_url" value="{{ route('voyager.upload') }}">
                        <input type="hidden" id="upload_type_slug" value="{{ $dataType->slug }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;
                    </button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}
                    </h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'
                    </h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger"
                            id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
            return function () {
                $file = $(this).siblings(tag);

                params = {
                    slug: '{{ $dataType->slug }}',
                    filename: $file.data('file-name'),
                    id: $file.data('id'),
                    field: $file.parent().data('field-name'),
                    multi: isMulti,
                    _token: '{{ csrf_token() }}'
                }

                $('.confirm_delete_name').text(params.filename);
                $('#confirm_delete_modal').modal('show');
            };
        }

        function copylink(that) {
            var copyText = $(that).prev();
            navigator.clipboard.writeText(copyText.val());
            toastr.success('Ссылка успешно скопирована!')
        }

        function applicationReject(that) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('voyager.application.reject', $dataTypeContent) }}',
                type: "POST",
                data: {
                    hash: '{{ $dataTypeContent->id_hash}}'
                },
                success: function (response) {
                    if (response.status === 'success') {
                        window.location.reload()
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function (data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }

        function applicationAccept(that) {

            var assessed = $('#assessed').val()
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('voyager.application.accept', $dataTypeContent) }}',
                type: "POST",
                data: {
                    step: 14,
                    hash: '{{ $dataTypeContent->id_hash}}',
                    assessed: assessed
                },
                success: function (response) {
                    if (response.status === 'success') {
                        window.location.reload()
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function (data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: ['YYYY-MM-DD']
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
            $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function (i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function () {
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if (response
                        && response.data
                        && response.data.status
                        && response.data.status == 200) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function () {
                            $(this).remove();
                        })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@stop
