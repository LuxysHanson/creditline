// preloader
document.body.onload = function() {
  setTimeout(() => {
    $(".preloader").css("display", "none")
  }, 500)
}

//modal functions
function showModal(eq) {
  $('.modal_bloor').css('z-index', '101');
  $('.modal_bloor').css('opacity', '1');
  $('.modal').eq(eq - 1).css('z-index', '102');
  $('.modal').eq(eq - 1).css('opacity', '1');
  $('body').css('overflow-y', 'hidden');
  if($('.modal').eq(eq - 1).length === 0) {
    console.log('%c создайте модалку! указанная модалка не существует!', 'color: #000; background: yellow;')
    setTimeout(()=>{
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
function showTable() {
  $('body').css('overflow-y', 'hidden');
  $('.table').css('display', 'block');
  renderCalc()
}
function closeTable() {
  $('body').css('overflow-y', 'auto');
  $('.table').css('display', 'none');
}
//mobile menu
$(document).ready(()=>{
});
//lazy scroll
function lazyScroll(id, eqs) {
  let heightHeader;
  if($(window).width() > 576) {
    heightHeader = 150;
  }
  else {
    heightHeader = 130;
  }
  $('html,body').stop().animate({
    scrollTop: $(id).eq(eqs).offset().top - heightHeader
  }, 100, 'swing', function(e) {
    // this.stopWheel()
  });
  if($('.mobileMenu').hasClass('active')) {
    $('.mobileMenu').toggleClass('active');
    $('.mobileMenu__bloor').toggleClass('active');
  }
}
//jquery
$(document).ready(()=>{
})

//wow.js init
new WOW().init();

// fancybox
// baguetteBox.run('.aboutPage .listRow');

//accordians function
for (let i = 0; i < $('.block7 .items .item').length; i++) {
  $('.block7 .items .item').eq(i).click(()=>{
    if($('.block7 .items .item').eq(i).hasClass('active')) {
      $('.block7 .items .item').eq(i).toggleClass('active');
      $('.block7 .items .item').eq(i).children('.item_head').children('.right').html('+');
    }
    else {
      for (let j = 0; j < $('.block7 .items .item').length; j++) {
        if($('.block7 .items .item').eq(j).hasClass('active')) {
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
  $('.question').eq(i).children('.info').click(()=>{
    if($('.question').eq(i).children('.absolute').css('display') === 'none') {
      $('.question').eq(i).children('.absolute').css('display', 'block');
    }
    else {
      $('.question').eq(i).children('.absolute').css('display', 'none');
    }
  });
  $('.question').eq(i).children('.absolute').click(()=>{
    if($('.question').eq(i).children('.absolute').css('display') === 'none') {
      $('.question').eq(i).children('.absolute').css('display', 'block');
    }
    else {
      $('.question').eq(i).children('.absolute').css('display', 'none');
    }
  });
}
//mobile menu
$(document).ready(()=>{
  $('.header .header_menuBtn img').click(()=>{
    if($('.mobileMenu').hasClass('active')) {
      $('.mobileMenu').toggleClass('active');
      $('.mobileMenu__bloor').toggleClass('active');
    }
    $('.mobileMenu').toggleClass('active');
    $('.mobileMenu__bloor').toggleClass('active');
  });
  $('.mobileMenu_close, .mobileMenu__bloor').click(()=>{
    if($('.mobileMenu').hasClass('active')) {
      $('.mobileMenu').toggleClass('active');
      $('.mobileMenu__bloor').toggleClass('active');
    }
  });
});
//------main page calc------//
// tenge input
var oldValue = $('.allSumRange').attr('min');
// var oldValue2 = $('.initalInputRange').attr('min');
// var oldValue3 = $('.monthInputRange').attr('min');
for (let i = 0; i < $('.tengeInput').length; i++) {
  let mainInputElmValue = $('.tengeInput').eq(i).val();
  mainInputElmValue = numberWithSpaces(parseInt(mainInputElmValue));
  mainInputElmValue = mainInputElmValue + " ₸";
  $('.tengeInput').eq(i).val(mainInputElmValue);

  $('.tengeInput').eq(i).focus((e)=>{
    let inputElmValue = e.currentTarget.value;
    inputElmValue = inputElmValue.split(" ₸");
    inputElmValue = inputElmValue[0];
    inputElmValue = inputElmValue.replace(/\s/g, '');
    // console.log(inputElmValue)
    $('.tengeInput').eq(i).val(inputElmValue)
  });
  $('.tengeInput').eq(i).blur((e)=>{
    let inputElmValue = e.currentTarget.value;

    let min = $('.allSumRange').attr('min');
    min = parseInt(min);
    let max = $('.allSumRange').attr('max');
    max = parseInt(max);
    if(i !== 1) {
      if(e.currentTarget.value === '') {
        inputElmValue = min;
        $('.allSumRange').val(min)
      }
      else if(min <= inputElmValue && inputElmValue <= max) {
        oldValue = inputElmValue;
      }
      else {
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
  mainInputElmValue = mainInputElmValue + ' месяцев';
  $('.monthInput').eq(i).val(mainInputElmValue);

  $('.monthInput').eq(i).focus((e)=>{
    let inputElmValue = e.currentTarget.value;
    inputElmValue = inputElmValue.split(" месяцев");
    inputElmValue = inputElmValue[0];
    $('.monthInput').eq(i).val(inputElmValue)
    renderCalc()
  });
  $('.monthInput').eq(i).blur((e)=>{
    let inputElmValue = e.currentTarget.value;
    if(inputElmValue === '') {
      inputElmValue = 1;
    }
    inputElmValue = inputElmValue + " месяцев";
    $('.monthInput').eq(i).val(inputElmValue);
    renderCalc()
  });
}
let monthInput = $('.monthInput');
monthInput.keyup((e)=>{
  let inputElmValue = e.currentTarget.value;
  inputElmValue = parseInt(inputElmValue);
  let min = $('.monthRange').attr('min');
  min = parseInt(min);
  let max = $('.monthRange').attr('max');
  max = parseInt(max);
  if(inputElmValue >= max) {
    $('.monthRange').val(max);
    monthInput.val(max);
    oldValue3 = inputElmValue;
  }
  else if(e.currentTarget.value === '') {
    $('.monthRange').val(1);
  }
  else if(min <= inputElmValue) {
    $('.monthRange').val(inputElmValue);
    oldValue3 = inputElmValue;
  }
  else {
    $('.monthRange').val(oldValue3);
  }
});
$('.monthRange').change((e)=>{
  let inputElmValue = e.currentTarget.value;
  inputElmValue = inputElmValue + " месяцев";
  $('.monthInput').val(inputElmValue);
  renderCalc()
});

// allSumRange
$('.allSumRange').change((e)=>{
  let inputElmValue = e.currentTarget.value;
  inputElmValue = numberWithSpaces(parseInt(inputElmValue));
  inputElmValue = inputElmValue + " ₸";
  $('.allSum').val(inputElmValue);
  renderCalc()
});
//radio click
$('.mainPage .select_row label').click(()=>{
  renderCalc()
})
function renderCalc() {
  let allSumValue = parseInt($('.allSum').val().replace(/\s/g, ''));
  let monthValue = parseInt($('.monthInput').val().replace(/\s/g, ''));
  let percent;
  let cache = cacheJS.get('anketa');
  if($('.percentRow').length != 0) {
    percent = $('.percentRow').text();
    percent = percent.split(' %');
    percent = percent[0].split(',');
    percent = percent[0]+'.'+percent[1]
    percent = parseFloat(percent);
  }
  else {
    percent = 3.72;
  }
  cache.sumLoan = parseInt(allSumValue);
  cache.monthLoan = parseInt(monthValue);
  $('.allSumRow').text(numberWithSpaces(allSumValue) + " ₸");
  let calc;
  if($("input[name='repaymentType']:checked").val() === '1') {
    calc = calc_percent_with_drive(allSumValue, percent);
    if($('table').length !== 0) {
      $('table tbody').html('');
      let dolg = calc * monthValue;
      let dolg2 = calc * monthValue;
      for (let k = 0; k <= monthValue; k++) {
        if(Date.today().addMonths(k+1).getMonth() + 1 < 10) {
          $('table tbody').append('<tr><td>'+(k+1)+'</td><td>'+Date.today().getDate()+'.0'+(Date.today().addMonths(k+1).getMonth() + 1)+'.'+Date.today().addMonths(k+1).getFullYear()+'</td><td>'+numberWithSpaces(parseInt(calc))+' ₸'+'</td><td>'+(percent / monthValue)+' %</td><td>'+(numberWithSpaces(dolg) + " ₸")+'</td><td>'+(numberWithSpaces(dolg2) + " ₸")+'</td></tr>')
        }
        else {
          $('table tbody').append('<tr><td>'+(k+1)+'</td><td>'+Date.today().getDate()+'.'+(Date.today().addMonths(k+1).getMonth() + 1)+'.'+Date.today().addMonths(k+1).getFullYear()+'</td><td>'+numberWithSpaces(parseInt(calc))+' ₸'+'</td><td>'+(percent / monthValue)+' % </td><td>'+(numberWithSpaces(dolg) + " ₸")+'</td><td>'+(numberWithSpaces(dolg2) + " ₸")+'</td></tr>')
        }
        dolg2 -= calc;
      }
    }
    cache.monthlyPay = parseInt(calc);
    cache.typeLoan = 1;
    calc = numberWithSpaces(parseInt(calc));
    calc = calc + " ₸";
  }
  else {
    calc = calc_ann_with_drive(allSumValue, monthValue, percent);
    if($('table').length !== 0) {
      $('table tbody').html('');
      let dolg = calc * monthValue;
      let dolg2 = calc * monthValue;
      for (let k = 0; k <= monthValue; k++) {
        if(Date.today().addMonths(k+1).getMonth() + 1 < 10) {
          $('table tbody').append('<tr><td>'+(k+1)+'</td><td>'+Date.today().getDate()+'.0'+(Date.today().addMonths(k+1).getMonth() + 1)+'.'+Date.today().addMonths(k+1).getFullYear()+'</td><td>'+numberWithSpaces(parseInt(calc))+' ₸'+'</td><td>'+(percent / monthValue)+' %</td><td>'+(numberWithSpaces(dolg) + " ₸")+'</td><td>'+(numberWithSpaces(dolg2) + " ₸")+'</td></tr>')
        }
        else {
          $('table tbody').append('<tr><td>'+(k+1)+'</td><td>'+Date.today().getDate()+'.'+(Date.today().addMonths(k+1).getMonth() + 1)+'.'+Date.today().addMonths(k+1).getFullYear()+'</td><td>'+numberWithSpaces(parseInt(calc))+' ₸'+'</td><td>'+(percent / monthValue)+' % </td><td>'+(numberWithSpaces(dolg) + " ₸")+'</td><td>'+(numberWithSpaces(dolg2) + " ₸")+'</td></tr>')
        }
        dolg2 -= calc;
      }
    }
    cache.monthlyPay = parseInt(calc);
    cache.typeLoan = 2;
    calc = numberWithSpaces(parseInt(calc));
    calc = calc + " ₸";
  }
  $('.calcSumRow').text(calc)
  cacheJS.set('anketa', cache, 432000, 'context');

}
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
function calc_ann_with_drive(a,b,c) {
  c /=100;
  let t = a * c / ( 1 - Math.pow( ( 1 + c ), -b ) ) ;
  // return (t);
  return (Math.round(t));
}
function percent_ann_with_drive(pay_sum, od_sum, rate) {
  return od_sum * rate / 100;
}

//расчет процентного платежа
function calc_percent_with_drive(sum,percent) {
  let t = sum/100*percent ;
  return (Math.round(t));
}
// create tamplate
var anketaData = {
  applicationId: 0,
  applicationHash: '',
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
if(cacheJS.get('anketa') == null) {
  cacheJS.set('anketa', anketaData, 432000, 'context');
}
else {
  cacheJS.set('anketa', anketaData, 432000, 'context');
}

//render cache
function renderCache() {
  let cache = cacheJS.get('anketa');
  if(valid5()) {
    $('.block6').addClass('active');
  }
  else if(valid4()) {
    $('.block5').addClass('active');
  }
  else if(valid3()) {
    $('.block4').addClass('active');
  }
  else if(cache.validate) {
    $('.block3').addClass('active');
  }
  else if(!cache.validate) {
    $('.block1').addClass('active');
  }

  //past data
  if(cache.phoneNumberString !== '') {
    $('.a_phoneNumber').val(cache.phoneNumberString);
  }
  if(cache.iin !== 0) {
    $('.a_iin').val(cache.iin);
  }
  if(cache.sumLoan !== 0) {
    $('.allSum').val(cache.sumLoan);
    $('.allSumRange').val(cache.sumLoan);
  }
  if(cache.monthLoan !== 0) {
    $('.monthInput').val(cache.monthLoan);
    $('.monthRange').val(cache.monthLoan);
  }
  if(cache.typeLoan !== 0) {
    $('.select_row input').removeAttr('checked');
    for (let k = 0; k < $('.select_row input').length; k++) {
      if($('.select_row input').eq(k).val() == cache.typeLoan) {
        $('.select_row input').eq(k).val(cache.typeLoan).attr('checked', true);
      }
    }
  }
  if(cache.monthlyPay !== 0) {
    $('.monthlyPay .monthlyPay_sum').text(numberWithSpaces(cache.monthlyPay) + ' ₸');
  }
  if(cache.monthlyIncome !== 0) {
    $('.monthlyIncome').val(numberWithSpaces(cache.monthlyIncome) + ' ₸');
  }
  if(cache.phoneNumber2 !== '') {
    $('.a_phoneNumber2').val(cache.phoneNumber2);
  }
  if(cache.email !== '') {
    $('.anketEmail').val(cache.email);
  }
  if(cache.iban !== '') {
    $('.a_iban').val(cache.iban);
  }
  if(cache.mark !== '') {
    $('.a_marka').next().text(cache.mark);
  }
  if(cache.model !== '') {
    $('.a_model').next().text(cache.model);
  }
  if(cache.madeDate !== 0) {
    $('.a_yearCar').val(cache.madeDate);
  }
  if(cache.color !== '') {
    $('.a_colorCar').val(cache.color);
  }
  if(cache.carNumber !== '') {
    $('.a_numberCar').val(cache.carNumber);
  }
  if(cache.vin !== '') {
    $('.a_vin').val(cache.vin);
  }
  if(cache.techPassword !== '') {
    $('.a_techPassword').val(cache.techPassword);
  }
  if(cache.techPasswordDate !== '') {
    $('.a_techPasswordDate').val(cache.techPasswordDate);
  }
  if(cache.patronymic !== '') {
    $('.a_patronymic').val(cache.patronymic);
  }
  if(cache.name !== '') {
    $('.a_name').val(cache.name);
  }
  if(cache.surname !== '') {
    $('.a_surname').val(cache.surname);
  }
  if(cache.bornDate !== '') {
    $('.a_bornDate').val(cache.bornDate);
  }
  if(cache.fStatus !== '') {
    $('.a_fStatus').next().text(cache.fStatus);
  }
  if(cache.typeDoc !== '') {
    $('.a_typeDoc').next().text(cache.typeDoc);
  }
  if(cache.numberDoc !== '') {
    $('.a_numberDoc').val(cache.numberDoc);
  }
  if(cache.dateDoc !== '') {
    $('.a_dateDoc').val(cache.dateDoc);
  }
  if(cache.dateDoc2 !== '') {
    $('.a_dateDoc2').val(cache.dateDoc2);
  }
  if(cache.issuedByDoc !== '') {
    $('.a_issuedByDoc').next().text(cache.issuedByDoc);
  }
  if(cache.citizenshipDoc !== '') {
    $('.a_citizenshipDoc').next().text(cache.citizenshipDoc);
  }
  if(cache.locality !== '') {
    $('.a_locality').val(cache.locality);
  }
  if(cache.street !== '') {
    $('.a_street').val(cache.street);
  }
  if(cache.numberHome !== '') {
    $('.a_numberHome').val(cache.numberHome);
  }
  if(cache.numberKv !== '') {
    $('.a_numberKv').val(cache.numberKv);
  }
  if(cache.locality2 !== '') {
    $('.a_locality2').val(cache.locality2);
  }
  if(cache.street2 !== '') {
    $('.a_street2').val(cache.street2);
  }
  if(cache.numberHome2 !== '') {
    $('.a_numberHome2').val(cache.numberHome2);
  }
  if(cache.numberKv2 !== '') {
    $('.a_numberKv2').val(cache.numberKv2);
  }
  if(cache.equalAddress) {
    $('#equalAddress').attr('checked', true);
  }
  console.log(cache)
}
$(document).ready(()=>{
  if($('.getPage').length !== 0) {
    renderCache()
  }
  if($('.getPage .block3').length !== 0) {
    renderCalc()
  }
  if ($('.getPage .block6').length !== 0) {
    valid6()
  }
  if ($('.getPage .block7').length !== 0) {
    valid7()
  }
})

// timer 120s
let timer;
function timerAgain(type = '') {
  let num = 120;
  $('.btn_again'+ type +' .btn1').text('Запросить код через 120 сек.')
  clearInterval(timer);
  timer = setInterval(()=>{
    num--;
    $('.btn_again'+ type +' .btn1').text('Запросить код через '+ num +' сек.')
  }, 1000);
  setTimeout(()=>{
    clearInterval(timer);
    $('.btn_again'+ type +' .btn1').toggleClass('active');
    $('.btn_again'+ type +' .btn2').toggleClass('active');
  }, 120000)
}
$('.block2 .btn_again .btn2').click(()=>{
    $('.block2 .btn_again .btn1').toggleClass('active');
    $('.block2 .btn_again .btn2').toggleClass('active');
    $('.block2 .btn_again .btn1').text('Запросить код через 120 сек.')

    let data = cacheJS.get('anketa');
    data.applicationId = $('.block2 .btn_again').data('id');
    data.phoneNumberString = $(".block2 .phoneNumberString").text();
    cacheJS.set('anketa', data, 432000, 'context');
    sendGetCode(2)
});

// перелючение на след шаг со 1 к 2 ому
$(document).ready(() =>{
  let cache = cacheJS.get('anketa')
  if(cache.phoneNumber) {
    $('.block1 .input_input').toggleClass('active');
    $('.getCode').toggleClass('active');
  }
})
// перелючение на след шаг со 2 к 3 ему
$(document).ready(()=>{
    if ($('.getPage .block1').length) {
        if ($(".a_phoneNumber").val() !== '') {
            $('.block1 .getCode').addClass('active')
        } else {
            $('.block1 .getCode').removeClass('active')
        }
    }
    if ($('.getPage .block2').length) {
        let data = cacheJS.get('anketa');
        data.applicationId = $('.block2 .btn_again').data('id');
        data.phoneNumberString = $('.block2 .btn_again').data('phone');
        cacheJS.set('anketa', data, 432000, 'context');
        sendGetCode(2, false);
        timerAgain()
    }
    if ($('.getPage .block3').length) {
        valid3()
    }
    if ($('.getPage .block4').length) {
        valid4()
    }
    if ($('.getPage .block5').length) {
        valid5()
    }
    if ($('.getPage .block6').length) {
        valid6()
    }
    if ($('.getPage .block7').length) {
        valid7()
    }
    if ($('.getPage .block9').length) {
        let data = cacheJS.get('anketa');
        data.applicationId = $('.block9 .btn_again2').data('id');
        data.phoneNumberString = $('.block9 .btn_again2').data('phone');
        cacheJS.set('anketa', data, 432000, 'context');
        sendGetCode(9, false);
        timerAgain(2)
    }
    if ($('.getPage .block10').length) {
        valid10()
    }
    if ($('.getPage .block12').length) {
        valid12()
    }
    if ($('.getPage .block14').length) {
        let data = cacheJS.get('anketa');
        data.applicationId = $('.block14 .btn_again3').data('id');
        data.phoneNumberString = $('.block14 .btn_again3').data('phone');
        cacheJS.set('anketa', data, 432000, 'context');
        sendGetCode(14, false);
        timerAgain(3)
    }
  $('.block2 .goNumber').click(()=>{
    // $('.block2').toggleClass('active');
    // $('.block1').toggleClass('active');
    $('.getCode').toggleClass('active');
  })
})
// перелючение на след шаг со 3 к 4 ему
function valid3() {
  if($('.block3 .a_phoneNumber2').val() !== ''
      && $('.block3 .a_iin').val() !== 0
      && $('.block3 .monthlyIncome').val() !== 0
      && $('.block3 .anketEmail').val() !== ''
      && $('.block3 .a_iban').val() !== ''
      && $('.block3 .tengeInput').val() !== 0
      && $('.block3 .monthInput').val() !== 0
      && $('.block3 .selectPayment input:checked').val() !== 0) {
    $('.block3 .infoBTN').addClass('active');
    return true;
  }
  else {
    $('.block3 .infoBTN').removeClass('active');
    return false;
  }
}
// перелючение на след шаг со 4 к 5 ому
function valid4() {
  if($('.block4 .a_marka option:selected').val() !== ''
      && $('.block4 .a_model option:selected').val() !== ''
      && $('.block4 .a_yearCar').val() !== 0
      && $('.block4 .a_colorCar').val() !== ''
      && $('.block4 .a_numberCar').val() !== ''
      && $('.block4 .a_vin').val() !== ''
      && $('.block4 .a_techPassword').val() !== ''
      && $('.block4 .a_techPasswordDate').val() !== '') {
    $('.block4 .nextScreen').addClass('active');
    return true;
  }
  else {
    $('.block4 .nextScreen').removeClass('active');
    return false;
  }
}
//inputs click
$(document).ready(()=>{
  $('.monthlyIncome').on('keyup', (e)=>{
    let inputElmValue = e.currentTarget.value;
    inputElmValue = inputElmValue.split(" ₸");
    inputElmValue = inputElmValue[0];
    let cache = cacheJS.get('anketa');
    cache.monthlyIncome = parseInt(inputElmValue);
    cacheJS.set('anketa', cache, 432000, 'context');
    inputElmValue = inputElmValue.replace(/\s/g, '');
    $('.monthlyIncome').val(inputElmValue)
    valid3()
  })
  $('.anketEmail').on('keyup', (e)=>{
    let cache = cacheJS.get('anketa');
    cache.email = e.currentTarget.value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid3()
  })
  $('.anketEmail').on('change', (e)=>{
    let cache = cacheJS.get('anketa');
    cache.email = e.currentTarget.value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid3()
  })
  $('.a_marka').next().on('click', (e)=>{
    let cache = cacheJS.get('anketa');
    cache.mark = $(e.currentTarget).text();
    cacheJS.set('anketa', cache, 432000, 'context');
    valid4()
  })
  $('.a_model').next().on('click', (e)=>{
    let cache = cacheJS.get('anketa');
    cache.model = $(e.currentTarget).text();
    cacheJS.set('anketa', cache, 432000, 'context');
    valid4()
  })
  $('.a_yearCar').on('input', (e)=>{
    let value = e.currentTarget.value;
    if(value.length > 4) {
      let str = value.substring(0, value.length - 1);
      e.currentTarget.value = str;
    }
    if(value.length === 4) {
      let date = new Date();
      date = date.getFullYear();
      if(value >= 2010 && value <= date) {
        let cache = cacheJS.get('anketa');
        cache.madeDate = parseInt(value);
        cacheJS.set('anketa', cache, 432000, 'context');
        valid4()
      }
      else {
        e.currentTarget.value = 2010;
        value = 2010;
        let cache = cacheJS.get('anketa');
        cache.madeDate = parseInt(value);
        cacheJS.set('anketa', cache, 432000, 'context');
        valid4()
      }
    }
  })
  $('.a_colorCar').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.color = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid4()
  })
  $('.a_numberCar').on('input', (e)=>{
    let value = e.currentTarget.value;
    if(value.length > 8) {
      let str = value.substring(0, value.length - 1);
      e.currentTarget.value = str;
    }
    if(value.length > 7) {
      let cache = cacheJS.get('anketa');
      cache.carNumber = value;
      cacheJS.set('anketa', cache, 432000, 'context');
      valid4()
    }
  })
  $('.a_vin').on('input', (e)=>{
    let value = e.currentTarget.value;
    if(value.length > 8) {
      let str = value.substring(0, value.length - 1);
      e.currentTarget.value = str;
    }
    if(value.length > 7) {
      let cache = cacheJS.get('anketa');
      cache.vin = value;
      cacheJS.set('anketa', cache, 432000, 'context');
      valid4()
    }
  })
  $('.a_techPassword').on('input', (e)=>{
    let value = e.currentTarget.value;
    if(value.length > 15) {
      let str = value.substring(0, value.length - 1);
      e.currentTarget.value = str;
    }
    let cache = cacheJS.get('anketa');
    cache.techPassword = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid4()
  })
  $('.a_techPasswordDate').on('input', (e)=>{
    let value = e.currentTarget.value;
    if(value.length > 15) {
      let str = value.substring(0, value.length - 1);
      e.currentTarget.value = str;
    }
    let cache = cacheJS.get('anketa');
    cache.techPasswordDate = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid4()
  })
  for (let k = 0; k < $('.block5 .select input').length; k++) {
    $('.block5 .select input').eq(k).change(()=>{
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
  if($('.block5 .select input:checked').val() === '1') {
    if($('#frontScreen').attr('value') !== '' && $('#backScreen').attr('value') !== '' && $('#selfieScreen').attr('value') !== '') {
      $('.block5 .personalData').addClass('active');
      return true;
    }
    else {
      $('.block5 .personalData').removeClass('active');
      return false;
    }
  }
  else {
    if($('#passwordScreen').attr('value') !== '' && $('#withPasswordScreen').attr('value') !== '') {
      $('.block5 .personalData').addClass('active');
      return true;
    }
    else {
      $('.block5 .personalData').removeClass('active');
      return false;
    }
  }
}
// перелючение на след шаг со 6 к 7 ому
function valid6() {
  if($(".a_patronymic").val() !== ''
      && $(".a_name").val() !== ''
      && $(".a_surname").val() !== ''
      && $(".a_bornDate").val() !== ''
      && $(".a_fStatus option:selected").val() !== ''
      && $(".a_typeDoc option:selected").val() !== ''
      && $(".a_numberDoc").val() !== ''
      && $(".a_dateDoc").val() !== ''
      && $(".a_dateDoc2").val() !== ''
      && $(".a_issuedByDoc option:selected").val() !== ''
      && $(".a_citizenshipDoc option:selected").val() !== '') {
    $('.block6 .nextAddress').addClass('active');
    return true;
  }
  else {
    $('.block6 .nextAddress').removeClass('active');
    return false;
  }
}
$(document).ready(()=>{
  $('.a_patronymic').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.patronymic = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_name').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.name = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_surname').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.surname = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_bornDate').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.bornDate = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_fStatus').next().on('click', (e)=>{
    let value = $(e.currentTarget).text();
    let cache = cacheJS.get('anketa');
    cache.fStatus = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_typeDoc').next().on('click', (e)=>{
    let value = $(e.currentTarget).text();
    let cache = cacheJS.get('anketa');
    cache.typeDoc = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_numberDoc').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.numberDoc = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_dateDoc').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.dateDoc = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_dateDoc').on('change', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.dateDoc = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_dateDoc2').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.dateDoc2 = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_dateDoc2').on('change', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.dateDoc2 = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_issuedByDoc').next().on('click', (e)=>{
    let value = $(e.currentTarget).text();
    let cache = cacheJS.get('anketa');
    cache.issuedByDoc = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.a_citizenshipDoc').next().on('click', (e)=>{
    let value = $(e.currentTarget).text();
    let cache = cacheJS.get('anketa');
    cache.citizenshipDoc = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid6()
  })
  $('.block6 .goPhotoDocuments').click(()=>{
    $('.block6').toggleClass('active');
    $('.block5').toggleClass('active');
  })
})
function valid7() {
  console.log($('#equalAddress')[0].checked)
  if($('#equalAddress')[0].checked) {
    if($(".a_locality").val() !== '' && $(".a_street").val() !== '' && $(".a_numberHome").val() !== '') {
      $('.block7 .nextApplication').addClass('active');
      return true;
    }
    else {
      $('.block7 .nextApplication').removeClass('active');
      return false;
    }
  }
  else {
    if($(".a_locality").val() !== ''
        && $(".a_street").val() !== ''
        && $(".a_numberHome").val() !== ''
        && $(".a_locality2").val() !== ''
        && $(".a_street2").val() !== ''
        && $(".a_numberHome2").val() !== '') {
      $('.block7 .nextApplication').addClass('active');
      return true;
    }
    else {
      $('.block7 .nextApplication').removeClass('active');
      return false;
    }
  }
}
// перелючение на след шаг со 7 к 8 ому
$(document).ready(()=>{
  $('#equalAddress').on('click', (e)=>{
    if($(e.currentTarget)[0].checked) {
      $('.block7 .box').toggleClass('active');
      valid7()
    }
    else {
      $('.block7 .box').toggleClass('active');
      valid7()
    }
  });
  $('.a_locality').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.locality = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.a_locality2').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.locality2 = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.a_street').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.street = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.a_street2').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.street2 = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.a_numberHome').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.numberHome = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.a_numberHome2').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.numberHome2 = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.a_numberKv').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.numberKv = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.a_numberKv2').on('input', (e)=>{
    let value = e.currentTarget.value;
    let cache = cacheJS.get('anketa');
    cache.numberKv2 = value;
    cacheJS.set('anketa', cache, 432000, 'context');
    valid7()
  })
  $('.block7 .goBackPersonalInfo').click(()=>{
    $('.block7').toggleClass('active');
    $('.block6').toggleClass('active');
    valid6()
  })
});
$('.block9 .btn_again2 .btn2').click(()=>{
  $('.block9 .btn_again2 .btn1').toggleClass('active');
  $('.block9 .btn_again2 .btn2').toggleClass('active');
  $('.block9 .btn_again2 .btn1').text('Запросить код через 120 сек.')
  // timerAgain2()

    let data = cacheJS.get('anketa');
    data.applicationId = $('.block9 .btn_again2').data('id');
    data.phoneNumberString = $('.block9 .btn_again2').data('phone');
    cacheJS.set('anketa', data, 432000, 'context');
    sendGetCode(9)
});
$('.block9 .goMainApplication').click(()=>{
  $('.block9').toggleClass('active');
  $('.block8').toggleClass('active');
})
function valid10() {
  if($('#frontScreenAuto').attr('value') !== '' && $('#backScreenAuto').attr('value') !== '') {
    $('.block10 .goPhotoAuto').addClass('active');
    return true;
  }
  else {
    $('.block10 .goPhotoAuto').removeClass('active');
    return false;
  }
}
function valid12() {
  if($('#auto1').attr('value') !== '' && $('#auto2').attr('value') !== '' && $('#auto3').attr('value') !== '' && $('#auto4').attr('value') !== '' && $('#auto5').attr('value') !== '' && $('#auto6').attr('value') !== '') {
    $('.block12 .goPushAll').addClass('active');
    return true;
  }
  else {
    $('.block12 .goPushAll').removeClass('active');
    return false;
  }
}
$('.block14 .btn_again3 .btn2').click(()=>{
  $('.block14 .btn_again3 .btn1').toggleClass('active');
  $('.block14 .btn_again3 .btn2').toggleClass('active');
  $('.block14 .btn_again3 .btn1').text('Запросить код через 120 сек.')
    let data = cacheJS.get('anketa');
    data.applicationId = $('.block14 .btn_again3').data('id');
    data.phoneNumberString = $('.block14 .btn_again3').data('phone');
    cacheJS.set('anketa', data, 432000, 'context');
    sendGetCode(14)
});
//radio click repayment type
$('.getPage .select_row label').click(()=>{
  renderCalc()
})
//select functions
// −
var x, i, j, selElmnt, a, b, c;
x = document.getElementsByClassName("tt-select");

for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
      var y, i, k, s, h;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      h = this.parentNode.previousSibling;
      for (i = 0; i < s.length; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
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
  a.addEventListener("click", function(e) {
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}
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
  if($('.screenModal').eq(eq - 1).length === 0) {
    console.log('%c создайте модалку! указанная модалка не существует!', 'color: #000; background: yellow;')
    setTimeout(()=>{
      alert('создайте модалку! указанная модалка не существует!');
      closeModal();
    }, 500);
  }
  else  {
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
