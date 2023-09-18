// API METHODS

function setAttr(prmName,val, href = ''){
    var res = '';
    var _href = (href !== ' ') ? window.location.href : href;
    var d = _href.split("#")[0].split("?");
    var base = d[0];
    var query = d[1];
    if(query) {
        var params = query.split("&");
        for(var i = 0; i < params.length; i++) {
            var keyval = params[i].split("=");
            if(keyval[0] != prmName) {
                res += params[i] + '&';
            }
        }
    }
    res += prmName + '=' + val;
    return base + '?' + res;
}

// post phone number get code status
async function sendGetCode(step, reload = true, firstStep = false) {
    let cache = cacheJS.get('anketa');
    console.log(cache)
    let phoneNumberCorrect = cache.phoneNumberString;
    phoneNumberCorrect = phoneNumberCorrect.split(' ');
    phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
    phoneNumberCorrect = phoneNumberCorrect.split('(');
    phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
    phoneNumberCorrect = phoneNumberCorrect.split(')');
    phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
    phoneNumberCorrect = phoneNumberCorrect.split('-');
    phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/ajax/application/send-sms',
        type: 'POST',
        data: {
            step: step,
            phone: phoneNumberCorrect,
            application_id: cache.applicationId
        },
        success: function (a) {

            if (firstStep) {
                window.location.href = '/form?hash=' + cache.applicationHash
            } else {
                if (reload) window.location.href = setAttr('stepTo', '')
            }

        },
        error: function (error) {
            toastr.error(app.errorMsg)
        }
    })
}

// post valid code
async function sendValidCode(type, step, id) {
    let validCode = $('.a_validCode'+ type).val();
    validCode = validCode.split('-');
    validCode = validCode[0] + validCode[1];
    let ajax = $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/ajax/application/check-code',
        type: 'POST',
        data: {
            code: parseInt(validCode),
            application_id: id,
            step: step
        },
        success: function (a) {
        },
        error: function (error) {
            toastr.warning('Истек время действия смс-кода!')
            console.log(error)
        }
    })
    return ajax;
}

$(function () {

    // Language switch
    $(".lang_link").on('click', function (e) {
        e.preventDefault();
        window.location.href = $(this).data('href');
    })

    // Block gps
    $(".allSumRange").on('change', function (e) {
        e.preventDefault();
        let gpsBlock = $(".block3 .question");
        if (parseInt($(this).val()) >= 2000000) {
            gpsBlock.show()
        } else {
            gpsBlock.hide()
        }
    })

    $(".goBackBtn").on('click', function (e) {
        e.preventDefault();
        window.location.href = $(this).data('href');
    })

    // File Storage
    $(".uploadPhotoBtn").on('click', function (e) {
        e.preventDefault();
        var formName = $(this).attr('for');
        const result = confirm('Разрешаете использование фотоаппарат и геоданные?');
        if (result) {
            var form = $("."+ formName + "Form");
            var screenModal = $(this).parents('.screenModal');
            $("#"+ formName).click();
            $("#"+ formName).on('change', function (e) {
                e.preventDefault();
                let formData = new FormData(form[0]);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    beforeSubmit: function () {
                        screenModal.find('.global-preloader').show();
                    },
                    error: function () {
                        screenModal.find('.global-preloader').hide();
                        toastr.error(app.errorMsg)
                    },
                    complete: function (xhr) {
                        screenModal.find('.global-preloader').hide();
                        if (xhr.status === 200) {
                            screenModal.find('.bannerPhoto img').attr('src', xhr.responseJSON.url)
                            $("#"+ formName).attr('value', xhr.responseJSON.url);
                            valid5()
                            valid10()
                            valid12()
                            closeScreenModal()
                        } else {
                            toastr.error(app.errorMsg)
                        }
                    }
                })
            })
        } else {
            toastr.warning('Нужно разрешение для продолжения!')
        }
    })

    // перелючение на след шаг со 1 к 2 ому
    $('.block1 .getCode').on('click', function (e) {
        e.preventDefault();
        var href = $(this).data('href');
        var phoneNumber = $(".block1 .a_phoneNumber").val();
        if ($(this).hasClass('active')) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/create",
                type: "POST",
                data: {phone: phoneNumber},
                success: function(response){
                    if (response.status === 'success') {
                        if (response.application.step === 1) {
                            let data = cacheJS.get('anketa');
                            data.applicationId = response.application.id;
                            data.phoneNumberString = phoneNumber;
                            data.applicationHash = response.application.id_hash;
                            cacheJS.set('anketa', data, 432000, 'context');
                            sendGetCode(2, true, true);
                        } else {
                            window.location.href = '/form?hash=' + response.application.id_hash;
                        }
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    // перелючение на след шаг со 2 к 3 ему
    $('.block2 .nextAnket').on('click', function (e) {
        e.preventDefault();
        let cache = cacheJS.get('anketa');
        if ($(this).hasClass('active')) {
            sendValidCode(1, 3, $(this).data('id')).then((e) => {
                console.log(e)
                if (e) {
                    cache.validate = true;
                    cacheJS.set('anketa', cache, 432000, 'context');
                } else {
                    cache.validate = false;
                    cacheJS.set('anketa', cache, 432000, 'context');
                }
                if (cacheJS.get('anketa').validate) {
                    window.location.href = setAttr('stepTo', '')
                }
            });
        }
    })

    // перелючение на след шаг со 3 к 4 ему
    $('.block3 .infoBTN').on('click', function (e) {
        e.preventDefault();
        var that = $(this);
        if(valid3()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/form-data",
                type: "POST",
                data: {
                    application_id: that.data('id'),
                    key: that.data('key'),
                    step: that.data('step'),
                    data: {
                        iin: $('.block3 .a_iin').val(),
                        summa: $('.block3 .tengeInput').val(),
                        deadline: $('.block3 .monthInput').val(),
                        repayment_type: $('.block3 .selectPayment input:checked').val(),
                        payment: $('.block3 .monthlyIncome').val(),
                        additional_phone: $('.block3 .a_phoneNumber2').val(),
                        email: $('.block3 .anketEmail').val(),
                        iban: $('.block3 .a_iban').val(),
                        monthly_pay: $('.block3 .monthlyPay_sum').html()
                    }
                },
                success: function(response){
                    if (response.status === 'success') {
                        //write data for next list
                        let cache = cacheJS.get('anketa');
                        cache.mark = $('.a_marka').next().text();
                        cache.model = $('.a_model').next().text();
                        cacheJS.set('anketa', cache, 432000, 'context');
                        window.location.href = setAttr('stepTo', '')
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    // перелючение на след шаг со 4 к 5 ому
    $('.block4 .nextScreen').on('click', function (e) {
        e.preventDefault();
        var that = $(this);
        if(valid4()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/form-data",
                type: "POST",
                data: {
                    application_id: that.data('id'),
                    key: that.data('key'),
                    step: that.data('step'),
                    data: {
                        brand: $('.block4 .a_marka option:selected').val(),
                        model: $('.block4 .a_model option:selected').val(),
                        year: $('.block4 .a_yearCar').val(),
                        color: $('.block4 .a_colorCar').val(),
                        number: $('.block4 .a_numberCar').val(),
                        vin: $('.block4 .a_vin').val(),
                        tech_password: $('.block4 .a_techPassword').val(),
                        tech_date: $('.block4 .a_techPasswordDate').val(),
                    }
                },
                success: function(response){
                    if (response.status === 'success') {
                        window.location.href = setAttr('stepTo', '')
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    // перелючение на след шаг со 5 к 6 ому
    $('.block5 .personalData').click(function (e) {
        e.preventDefault();
        let that = $(this);
        if(valid5()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/form-data",
                type: "POST",
                data: {
                    application_id: that.data('id'),
                    key: that.data('key'),
                    step: that.data('step'),
                    data: {
                        doc_type: $(".selectType input:checked").val(),
                        front_side: $('#frontScreen').attr('value'),
                        back_side: $('#backScreen').attr('value'),
                        selfie: $('#selfieScreen').attr('value'),
                        passport: $('#passwordScreen').attr('value'),
                        with_passport: $('#withPasswordScreen').attr('value'),
                    }
                },
                success: function(response){
                    if (response.status === 'success') {
                        //write data for next list
                        let cache = cacheJS.get('anketa');
                        cache.fStatus = $('.a_fStatus').next().text();
                        cache.typeDoc = $('.a_typeDoc').next().text();
                        cache.issuedByDoc = $('.a_issuedByDoc').next().text();
                        cache.citizenshipDoc = $('.a_citizenshipDoc').next().text();
                        cacheJS.set('anketa', cache, 432000, 'context');
                        window.location.href = setAttr('stepTo', '')
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    // перелючение на след шаг со 6 к 7 ому
    $('.block6 .nextAddress').on('click', function (e) {
        e.preventDefault();
        let that = $(this);
        if(valid6()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/form-data",
                type: "POST",
                data: {
                    application_id: that.data('id'),
                    key: that.data('key'),
                    step: that.data('step'),
                    data: {
                        patronymic: $(".a_patronymic").val(),
                        name: $(".a_name").val(),
                        surname: $(".a_surname").val(),
                        birth_date: $(".a_bornDate").val(),
                        family_status: $(".a_fStatus option:selected").val(),
                        doc_type: $(".a_typeDoc option:selected").val(),
                        number_doc: $(".a_numberDoc").val(),
                        date_doc: $(".a_dateDoc").val(),
                        date_doc2: $(".a_dateDoc2").val(),
                        issued_by_doc: $(".a_issuedByDoc option:selected").val(),
                        citizienship: $(".a_citizenshipDoc option:selected").val(),
                    }
                },
                success: function(response){
                    if (response.status === 'success') {
                        window.location.href = setAttr('stepTo', '')
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    // перелючение на след шаг со 7 к 8 ому
    $('.block7 .nextApplication').on('click', function (e) {
        e.preventDefault();
        let that = $(this);
        if(valid7()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/form-data",
                type: "POST",
                data: {
                    application_id: that.data('id'),
                    key: that.data('key'),
                    step: that.data('step'),
                    data: {
                        locality: $(".a_locality").val(),
                        street: $(".a_street").val(),
                        number_home: $(".a_numberHome").val(),
                        apartment: $(".a_numberKv").val(),
                        equal_address: !!$('#equalAddress')[0].checked,
                        locality2: $(".a_locality2").val(),
                        street2: $(".a_street2").val(),
                        number_home2: $(".a_numberHome2").val(),
                        apartment2: $(".a_numberKv2").val(),
                    }
                },
                success: function(response){
                    if (response.status === 'success') {
                        window.location.href = setAttr('stepTo', '')
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    // перелючение на след шаг со 8 к 9 ому
    $('.block8 .nextApplicationCode').on('click', function (e){
        e.preventDefault();
        let data = cacheJS.get('anketa');
        data.applicationId = $(this).data('id');
        data.phoneNumberString = $(this).data('phone');
        cacheJS.set('anketa', data, 432000, 'context');
        sendGetCode(9);
    })

    // перелючение на след шаг со 9 к 10 ому
    $('.block9 .goTechPhotoAuto').on('click', function (e) {
        e.preventDefault();
        let cache = cacheJS.get('anketa');
        sendValidCode(2, 10, $(this).data('id')).then((e)=>{
            console.log(e)
            if(e) {
                cache.validate2 = true;
                cacheJS.set('anketa', cache, 432000, 'context');
            }
            else {
                cache.validate2 = false;
                cacheJS.set('anketa', cache, 432000, 'context');
            }
            if(cacheJS.get('anketa').validate2) {
                window.location.href = setAttr('stepTo', '')
            }
        });
    })

    // перелючение на след шаг со 10 к 11 ому
    $('.block10 .goPhotoAuto').on('click', function (e) {
        e.preventDefault();
        var that = $(this);
        if(valid10()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/form-data",
                type: "POST",
                data: {
                    application_id: that.data('id'),
                    key: that.data('key'),
                    step: that.data('step'),
                    data: {
                        front_side: $('#frontScreenAuto').attr('value'),
                        back_side: $('#backScreenAuto').attr('value'),
                    }
                },
                success: function(response){
                    if (response.status === 'success') {
                        window.location.href = setAttr('stepTo', '')
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    // перелючение на след шаг со 11 к 12 ому
    $('.block11 .goLoadPhotoAuto').on('click', function (e) {
        e.preventDefault();
        let that = $(this);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/ajax/application/form-data",
            type: "POST",
            data: {
                step: that.data('step'),
                application_id: that.data('id')
            },
            success: function(response){
                if (response.status === 'success') {
                    window.location.href = setAttr('stepTo', '')
                } else {
                    toastr.error(app.errorMsg)
                }
            },
            error: function(data) {
                console.log(data)
                toastr.error(app.errorMsg)
            }
        });
    })

    // перелючение на след шаг со 12 к 13 ому
    $('.block12 .goPushAll').on('click', function (e) {
        e.preventDefault();
        let that = $(this);
        if(valid12()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/ajax/application/form-data",
                type: "POST",
                data: {
                    key: that.data('key'),
                    step: that.data('step'),
                    application_id: that.data('id'),
                    data: {
                        auto1: $('#auto1').attr('value'),
                        auto2: $('#auto2').attr('value'),
                        auto3: $('#auto3').attr('value'),
                        auto4: $('#auto4').attr('value'),
                        auto5: $('#auto5').attr('value'),
                        auto6: $('#auto6').attr('value'),
                    }
                },
                success: function(response){
                    if (response.status === 'success') {
                        window.location.href = setAttr('stepTo', '')
                    } else {
                        toastr.error(app.errorMsg)
                    }
                },
                error: function(data) {
                    console.log(data)
                    toastr.error(app.errorMsg)
                }
            });
        }
    })

    //  перелючение на след шаг со 14 к 15 ому
    $('.block14 .goFinal').on('click', function (e) {
        e.preventDefault();
        let cache = cacheJS.get('anketa');
        if($('.block14 .goFinal').hasClass('active')) {
            sendValidCode(3, 15, $(this).data('id')).then((e)=>{
                console.log(e)
                if(e) {
                    cache.validate3 = true;
                    cacheJS.set('anketa', cache, 432000, 'context');
                }
                else {
                    cache.validate3 = false;
                    cacheJS.set('anketa', cache, 432000, 'context');
                }
                if(cacheJS.get('anketa').validate3) {
                    window.location.href = setAttr('stepTo', '')
                }
            });
        }
    })

})
