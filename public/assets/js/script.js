// preloader
$(document).ready(() => {
    $(".table").css("display", "none")
    setTimeout(() => {
        $(".preloader").css("display", "none")
    }, 1000)
});

//modal functions
function showModal(eq) {
    $('.modal_bloor').css('z-index', '101');
    $('.modal_bloor').css('opacity', '1');
    $('.modal').eq(eq - 1).css('z-index', '102');
    $('.modal').eq(eq - 1).css('opacity', '1');
    $('body').css('overflow-y', 'hidden');
    if ($('.modal').eq(eq - 1).length === 0) {
        console.log('%c создайте модалку! указанная модалка не существует!', 'color: #000; background: yellow;')
        setTimeout(() => {
            alert('создайте модалку! указанная модалка не существует!');
            closeModal();
        }, 500);
    }
}

function closeModal() {
    $('.modal_bloor').css('z-index', '-51');
    $('.modal_bloor').css('opacity', '0');
    for (let i = 0; i < $('.modal').length; i++) {
        $('.modal').eq(i).css('z-index', '-50');
        $('.modal').eq(i).css('opacity', '0');
    }
    $('body').css('overflow-y', 'auto');
}

function showTable(elem) {
    renderCalc();
    var elem_select = $("input[name='repaymentType']:checked").val();
    if (elem_select == 1 && elem == 1) {
        $('.table-repaymentType1').css('display', 'block');
        $('body').css('overflow-y', 'hidden');
    } else if (elem_select == 2 && elem == 2) {
        $('.table-repaymentType2').css('display', 'block');
        $('body').css('overflow-y', 'hidden');
    } else if (elem_select == 1 && elem == 2) {
        $("input#repaymentType1").prop('checked', false);
        $("input#repaymentType2").prop('checked', true);
        $('.monthInput').parent().find('label').html('Срок микрокредита');
        // allSumMethod();
    } else if ((elem_select == 2 && elem == 1)) {
        $("input#repaymentType2").prop('checked', false);
        $("input#repaymentType1").prop('checked', true);
        $('.monthInput').parent().find('label').html('Срок микрокредите 1 месяц <span>с возможностью продления срока до</span>');
    }
}

function closeTable(elem) {
    $('body').css('overflow-y', 'auto');
    if (elem == 1) {
        $('.table-repaymentType1').css('display', 'none');
    } else if (elem == 2) {
        $('.table-repaymentType2').css('display', 'none');
    }
}

if ($(".a_locality").length !== 0) {
    fetch('/assets/csv/locality.csv')
        .then(response => response.text())
        .then(data => {
            const lines = data.split('\n');
            const locations = [];

            for (const line of lines) {
                const [id, parentId, code, name] = line.split(';');
                locations.push({id, parentId, code, name});
            }

            const searchInput = document.getElementById('search-input');
            const resultsList = document.getElementById('results-list');

            function filterResults(query) {
                const filteredLocations = locations.filter(location => {
                    const name = location.name || '';
                    return name.toLowerCase().includes(query.toLowerCase());
                });
                return filteredLocations.slice(0, 10);
            }

            function displayResults(results) {
                resultsList.innerHTML = '';
                results.forEach(result => {
                    const listItem = document.createElement('div');
                    listItem.textContent = result.name;
                    listItem.addEventListener('click', () => {
                        searchInput.value = result.name;
                        resultsList.style.display = 'none';
                    });
                    resultsList.appendChild(listItem);
                });
                resultsList.style.display = 'block';
            }

            searchInput.addEventListener('input', () => {
                const query = searchInput.value;
                const filteredResults = filterResults(query);
                displayResults(filteredResults);
            });

            renderSelectInput();
        })
        .catch(error => console.error(error));
}

if ($(".block6").length !== 0) {
    setTimeout(() => {
        $(document).ready(() => {
            $('.a_patronymic').on('input', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.patronymic = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_name').on('input', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.name = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_surname').on('input', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.surname = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_bornDate').on('input', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.bornDate = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_fStatus').next().on('click', (e) => {
                let value = $(e.currentTarget).text();
                let cache = cacheJS.get('anketa');
                cache.fStatus = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_typeDoc').next().on('click', (e) => {
                let value = $(e.currentTarget).text();
                let cache = cacheJS.get('anketa');
                cache.typeDoc = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_numberDoc').on('input', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                if(value.length==9){
                    cache.numberDoc = value;
                }
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_dateDoc').on('input', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.dateDoc = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_dateDoc').on('change', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.dateDoc = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_dateDoc2').on('input', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.dateDoc2 = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_dateDoc2').on('change', (e) => {
                let value = e.currentTarget.value;
                let cache = cacheJS.get('anketa');
                cache.dateDoc2 = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_issuedByDoc').next().on('click', (e) => {
                let value = $(e.currentTarget).text();
                let cache = cacheJS.get('anketa');
                cache.issuedByDoc = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.a_citizenshipDoc').next().on('click', (e) => {
                let value = $(e.currentTarget).text();
                let cache = cacheJS.get('anketa');
                cache.citizenshipDoc = value;
                cacheJS.set('anketa', cache, 31104, 'context');
                valid6()
            })
            $('.block6 .goPhotoDocuments').click(() => {
                $('.block6').toggleClass('active');
                $('.block5').toggleClass('active');
            })
            $('.block6 .nextAddress').click(() => {
                let cache = cacheJS.get('anketa');
                if (valid6()) {
                    $('.block6').toggleClass('active');
                    $('.block7').toggleClass('active');
                    valid7()
                }
            })
        })
        renderSelectInput();
    }, 1000);

}


if ($(".mark-select").length !== 0) {
    // делаем здесь что-то
    setTimeout(() => {
        renderSelectInput();
    }, 1000)
    /*
        fetch('/assets/csv/marka-auto.csv')
            .then(response => response.text())
            .then(data => {
                const lines = data.split('\n');
                const brandSelect = document.getElementById('brandSelect');
                const modelSelect = document.getElementById('modelSelect');

                $("#brandSelect option").remove();

                function fillBrandSelect() {
                    const brands = new Set();
                    const models = new Set();

                    for (const line of lines) {
                        const [brand, model, yearStart, yearEnd] = line.split(';');
                        brands.add(brand);
                        models.add(model);
                        brandsAndModel.push([brand, model]);
                    }

                    var i = 0;

                    brands.forEach((brand) => {
                        const option = document.createElement('option');
                        option.value = i;
                        i++;
                        option.textContent = brand;
                        brandSelect.appendChild(option);
                    });

                    i = 0;
                    models.forEach((model) => {
                        const option = document.createElement('option');
                        option.value = i;
                        i++;
                        option.textContent = model;
                        option.className = "model-hidden"
                        modelSelect.appendChild(option);
                    });
                }

                fillBrandSelect();
                setTimeout(() => {
                    renderSelectInput();
                }, 100)
            })
            .catch(error => console.error(error));*/
}
var brandsAndModel = [];

function inputModelAdd(brandsAndModel, markSelect) {

    var modelActive = [];

    brandsAndModel.forEach((el) => {
        if (el[0] == markSelect) {
            modelActive.push(el[1]);
        }
    });

    $('.model-select').find('.select-items div').each(function (el) {
        $(this).removeClass("visible");
        var textElem = $(this).text();
        if (jQuery.inArray(textElem, modelActive) !== -1) {
            $(this).addClass("visible");
        }
    });

    var firstModelSelect = $('.model-select').find('.select-items div.visible:first').text();
    $('.model-select .select-selected').text(firstModelSelect);
}

//mobile menu
$(document).ready(() => {
});

//lazy scroll
function lazyScroll(id, eqs) {
    let heightHeader;
    if ($(window).width() > 576) {
        heightHeader = 150;
        $('html, body').stop().animate({
            scrollTop: $(id).eq(eqs).offset().top - heightHeader
        }, 100, 'swing', function (e) {
            // this.stopWheel()
        });
    } else {
        heightHeader = 130;
        $('html, body').animate({
            scrollTop: $(id).eq(eqs).offset().top - heightHeader
        }, 100, 'swing', function (e) {
            // this.stopWheel()
        });
    }
    if ($('.mobileMenu').hasClass('active')) {
        $('.mobileMenu').toggleClass('active');
        $('.mobileMenu__bloor').toggleClass('active');
    }
}

//jquery
$(window).scroll(function () {
    // console.log('ff')
});

//wow.js init
new WOW().init();

function setDateInput(el) {
    var inputValue = $(el).val();

    var valueDate = new Date(inputValue);

    var minDate = "2010-01-01";
    var minDateVal = new Date(minDate);
    var nowDate = new Date();

    if (minDateVal.getTime() < valueDate.getTime() && valueDate.getTime() < nowDate.getTime()) {

    } else {
        $('.a_techPasswordDate').val(minDate);
    }
}

// fancybox
// baguetteBox.run('.aboutPage .listRow');

//accordians function
for (let i = 0; i < $('.block7 .items .item').length; i++) {
    $('.block7 .items .item').eq(i).click(() => {
        if ($('.block7 .items .item').eq(i).hasClass('active')) {
            $('.block7 .items .item').eq(i).toggleClass('active');
            $('.block7 .items .item').eq(i).children('.item_head').children('.right').html('+');
        } else {
            for (let j = 0; j < $('.block7 .items .item').length; j++) {
                if ($('.block7 .items .item').eq(j).hasClass('active')) {
                    $('.block7 .items .item').eq(j).toggleClass('active');
                    $('.block7 .items .item').eq(j).children('.item_head').children('.right').html('+');
                }
            }
            $('.block7 .items .item').eq(i).toggleClass('active');
            $('.block7 .items .item').eq(i).children('.item_head').children('.right').html('−');
        }
    });
}
//question info
for (let i = 0; i < $('.question').length; i++) {
    $('.question').eq(i).children('.info').click(() => {
        if ($('.question').eq(i).children('.absolute').css('display') === 'none') {
            $('.question').eq(i).children('.absolute').css('display', 'block');
        } else {
            $('.question').eq(i).children('.absolute').css('display', 'none');
        }
    });
    $('.question').eq(i).children('.absolute').click(() => {
        if ($('.question').eq(i).children('.absolute').css('display') === 'none') {
            $('.question').eq(i).children('.absolute').css('display', 'block');
        } else {
            $('.question').eq(i).children('.absolute').css('display', 'none');
        }
    });
}
//mobile menu
$(document).ready(() => {
    $('.header .header_menuBtn img').click(() => {
        if ($('.mobileMenu').hasClass('active')) {
            $('.mobileMenu').toggleClass('active');
            $('.mobileMenu__bloor').toggleClass('active');
        }
        $('.mobileMenu').toggleClass('active');
        $('.mobileMenu__bloor').toggleClass('active');
    });
    $('.mobileMenu_close, .mobileMenu__bloor').click(() => {
        if ($('.mobileMenu').hasClass('active')) {
            $('.mobileMenu').toggleClass('active');
            $('.mobileMenu__bloor').toggleClass('active');
        }
    });
});
//------main page calc------//
// tenge input
var oldValue = 1000000;
// var oldValue2 = $('.initalInputRange').attr('min');
// var oldValue3 = $('.monthInputRange').attr('min');
for (let i = 0; i < $('.tengeInput').length; i++) {
    let mainInputElmValue = $('.tengeInput').eq(i).val();
    mainInputElmValue = numberWithSpaces(parseInt(mainInputElmValue));
    mainInputElmValue = mainInputElmValue + " ₸";
    $('.tengeInput').eq(i).val(mainInputElmValue);

    $('.tengeInput').eq(i).focus((e) => {
        let inputElmValue = e.currentTarget.value;
        inputElmValue = inputElmValue.split(" ₸");
        inputElmValue = inputElmValue[0];
        inputElmValue = inputElmValue.replace(/\s/g, '');
        // console.log(inputElmValue)
        $('.tengeInput').eq(i).val(inputElmValue)
    });
    $('.allSum').eq(i).keyup((e) => {
        $('.allSumRange').val(e.currentTarget.value)
    });
    $('.tengeInput').eq(i).blur((e) => {
        let inputElmValue = e.currentTarget.value;
        inputElmValue = inputElmValue.replace(/\s/g, '');

        let min = $('.allSumRange').attr('min');
        min = parseInt(min);
        let max = $('.allSumRange').attr('max');
        max = parseInt(max);
        if (i !== 1) {
            if (e.currentTarget.value === '') {
                inputElmValue = min;
                $('.allSumRange').val(min)
            } else if (min <= inputElmValue && inputElmValue <= max) {
                oldValue = inputElmValue;
            } else {
                inputElmValue = oldValue;
            }
        }

        inputElmValue = numberWithSpaces(parseInt(inputElmValue));
        inputElmValue = inputElmValue + " ₸";
        // console.log(inputElmValue)
        $('.tengeInput').eq(i).val(inputElmValue);
        renderCalc()
    });
}
// .monthInputRange input & range
for (let i = 0; i < $('.monthInput').length; i++) {
    let mainInputElmValue = $('.monthInput').eq(i).val();
    if (mainInputElmValue.split(' ').length < 2) {
        mainInputElmValue = mainInputElmValue + ' месяцев';
        $('.monthInput').eq(i).val(mainInputElmValue);
    }

    $('.monthInput').eq(i).focus((e) => {
        let inputElmValue = e.currentTarget.value;
        inputElmValue = inputElmValue.split(" месяцев");
        inputElmValue = inputElmValue[0];
        $('.monthInput').eq(i).val(inputElmValue)
        renderCalc()
    });
    $('.monthInput').eq(i).blur((e) => {
        let inputElmValue = e.currentTarget.value;
        if (inputElmValue === '') {
            inputElmValue = 1;
        }
        inputElmValue = inputElmValue + " месяцев";
        $('.monthInput').eq(i).val(inputElmValue);
        renderCalc()
    });
}
let monthInput = $('.monthInput');
monthInput.keyup((e) => {
    let inputElmValue = e.currentTarget.value;
    inputElmValue = parseInt(inputElmValue);
    let min = $('.monthRange').attr('min');
    min = parseInt(min);
    let max = $('.monthRange').attr('max');
    max = parseInt(max);
    if (inputElmValue >= max) {
        $('.monthRange').val(max);
        monthInput.val(max);
        oldValue3 = inputElmValue;
    } else if (e.currentTarget.value === '') {
        $('.monthRange').val(1);
    } else if (min <= inputElmValue) {
        $('.monthRange').val(inputElmValue);
        oldValue3 = inputElmValue;
    } else {
        $('.monthRange').val(oldValue3);
    }
});
$('.monthRange').change((e) => {
    let inputElmValue = e.currentTarget.value;
    inputElmValue = inputElmValue + " месяцев";
    $('.monthInput').val(inputElmValue);
    renderCalc()
});
$('.monthRange').mousemove((e) => {
    let inputElmValue = e.currentTarget.value;
    inputElmValue = inputElmValue + " месяцев";
    $('.monthInput').val(inputElmValue);
    renderCalc()
});
$('.monthRange').on('touchmove', (e) => {
    let inputElmValue = e.currentTarget.value;
    inputElmValue = inputElmValue + " месяцев";
    $('.monthInput').val(inputElmValue);
    renderCalc()
});

// allSumRange
$('.allSumRange').change((e) => {
    let inputElmValue = e.currentTarget.value;
    inputElmValue = numberWithSpaces(parseInt(inputElmValue));
    inputElmValue = inputElmValue + " ₸";
    $('.allSum').val(inputElmValue);
    renderCalc()
});
$('.allSumRange').mousemove((e) => {
    let inputElmValue = e.currentTarget.value;
    inputElmValue = numberWithSpaces(parseInt(inputElmValue));
    inputElmValue = inputElmValue + " ₸";
    $('.allSum').val(inputElmValue);
    renderCalc()
});
$('.allSumRange').on('touchmove', (e) => {
    let inputElmValue = e.currentTarget.value;
    inputElmValue = numberWithSpaces(parseInt(inputElmValue));
    inputElmValue = inputElmValue + " ₸";
    $('.allSum').val(inputElmValue);
    renderCalc()
});
//radio click
$('.mainPage .select_row input, .mainPage .select_row label').click(() => {
    renderCalc()
})

/*
function allSumMethod() {
    $('.allSum.tengeInput').val(1000000 + " ₸");
    $('.allSumRange').val(1000000);
    $('.monthInput').val("12 месяцев");
    $('.monthRange').val(10);
}

$("input#repaymentType2").change(function () {
  //  allSumMethod();
});
*/
function renderCalc() {
    let allSumValue = parseInt($('.allSum').val().replace(/\s/g, ''));
    let monthValue = parseInt($('.monthInput').val().replace(/\s/g, ''));

    if (allSumValue < 2000000) {
        $('.question#gps').css('display', 'none');
    } else {
        $('.question#gps').css('display', 'flex');
    }

    // console.log(allSumValue);
    let percent;
    let cache = cacheJS.get('anketa');
    if ($('.percentRow').length != 0) {
        percent = $('.percentRow').text();
        percent = percent.split(' %');
        percent = percent[0].split(',');
        percent = percent[0] + '.' + percent[1]
        percent = parseFloat(percent);
    } else {
        percent = 3.72;
    }
    cache.sumLoan = parseInt(allSumValue);
    cache.monthLoan = parseInt(monthValue);
    $('.allSumRow').text(numberWithSpaces(allSumValue) + " ₸");
    let calc;
    if ($("input[name='repaymentType']:checked").val() === '1') {
        $(".label-mount").html("Срок микрокредита 1 месяц <span>с возможностью продления срока до</span>");
        calc = calc_percent_with_drive(allSumValue, percent);
        if ($('table').length !== 0) {
            $('table tbody').html('');
            let dolg = calc * monthValue;
            let dolg2 = calc * monthValue;
            new Date();
            var now = new Date();
            let next30days = new Date(now.setDate(now.getDate() + 30));
            for (let k = 0; k <= monthValue; k++) {
                if (k == 0) {
                    $('table tbody').append('<tr><td>' + (k + 1) + '</td><td>' + next30days.toLocaleFormat('%d.%m.%y') + '</td><td>' + numberWithSpaces(parseInt(calc)) + ' ₸' + '</td><td>' + numberWithSpaces(parseInt(calc)) + ' ₸</td><td>0 ₸</td><td>' + (numberWithSpaces(allSumValue) + " ₸") + '</td></tr>')
                } else if (k < monthValue) {
                    let next30days = new Date(now.setDate(now.getDate() + 30));
                    $('table tbody').append('<tr><td>' + (k + 1) + '</td><td>' + next30days.toLocaleFormat('%d.%m.%y') + '</td><td>' + numberWithSpaces(parseInt(calc)) + ' ₸' + '</td><td>' + numberWithSpaces(parseInt(calc)) + ' ₸</td><td>0 ₸</td><td>' + (numberWithSpaces(allSumValue) + " ₸") + '</td></tr>')
                } else if (k == monthValue) {
                    let next30days = new Date(now.setDate(now.getDate() + 30));
                    $('table tbody').append('<tr><td>' + (k + 1) + '</td><td>' + next30days.toLocaleFormat('%d.%m.%y') + '</td><td>' + numberWithSpaces(allSumValue + parseInt(calc)) + ' ₸' + '</td><td>' + numberWithSpaces(parseInt(calc)) + ' ₸</td><td>' + (numberWithSpaces(allSumValue) + " ₸") + '</td><td>' + (numberWithSpaces(dolg2) + " ₸") + '</td></tr>')
                }
                dolg2 -= calc;
            }
        }
        cache.monthlyPay = parseInt(calc);
        cache.typeLoan = 1;
        calc = numberWithSpaces(parseInt(calc));
        calc = calc + " ₸";
        $(".calc-pay").text(calc);
        $(".calc-allpay").text(numberWithSpaces(allSumValue) + " ₸");
    } else {
        $(".label-mount").html("Срок микрокредита");
        calc = calc_ann_with_drive(allSumValue, monthValue, percent);
        if ($('table').length !== 0) {
            $('table tbody').html('');
            let dolg = calc * monthValue;
            let dolg2 = calc * monthValue;
            var sum_ann = calc_ann_with_drive(allSumValue, monthValue, percent);
            var sum_persent = calc_percent_with_drive(allSumValue, percent);
            let k = monthValue;
            for (let i = 1; i < k; i++) { // выведет 0, затем 1, затем 2

                if (i == 1) {
                    var percent_sum = percent_ann_with_drive(calc, allSumValue, percent);
                    var part_od = calc - percent_sum;
                    var OD = allSumValue - part_od;
                    var lastOD = part_od;
                    new Date();
                    var now = new Date();
                    let next30days = new Date(now.setDate(now.getDate() + 30));
                    //console.log(allSumValue, percent_sum)

                    var percent_sum_str = String(Math.round(percent_sum));
                    var percent_sum_string = percent_sum_str.replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ");

                    $('table tbody').html($('table tbody').html() + '<tr>\n<td>' + i + '.</td>\n' +
                        '<td>' + next30days.toLocaleFormat('%d.%m.%y') + '</td>\n' +
                        '<td class="text-center">' + String(Math.round(sum_ann)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                        '<td>' + percent_sum_string + ' ₸</td>\n' +
                        '<td>' + String(Math.round(part_od)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                        '<td>' + String(Math.round(allSumValue - lastOD)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n</tr>\n');
                } else {
                    var percent_sum = percent_ann_with_drive(calc, OD, percent);
                    var part_od = calc - percent_sum;
                    var OD = OD - part_od;
                    var lastOD = lastOD + part_od;
                    // console.log(OD)
                    new Date();
                    var now = new Date();
                    let next30days = new Date(now.setDate(now.getDate() + 30 * i));

                    var percent_sum_str = String(Math.round(percent_sum));
                    var percent_sum_string = percent_sum_str.replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ");
                    $('table tbody').html($('table tbody').html() + '<tr>\n<td>' + i + '.</td>\n' +
                        '<td>' + next30days.toLocaleFormat('%d.%m.%y') + '</td>\n' +
                        '<td class="text-center">' + String(Math.round(sum_ann)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                        '<td>' + percent_sum_string + ' ₸</td>\n' +
                        '<td>' + String(Math.round(part_od)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                        '<td>' + String(Math.round(allSumValue - lastOD)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n</tr>\n');

                }

            }

            if (monthValue == 1) {
                var percent_sum = percent_ann_with_drive(calc, allSumValue, 3.72);
                var part_od = calc - percent_sum;
                var OD = allSumValue - part_od;
                var lastOD = part_od;
                new Date();
                var now = new Date();
                let next30days = new Date(now.setDate(now.getDate() + 30));
                $('table tbody').html($('table tbody').html() + '<tr>\n<td>' + 1 + '.</td>\n' +
                    '<td>' + next30days.toLocaleFormat('%d.%m.%y') + '</td>\n' +
                    '<td class="text-center">' + String(Math.round(sum_ann)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                    '<td>' + String(Math.round(percent_sum)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                    '<td>' + String(Math.round(part_od)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                    '<td>' + String(Math.round(allSumValue - lastOD)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n</tr>\n');

            } else {
                var part_od = calc - percent_sum;

                var percent_sum = percent_ann_with_drive(OD, OD, 3.72);

                var OD = OD - part_od;

                new Date();
                var now = new Date();
                let next30days = new Date(now.setDate(now.getDate() + 30 * (Number(monthValue))));
                $('table tbody').html($('table tbody').html() + '<tr>\n<td>' + k + '.</td>\n' +
                    '<td>' + next30days.toLocaleFormat('%d.%m.%y') + '</td>\n' +
                    '<td class="text-center">' + String(Math.round(sum_ann)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                    '<td>' + String(Math.round(percent_sum)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                    '<td>' + String(Math.round(allSumValue - lastOD)).replace(/(\d{1,3})(?=((\d{3})*([^\d]|$)))/g, " $1 ") + ' ₸</td>\n' +
                    '<td>0 ₸</td>\n</tr>\n');

            }
        }
        cache.monthlyPay = parseInt(calc);
        cache.typeLoan = 2;
        calc = numberWithSpaces(parseInt(calc));
        calc = calc + " ₸";
        $(".calc-pay").text(calc);
    }
    $('.calcSumRow').text(calc)
    cacheJS.set('anketa', cache, 31104, 'context');

}

Date.prototype.toLocaleFormat = function (format) {
    var f = {
        y: this.getYear() + 1900,
        m: this.getMonth() + 1,
        d: this.getDate(),
        H: this.getHours(),
        M: this.getMinutes(),
        S: this.getSeconds()
    }
    for (k in f)
        format = format.replace('%' + k, f[k] < 10 ? "0" + f[k] : f[k]);
    return format;
};
//------end main page calc------//
//global calc functions
function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

function AllowOnlyNumbers(e) {
    e = (e) ? e : window.event;

    var clipboardData = e.clipboardData ? e.clipboardData : window.clipboardData;
    var key = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
    var str = (e.type && e.type == "paste") ? clipboardData.getData('Text') : String.fromCharCode(key);

    return (/^\d+$/.test(str));
}

//расчет ежемесячного платежа аннуитет
function calc_ann_with_drive(a, b, c) {
    c /= 100;
    let t = a * c / (1 - Math.pow((1 + c), -b));
    return (t);
    //return (Math.round(t));
}

function percent_ann_with_drive(pay_sum, od_sum, rate) {
    return od_sum * rate / 100;
}

//расчет процентного платежа
function calc_percent_with_drive(sum, percent) {
    let t = sum / 100 * percent;
    return (Math.round(t));
}

// create tamplate
var anketaData = {
    phoneNumber: false,
    phoneNumberString: '',
    phoneNumber2: '',
    validate: false,
    iin: 0,
    sumLoan: 0,
    monthLoan: 0,
    typeLoan: 0,
    monthlyPay: 0,
    monthlyIncome: 0,
    email: '',
    iban: '',
    mark: '',
    model: '',
    madeDate: 0,
    color: '',
    carNumber: '',
    vin: '',
    techPassword: '',
    techPasswordDate: '',
    patronymic: '',
    name: '',
    surname: '',
    bornDate: '',
    fStatus: '',
    typeDoc: '',
    numberDoc: '',
    dateDoc: '',
    dateDoc2: '',
    issuedByDoc: '',
    citizenshipDoc: '',
    equalAddress: false,
    locality: '',
    street: '',
    numberHome: '',
    numberKv: '',
    locality2: '',
    street2: '',
    numberHome2: '',
    numberKv2: '',
    validate2: false,
}
if (cacheJS.get('anketa') == null) {
    cacheJS.set('anketa', anketaData, 31104, 'context');
}
// else {
//   cacheJS.set('anketa', anketaData, 31104, 'context');
// }

//render cache
/*
function renderCache() {
    let cache = cacheJS.get('anketa');

    //past data
    if (cache.phoneNumberString !== '') {
        $('.a_phoneNumber').val(cache.phoneNumberString);
    }
    if (cache.iin !== 0) {
        $('.a_iin').val(cache.iin);
    }
    if (cache.sumLoan !== 0) {
        $('.allSum').val(cache.sumLoan);
        $('.allSumRange').val(cache.sumLoan);
    }
    if (cache.monthLoan !== 0) {
        $('.monthInput').val(cache.monthLoan);
        $('.monthRange').val(cache.monthLoan);
    }
    if (cache.typeLoan !== 0) {
        $('.select_row input').removeAttr('checked');
        for (let k = 0; k < $('.select_row input').length; k++) {
            if ($('.select_row input').eq(k).val() == cache.typeLoan) {
                $('.select_row input').eq(k).val(cache.typeLoan).attr('checked', true);
            }
        }
    }
    if (cache.monthlyPay !== 0) {
        $('.monthlyPay .monthlyPay_sum').text(numberWithSpaces(cache.monthlyPay) + ' ₸');
    }
    if (cache.monthlyIncome !== 0) {
        $('.monthlyIncome').val(numberWithSpaces(cache.monthlyIncome) + ' ₸');
    }
    if (cache.phoneNumber2 !== '') {
        $('.a_phoneNumber2').val(cache.phoneNumber2);
    }
    if (cache.email !== '') {
        $('.anketEmail').val(cache.email);
    }
    if (cache.iban !== '') {
        $('.a_iban').val(cache.iban);
    }
    if (cache.mark !== '') {
        $('.a_marka').next().text(cache.mark);
    }
    if (cache.model !== '') {
        $('.a_model').next().text(cache.model);
    }
    if (cache.madeDate !== 0) {
        $('.a_yearCar').val(cache.madeDate);
    }
    if (cache.color !== '') {
        $('.a_colorCar').val(cache.color);
    }
    if (cache.carNumber !== '') {
        $('.a_numberCar').val(cache.carNumber);
    }
    if (cache.vin !== '') {
        $('.a_vin').val(cache.vin);
    }
    if (cache.techPassword !== '') {
        $('.a_techPassword').val(cache.techPassword);
    }
    if (cache.techPasswordDate !== '') {
        $('.a_techPasswordDate').val(cache.techPasswordDate);
        setDateInput($(".a_techPasswordDate"));
    }
    if (cache.patronymic !== '') {
        $('.a_patronymic').val(cache.patronymic);
    }
    if (cache.name !== '') {
        $('.a_name').val(cache.name);
    }
    if (cache.surname !== '') {
        $('.a_surname').val(cache.surname);
    }
    if (cache.bornDate !== '') {
        $('.a_bornDate').val(cache.bornDate);
    }
    if (cache.fStatus !== '') {
        $('.a_fStatus').next().text(cache.fStatus);
    }
    if (cache.typeDoc !== '') {
        $('.a_typeDoc').next().text(cache.typeDoc);
    }
    if (cache.numberDoc !== '') {
        $('.a_numberDoc').val(cache.numberDoc);
    }
    if (cache.dateDoc !== '') {
        $('.a_dateDoc').val(cache.dateDoc);
    }
    if (cache.dateDoc2 !== '') {
        $('.a_dateDoc2').val(cache.dateDoc2);
    }
    if (cache.issuedByDoc !== '') {
        $('.a_issuedByDoc').next().text(cache.issuedByDoc);
    }
    if (cache.citizenshipDoc !== '') {
        $('.a_citizenshipDoc').next().text(cache.citizenshipDoc);
    }
    if (cache.locality !== '') {
        $('.a_locality').val(cache.locality);
    }
    if (cache.street !== '') {
        $('.a_street').val(cache.street);
    }
    if (cache.numberHome !== '') {
        $('.a_numberHome').val(cache.numberHome);
    }
    if (cache.numberKv !== '') {
        $('.a_numberKv').val(cache.numberKv);
    }
    if (cache.locality2 !== '') {
        $('.a_locality2').val(cache.locality2);
    }
    if (cache.street2 !== '') {
        $('.a_street2').val(cache.street2);
    }
    if (cache.numberHome2 !== '') {
        $('.a_numberHome2').val(cache.numberHome2);
    }
    if (cache.numberKv2 !== '') {
        $('.a_numberKv2').val(cache.numberKv2);
    }
    if (cache.equalAddress) {
        $('#equalAddress').attr('checked', true);
    }
    console.log(cache)
}

$(document).ready(() => {
    if ($('.getPage').length !== 0) {
        renderCache()
    }
})
*/

function nowDateInput() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    return (today);
}

// cacheJS.set('anketa', anketaData, 31104, 'context');
// cacheJS.get('anketa')

// timer 120s
let timer;

function timerAgain() {
    let num = 120;
    $('.block2 .btn_again .btn1').text('Запросить код через 120 сек.')
    clearInterval(timer);
    timer = setInterval(() => {
        num--;
        $('.btn_again .btn1').text('Запросить код через ' + num + ' сек.')
    }, 1000);
    setTimeout(() => {
        clearInterval(timer);
        $('.btn_again .btn1').toggleClass('active');
        $('.btn_again .btn2').toggleClass('active');
    }, 120000)
}

$('.block2 .btn_again .btn2').click(() => {
    $('.block2 .btn_again .btn1').toggleClass('active');
    $('.block2 .btn_again .btn2').toggleClass('active');
    $('.block2 .btn_again .btn1').text('Запросить код через 120 сек.')
    timerAgain()
    //sendGetCode()
});
if ($('.block2 .btn_again').length !== 0) {
    timerAgain()
}
// перелючение на след шаг со 1 к 2 ому
/*
$(document).ready(() => {
    let cache = cacheJS.get('anketa')
    $('.block1 .getCode').click(() => {
        sendGetCode()
    })
})*/

// перелючение на след шаг со 2 к 3 ему
$(document).ready(() => {
    $('.block2 .nextAnket').click(() => {
        let cache = cacheJS.get('anketa');
        sendValidCode().then((e) => {
            console.log(e)
            if (e) {
                cache.validate = true;
                cacheJS.set('anketa', cache, 31104, 'context');
            } else {
                cache.validate = false;
                cacheJS.set('anketa', cache, 31104, 'context');
            }
            if (cacheJS.get('anketa').validate) {
                $('.block2').toggleClass('active');
                $('.block3').toggleClass('active');
                renderCalc()
            }
        });
    })
    $('.block2 .goNumber').click(() => {
        $('.block2').toggleClass('active');
        $('.block1').toggleClass('active');
        $('.getCode').toggleClass('active');
    })
})

// перелючение на след шаг со 3 к 4 ему
function valid3() {
    let cache = cacheJS.get('anketa');
    if (cache.phoneNumber2 !== '' && cache.iin !== 0 && cache.monthlyIncome >= 0 && cache.email !== '' && cache.iban !== '' && cache.sumLoan !== 0 && cache.monthLoan !== 0 && cache.typeLoan !== 0) {
        $('.block3 .infoBTN').addClass('active');
        return true;
    } else {
        $('.block3 .infoBTN').removeClass('active');
        return false;
    }
}

if ($('.getPage .block3').length !== 0) {
    valid3()
}
$(document).ready(() => {
    $('.block3 .goValidate').click(() => {
        $('.block3').toggleClass('active');
        $('.block2').toggleClass('active');
        $('.nextAnket').toggleClass('active');
    })
    $('.block3 .infoBTN').click(() => {
        let cache = cacheJS.get('anketa');
        if (valid3()) {
            $('.block3').toggleClass('active');
            $('.block4').toggleClass('active');
        }
        //write data for next list
        let cache2 = cacheJS.get('anketa');
        cache2.mark = $('.a_marka').next().text();
        cache2.model = $('.a_model').next().text();
        cacheJS.set('anketa', cache2, 31104, 'context');
    })
})

// перелючение на след шаг со 4 к 5 ому
function valid4() {
    let cache = cacheJS.get('anketa');
    if (cache.mark !== '' && cache.model !== '' && cache.madeDate !== 0 && cache.color !== '' && cache.carNumber !== '' && cache.vin !== '' && cache.techPassword !== '' && cache.techPasswordDate !== '') {
        $('.block4 .nextScreen').addClass('active');
        return true;
    } else {
        $('.block4 .nextScreen').removeClass('active');
        return false;
    }
}

$(document).ready(() => {
    $('.block4 .goLoan').click(() => {
        $('.block4').toggleClass('active');
        $('.block3').toggleClass('active');
    })
    $('.block4 .nextScreen').click(() => {
        let cache = cacheJS.get('anketa');
        if (valid4()) {
            $('.block4').toggleClass('active');
            $('.block5').toggleClass('active');
        }
    })
})

//inputs click
$(document).ready(() => {
    $('.monthlyIncome').on('keyup', (e) => {
        let inputElmValue = e.currentTarget.value;
        inputElmValue = inputElmValue.split(" ₸");
        inputElmValue = inputElmValue[0];
        let cache = cacheJS.get('anketa');
        inputElmValue = inputElmValue.replace(/\s/g, '');
        console.log(inputElmValue)
        if (inputElmValue < 1) {
            // $('.monthlyIncome').val(0);
            cache.monthlyIncome = parseInt(0);
        } else {
            $('.monthlyIncome').val(inputElmValue);
            cache.monthlyIncome = parseInt(inputElmValue);
        }
        cacheJS.set('anketa', cache, 31104, 'context');
        valid3()
    })
    $('.monthlyIncome').blur((e) => {
        let inputElmValue = e.currentTarget.value;
        inputElmValue = inputElmValue.replace(/\s/g, '');
        console.log(inputElmValue)
        if (e.currentTarget.value === 'NaN ₸') {
            console.log('empty')
            $('.monthlyIncome').val(0 + ' ₸');
        }
    });
    $('.anketEmail').on('keyup', (e) => {
        let cache = cacheJS.get('anketa');
        cache.email = e.currentTarget.value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid3()
    })
    $('.anketEmail').on('change', (e) => {
        let cache = cacheJS.get('anketa');
        cache.email = e.currentTarget.value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid3()
    })
    $(document).on('click', $('.a_marka').next(), function (e) {
        let cache = cacheJS.get('anketa');
        cache.mark = $(e.currentTarget).text();
        cacheJS.set('anketa', cache, 31104, 'context');
        inputModelAdd(brandsAndModel, $('.mark-select .select-selected').text());
        valid4()
    });
    $(document).on('click', $('.a_model').next(), function (e) {
        let cache = cacheJS.get('anketa');
        cache.model = $(e.currentTarget).text();
        cacheJS.set('anketa', cache, 31104, 'context');
        valid4()
    })
    $('.a_yearCar').on('input', (e) => {
        let value = e.currentTarget.value;
        if (value.length > 4) {
            let str = value.substring(0, value.length - 1);
            e.currentTarget.value = str;
        }
        if (value.length === 4) {
            let date = new Date();
            date = date.getFullYear();
            if (value >= 2010 && value <= date) {
                let cache = cacheJS.get('anketa');
                cache.madeDate = parseInt(value);
                cacheJS.set('anketa', cache, 31104, 'context');
                valid4()
            } else {
                e.currentTarget.value = 2010;
                value = 2010;
                let cache = cacheJS.get('anketa');
                cache.madeDate = parseInt(value);
                cacheJS.set('anketa', cache, 31104, 'context');
                valid4()
            }
        }
    })
    $('.a_colorCar').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.color = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid4()
    })
    $('.a_numberCar').on('input', (e) => {

        var numberCar = $(".a_numberCar").val();

        function regularValid(val) {
            var regExp = /^([0-9]{3}[A-Z]|[A-Z][0-9]{3})[A-Z]{2}[0-9]{2}$/;
            var regExp2 = /^[A-Z]{1}[0-9]{3}[A-Z]{3}$/;

            val = val.toUpperCase();
            if (regExp.test(val)) {
                return true;
            }
            if (regExp2.test(val)) {
                return true;
            }
            return false;
        }

        let value = e.currentTarget.value;

        if (regularValid(numberCar)) {
            $(".a_numberCar").css('border-color', '#B2B2B2');
            $(".a_numberCar").css('border-width', '2px');

            let cache = cacheJS.get('anketa');
            cache.carNumber = value.toUpperCase();
            cacheJS.set('anketa', cache, 31104, 'context');
            valid4()
        } else {
            $(".a_numberCar").css('border-color', '#952825');
            $(".a_numberCar").css('border-width', '2px');
        }
        if (value.length > 8) {
            let str = value.substring(0, value.length - 1);
            e.currentTarget.value = str;
        }
    })
    $('.a_vin').on('input', (e) => {

        var vinCar = $(".a_vin").val();
        const vinRegex = new RegExp(
            "^[A-Z0-9]{17}$",
            "i"
        );

        function validateVin(vinCar) {
            vinCar = vinCar.toUpperCase();
            return vinRegex.test(vinCar);
        }

        let value = e.currentTarget.value;

        if (validateVin(vinCar)) {
            $(".a_vin").css('border-color', '#B2B2B2');
            $(".a_vin").css('border-width', '2px');

            let cache = cacheJS.get('anketa');
            cache.vin = value;
            cacheJS.set('anketa', cache, 31104, 'context');
            valid4()
        } else {
            $(".a_vin").css('border-color', '#952825');
            $(".a_vin").css('border-width', '2px');
        }

        if (value.length > 17) {
            let str = value.substring(0, value.length - 1);
            e.currentTarget.value = str;
        }
    })
    $('.a_techPassword').on('input', (e) => {

        var techPassword = $(".a_techPassword").val();
        const techPasswordRegex = new RegExp(
            "^[A-Z0-9]{10}$",
            "i"
        );

        function validateTechPassword(techPassword) {
            return techPasswordRegex.test(techPassword);
        }

        let value = e.currentTarget.value;

        if (validateTechPassword(techPassword)) {
            $(".a_techPassword").css('border-color', '#B2B2B2');
            $(".a_techPassword").css('border-width', '1px');

            let cache = cacheJS.get('anketa');
            cache.techPassword = value;
            cacheJS.set('anketa', cache, 31104, 'context');
            valid4()
        } else {
            $(".a_techPassword").css('border-color', '#952825');
            $(".a_techPassword").css('border-width', '2px');
        }
        if (value.length > 10) {
            let str = value.substring(0, value.length - 1);
            e.currentTarget.value = str;
        }
    })

    var inputDate = $(".a_techPasswordDate");

    inputDate.on("blur", function () {
        setDateInput(this);
    });

    $('.a_techPasswordDate').on('input', (e) => {
        let value = e.currentTarget.value;
        if (value.length > 15) {
            let str = value.substring(0, value.length - 1);
            e.currentTarget.value = str;
        }
        let cache = cacheJS.get('anketa');
        cache.techPasswordDate = value.toUpperCase();
        cacheJS.set('anketa', cache, 31104, 'context');
        valid4()
    })
    // $('.block5 .box .filer input').on('change', (e) => {
    //     valid5()
    //     closeScreenModal()
    // })
    for (let k = 0; k < $('.block5 .select input').length; k++) {
        $('.block5 .select input').eq(k).change(() => {
            for (let l = 0; l < $('.block5 .box').length; l++) {
                $('.block5 .box').eq(l).removeClass('active')
            }
            $('.block5 .box').eq(k).addClass('active')
            valid5()
        })
    }
})

// перелючение на след шаг со 5 к 6 ому
function valid5() {
    if ($('.block5 .select input:checked').val() === '1') {
        if ($('#frontScreen').val() !== '' && $('#backScreen').val() !== '' && $('#selfieScreen').val() !== '') {
            setTimeout(function () { $('.block5 .personalData').addClass('active') }, 800);
            return true;
        } else {
            $('.block5 .personalData').removeClass('active');
            return false;
        }
    } else {
        if ($('#passwordScreen').val() !== '' && $('#withPasswordScreen').val() !== '') {
            setTimeout(function () { $('.block5 .personalData').addClass('active') }, 800);
            return true;
        } else {
            $('.block5 .personalData').removeClass('active');
            return false;
        }
    }
}

$(document).ready(() => {
    $('.block5 .goInfoCar').click(() => {
        $('.block5').toggleClass('active');
        $('.block4').toggleClass('active');
    })
    $('.block5 .personalData').click(() => {
        let cache = cacheJS.get('anketa');
        if (valid5()) {
            $('.block5').toggleClass('active');
            $('.block6').toggleClass('active');
        }
        //write data for next list
        let cache2 = cacheJS.get('anketa');
        cache2.fStatus = $('.a_fStatus').next().text();
        cache2.typeDoc = $('.a_typeDoc').next().text();
        cache2.issuedByDoc = $('.a_issuedByDoc').next().text();
        cache2.citizenshipDoc = $('.a_citizenshipDoc').next().text();
        cacheJS.set('anketa', cache2, 31104, 'context');
        valid6()
    })
})

// перелючение на след шаг со 6 к 7 ому
function valid6() {
    let cache = cacheJS.get('anketa');
    console.log(cacheJS.get('anketa'))
    if (cache.patronymic !== '' && cache.name !== '' && cache.surname !== '' && cache.bornDate !== '' && cache.fStatus !== '' && cache.typeDoc !== '' && cache.numberDoc !== '' && cache.dateDoc !== '' && cache.dateDoc2 !== '' && cache.issuedByDoc !== '' && cache.citizenshipDoc !== '') {
        $('.block6 .nextAddress').addClass('active');
        return true;
    } else {
        $('.block6 .nextAddress').removeClass('active');
        return false;
    }
}

$(document).ready(() => {
    $('.a_patronymic').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.patronymic = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_name').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.name = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_surname').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.surname = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_bornDate').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.bornDate = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_fStatus').next().on('click', (e) => {
        let value = $(e.currentTarget).text();
        let cache = cacheJS.get('anketa');
        cache.fStatus = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_typeDoc').next().on('click', (e) => {
        let value = $(e.currentTarget).text();
        let cache = cacheJS.get('anketa');
        cache.typeDoc = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_numberDoc').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        if(value.length==9){
            cache.numberDoc = value;
        }
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_dateDoc').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.dateDoc = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_dateDoc').on('change', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.dateDoc = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_dateDoc2').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.dateDoc2 = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_dateDoc2').on('change', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.dateDoc2 = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_issuedByDoc').next().on('click', (e) => {
        let value = $(e.currentTarget).text();
        let cache = cacheJS.get('anketa');
        cache.issuedByDoc = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.a_citizenshipDoc').next().on('click', (e) => {
        let value = $(e.currentTarget).text();
        let cache = cacheJS.get('anketa');
        cache.citizenshipDoc = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid6()
    })
    $('.block6 .goPhotoDocuments').click(() => {
        $('.block6').toggleClass('active');
        $('.block5').toggleClass('active');
    })
    $('.block6 .nextAddress').click(() => {
        let cache = cacheJS.get('anketa');
        if (valid6()) {
            $('.block6').toggleClass('active');
            $('.block7').toggleClass('active');
            valid7()
        }
    })
})

function valid7() {
        // navigator.geolocation.getCurrentPosition((pos) => {
        //     let cache = cacheJS.get('anketa')
        //     const crd = pos.coords;
        //     cache.longitude = crd.longitude;
        //     cache.latitude = crd.latitude;
        //     cache.accuracy = crd.accuracy;
        //     cacheJS.set('anketa', cache, 31104, 'context');
        //     console.log(cache)
        // }, (err) => {
        //     toastr.error(err.message)
        // }, {
        //     enableHighAccuracy: true,
        //     timeout: 5000,
        //     maximumAge: 0,
        // });

    let cache = cacheJS.get('anketa');
    // console.log($('#equalAddress')[0].checked)
    if ($('#equalAddress')[0].checked) {
        if (cache.locality !== '' && cache.street !== '' && cache.numberHome !== '') {
            $('.block7 .nextApplication').addClass('active');
            return true;
        } else {
            $('.block7 .nextApplication').removeClass('active');
            return false;
        }
    } else {
        if (cache.locality !== '' && cache.street !== '' && cache.numberHome !== '' && cache.locality2 !== '' && cache.street2 !== '' && cache.numberHome2 !== '') {
            $('.block7 .nextApplication').addClass('active');
            return true;
        } else {
            $('.block7 .nextApplication').removeClass('active');
            return false;
        }
    }
}

// перелючение на след шаг со 7 к 8 ому
$(document).ready(() => {
    $('#equalAddress').on('click', (e) => {
        let getCache = cacheJS.get('anketa');
        if ($(e.currentTarget)[0].checked) {
            $('.block7 .box').toggleClass('active');
            valid7()
        } else {
            $('.block7 .box').toggleClass('active');
            valid7()
        }
    });
    $('.a_locality').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.locality = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.a_locality2').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.locality2 = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.a_street').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.street = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.a_street2').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.street2 = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.a_numberHome').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.numberHome = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.a_numberHome2').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.numberHome2 = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.a_numberKv').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.numberKv = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.a_numberKv2').on('input', (e) => {
        let value = e.currentTarget.value;
        let cache = cacheJS.get('anketa');
        cache.numberKv2 = value;
        cacheJS.set('anketa', cache, 31104, 'context');
        valid7()
    })
    $('.block7 .goBackPersonalInfo').click(() => {
        $('.block7').toggleClass('active');
        $('.block6').toggleClass('active');
        valid6()
    })
    $('.block7 .nextApplication').click(() => {
        let cache = cacheJS.get('anketa');
        if (valid7()) {
            $('.block7').toggleClass('active');
            $('.block8').toggleClass('active');
            // valid8()
        }
    })
});
// перелючение на след шаг со 8 к 9 ому
$('.block8 .goAddress').click(() => {
    $('.block8').toggleClass('active');
    $('.block7').toggleClass('active');
})
/*$('.block8 .nextApplicationCode').click(() => {
sendGetCode2()
})*/

// перелючение на след шаг со 9 к 10 ому
function timerAgain2() {
    let num = 120;
    $('.block9 .btn_again2 .btn1').text('Запросить код через 120 сек.')
    clearInterval(timer);
    timer = setInterval(() => {
        num--;
        $('.btn_again2 .btn1').text('Запросить код через ' + num + ' сек.')
    }, 1000);
    setTimeout(() => {
        clearInterval(timer);
        $('.btn_again2 .btn1').toggleClass('active');
        $('.btn_again2 .btn2').toggleClass('active');
    }, 120000)
}

$('.block9 .btn_again2 .btn2').click(() => {
    $('.block9 .btn_again2 .btn1').toggleClass('active');
    $('.block9 .btn_again2 .btn2').toggleClass('active');
    $('.block9 .btn_again2 .btn1').text('Запросить код через 120 сек.')
    timerAgain2()
    //sendGetCode2()
});
$('.block9 .goMainApplication').click(() => {
    $('.block9').toggleClass('active');
    $('.block8').toggleClass('active');
})

$('.block9 .goTechPhotoAuto').click(() => {
    let cache = cacheJS.get('anketa');
    /*  sendValidCode2().then((e) => {
          console.log(e)
          if (e) {
              cache.validate2 = true;
              cacheJS.set('anketa', cache, 31104, 'context');
          } else {
              cache.validate2 = false;
              cacheJS.set('anketa', cache, 31104, 'context');
          }
          if (cacheJS.get('anketa').validate2) {
              $('.block9').toggleClass('active');
              $('.block10').toggleClass('active');
          }
      });*/
})

// $('.block10 .box .filer input').on('change', (e) => {
//     closeScreenModal()
// })
// перелючение на след шаг со 10 к 11 ому
$('.block10 .goApplicationScreenAuto').click(() => {
    $('.block10').toggleClass('active');
    $('.block9').toggleClass('active');
})
$('.block10 .goPhotoAuto').click(() => {
    if (valid10()) {
        $('.block10').toggleClass('active');
        $('.block11').toggleClass('active');
    }
})
// $('.block10 .box .filer input').on('change', (e) => {
//     valid10()
//     closeScreenModal()
// })

function valid10() {
    if ($('#frontScreenAuto').val() !== '' && $('#backScreenAuto').val() !== '') {
        setTimeout(function () { $('.block10 .goPhotoAuto').addClass('active') }, 800);
        return true;
    } else {
        $('.block10 .goPhotoAuto').removeClass('active');
        return false;
    }
}

// перелючение на след шаг со 11 к 12 ому
$('.block11 .goPhotoAutoApplication').click(() => {
    $('.block11').toggleClass('active');
    $('.block10').toggleClass('active');
})
$('.block11 .goLoadPhotoAuto').click(() => {
    $('.block11').toggleClass('active');
    $('.block12').toggleClass('active');
})
// перелючение на след шаг со 12 к 13 ому
$('.block12 .goMainLoadPhotoAuto').click(() => {
    $('.block12').toggleClass('active');
    $('.block11').toggleClass('active');
})
$('.block12 .goPushAll').click(() => {
    if (valid12()) {
        $('.block12').toggleClass('active');
        $('.block13').toggleClass('active');
        let cache = cacheJS.get('anketa');
        /* sendAllData().then((e) => {
             console.log(e)
             setTimeout(() => {
                 $('.block13').toggleClass('active');
                 $('.block14').toggleClass('active');
                 timerAgain3()
             }, 1000)
         });*/
    }
})
// $('.block12 .box .filer input').on('change', (e) => {
//     valid12()
//     closeScreenModal()
// })

function valid12() {
    if ($('#auto1').val() !== '' && $('#auto2').val() !== '' && $('#auto3').val() !== '' && $('#auto4').val() !== '' && $('#auto5').val() !== '' && $('#auto6').val() !== '') {
        setTimeout(function () { $('.block12 .goPushAll').addClass('active') }, 800)
        return true;
    } else {
        $('.block12 .goPushAll').removeClass('active');
        return false;
    }
}

//  перелючение на след шаг со 14 к 15 ому
function timerAgain3() {
    let num = 120;
    $('.block13 .btn_again3 .btn1').text('Запросить код через 120 сек.')
    clearInterval(timer);
    timer = setInterval(() => {
        num--;
        $('.btn_again3 .btn1').text('Запросить код через ' + num + ' сек.')
    }, 1000);
    setTimeout(() => {
        clearInterval(timer);
        $('.btn_again3 .btn1').toggleClass('active');
        $('.btn_again3 .btn2').toggleClass('active');
    }, 120000)
}

$('.block14 .btn_again3 .btn2').click(() => {
    $('.block14 .btn_again3 .btn1').toggleClass('active');
    $('.block14 .btn_again3 .btn2').toggleClass('active');
    $('.block14 .btn_again3 .btn1').text('Запросить код через 120 сек.')
    timerAgain3()
    //sendGetCode3()
});
$('.block14 .goFinal').click(() => {
    let cache = cacheJS.get('anketa');
    if ($('.block14 .goFinal').hasClass('active')) {
        /*  sendValidCode3().then((e) => {
              console.log(e)
              if (e) {
                  cache.validate3 = true;
                  cacheJS.set('anketa', cache, 31104, 'context');
              } else {
                  cache.validate3 = false;
                  cacheJS.set('anketa', cache, 31104, 'context');
              }
              if (cacheJS.get('anketa').validate3) {
                  $('.block14').toggleClass('active');
                  $('.block15').toggleClass('active');
              }
          });*/
    }
})
//radio click repayment type
$('.getPage .select_row input, .getPage .select_row label').click(() => {
    renderCalc()
})
//select functions
// −
let x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName("tt-select");

function renderSelectInput() {
    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        a = document.createElement("div");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        b = document.createElement("div");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("div");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                let y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML === this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function (e) {
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
}

let m;
m = document.getElementsByClassName("models");

function renderSelectInputById(id) {
    for (i = 0; i < m.length; i++) {
        console.log(m[i]);
        selElmnt = m[i].getElementsByTagName("select")[0];
        a = document.createElement("div");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        m[i].appendChild(a);
        b = document.createElement("div");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("div");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function (e) {
                let y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML === this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        m[i].appendChild(b);
        a.addEventListener("click", function (e) {
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
}

// setTimeout(() => {
// renderSelectInput();
// }, 1000);

function closeAllSelect(elmnt) {
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}

document.addEventListener("click", closeAllSelect);

//Screen Modal functions for anket
function showScreenModal(eq) {
    if ($('.screenModal').eq(eq - 1).length === 0) {
        console.log('%c создайте модалку! указанная модалка не существует!', 'color: #000; background: yellow;')
        setTimeout(() => {
            alert('создайте модалку! указанная модалка не существует!');
            closeModal();
        }, 500);
    } else {
        $('.screenModal').eq(eq - 1).addClass('active');
        $('body').css('overflow-y', 'hidden');
    }
}

function closeScreenModal() {
    for (let i = 0; i < $('.screenModal').length; i++) {
        $('.screenModal').eq(i).removeClass('active');
    }
    $('body').css('overflow-y', 'auto');
}
$('body').on('input', 'input[type="number"][maxlength]', function(){
    if (this.value.length > this.maxLength){
        this.value = this.value.slice(0, this.maxLength);
    }
    if (this.value.length < this.maxLength){
        var styles = {
            "border-color" : "rgb(149, 40, 37)",
            "border-width": " 2px"
        }
    }
    else{
        var styles = {
            "border-color" : "",
            "border-width": ""
        }
    }

    $(this).css(styles);
});
