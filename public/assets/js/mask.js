[].forEach.call(document.querySelectorAll('input[type="tel"]'), function (input) {
  let keyCode;
  function mask(event) {
    event.keyCode && (keyCode = event.keyCode);
    let pos = this.selectionStart;
    if (pos < 3) event.preventDefault();
    let matrix = "+7 (___) ___-__-__",
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, ""),
      newValue = matrix.replace(/[_\d]/g, function (a) {
        return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
      });
    i = newValue.indexOf("_");
    if (i != -1) {
      i < 5 && (i = 3);
      newValue = newValue.slice(0, i);
    }
    let reg = matrix.substr(0, this.value.length).replace(/_+/g,
      function (a) {
        return "\\d{1," + a.length + "}";
      }).replace(/[+()]/g, "\\$&");
    reg = new RegExp("^" + reg + "$");
    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
    if (event.type == "blur" && this.value.length < 5) this.value = "";
    if($('.getPage .block1').hasClass('active')) {
      if(this.value.length === 18 && $('.getCode').length !== 0) {
        let getCode = cacheJS.get('anketa');
        getCode.phoneNumber = true;
        getCode.phoneNumberString = this.value;
        cacheJS.set('anketa', getCode, 31104000, 'context');
        if(!$('.getCode').hasClass('active')) {
          $('.getCode').toggleClass('active');
          $('.block1 .input_input').toggleClass('active');
        }
      }
      else {
        let getCode = cacheJS.get('anketa');
        getCode.phoneNumber = false;
        getCode.phoneNumberString = '';
        cacheJS.set('anketa', getCode, 31104000, 'context');
        if($('.getCode').hasClass('active')) {
          $('.getCode').toggleClass('active');
          $('.block1 .input_input').removeClass('active');
        }
      }
    }
  }

  input.addEventListener("input", mask, false);
  input.addEventListener("focus", mask, false);
  input.addEventListener("blur", mask, false);
  input.addEventListener("keydown", mask, false);
});
[].forEach.call(document.querySelectorAll('input[type="tel2"]'), function (input) {
  let keyCode;
  function mask(event) {
    event.keyCode && (keyCode = event.keyCode);
    let pos = this.selectionStart;
    if (pos < 3) event.preventDefault();
    let matrix = "+7 (___) ___-__-__",
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, ""),
      newValue = matrix.replace(/[_\d]/g, function (a) {
        return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
      });
    i = newValue.indexOf("_");
    if (i != -1) {
      i < 5 && (i = 3);
      newValue = newValue.slice(0, i);
    }
    let reg = matrix.substr(0, this.value.length).replace(/_+/g,
      function (a) {
        return "\\d{1," + a.length + "}";
      }).replace(/[+()]/g, "\\$&");
    reg = new RegExp("^" + reg + "$");
    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
    if (event.type == "blur" && this.value.length < 5) this.value = "";
    if(this.value.length === 18) {
      let getCode = cacheJS.get('anketa');
      getCode.phoneNumber2 = this.value;
      cacheJS.set('anketa', getCode, 31104000, 'context');
      valid3()
    }
    else {
      let getCode = cacheJS.get('anketa');
      getCode.phoneNumber2 = '';
      cacheJS.set('anketa', getCode, 31104000, 'context');
      valid3()
    }
  }

  input.addEventListener("input", mask, false);
  input.addEventListener("focus", mask, false);
  input.addEventListener("blur", mask, false);
  input.addEventListener("keydown", mask, false);
});
[].forEach.call(document.querySelectorAll('input[type="code"]'), function (input) {
  function mask(event) {
    if(this.value.length > 6) {
      let str = this.value.substring(0, this.value.length - 1);
      this.value = str;
    }
    else if(this.value.length === 6) {
      if($('.nextAnket').length !== 0) {
        if(!$('.nextAnket').hasClass('active')) {
          $('.nextAnket').addClass('active');
          $(this).parent().addClass('active');
        }
      }
      if($('.goTechPhotoAuto').length !== 0) {
        if(!$('.goTechPhotoAuto').hasClass('active')) {
          $('.goTechPhotoAuto').addClass('active');
          $(this).parent().addClass('active');
        }
      }
      if($('.goFinal').length !== 0) {
        if(!$('.goFinal').hasClass('active')) {
          $('.goFinal').addClass('active');
          $(this).parent().addClass('active');
        }
      }
    }
    else {
      if($('.nextAnket').length !== 0) {
        if($('.nextAnket').hasClass('active')) {
          $('.nextAnket').removeClass('active');
          $(this).parent().removeClass('active');
        }
      }
      if($('.goTechPhotoAuto').length !== 0) {
        if($('.goTechPhotoAuto').hasClass('active')) {
          $('.goTechPhotoAuto').removeClass('active');
          $(this).parent().removeClass('active');
        }
      }
      if($('.goFinal').length !== 0) {
        if($('.goFinal').hasClass('active')) {
          $('.goFinal').removeClass('active');
          $(this).parent().removeClass('active');
        }
      }
    }
  }

  input.addEventListener("input", mask, false);
  input.addEventListener("focus", mask, false);
  input.addEventListener("blur", mask, false);
  input.addEventListener("keydown", mask, false);
});
[].forEach.call(document.querySelectorAll('input[type="iin"]'), function (input) {
  function mask2(event) {
    let val = this.value.replace(/\D/g, "");
    let foo = val.split("-").join("");
    if (foo.length > 0) {
      foo = foo.match(new RegExp('.{1,3}', 'g')).join("-");
    }
    this.value = foo;
    this.value = this.value.slice(0, 15);
    let strToInt = this.value.split("-");
    strToInt = strToInt.join('');
    if($('.getPage .block3').hasClass('active')) {
      if(this.value.length >= 15) {
        let cache = cacheJS.get('anketa');
        if(iinCheck(strToInt)) {
          strToInt = parseInt(strToInt);
          cache.iin = strToInt;
          cacheJS.set('anketa', cache, 31104000, 'context');
          $(this).css('border-color', '#B2B2B2')
          valid3()
        }
        else {
          this.value = ''
          $(this).css('border-color', '#952825')
          valid3()
        }
      }
    }
  }

  input.addEventListener("input", mask2, false);
  input.addEventListener("focus", mask2, false);
  input.addEventListener("blur", mask2, false);
  input.addEventListener("keydown", mask2, false);
});
[].forEach.call(document.querySelectorAll('input[type="iban"]'), function (input) {
  function mask3(event) {
    if(this.value.length > 20) {
      let str = this.value.substring(0, this.value.length - 1);
      this.value = str;
    }
    else {
      // KZ86125KZT5004100100
      let str = this.value.substring(0, 2);
      if(this.value.substring(0, 2) === 'KZ' && this.value.length >= 20) {
        $(this).css('border-color', '#B2B2B2')
        let getCode = cacheJS.get('anketa');
        getCode.iban = this.value;
        cacheJS.set('anketa', getCode, 31104000, 'context');
        // console.log(cacheJS.get('anketa'))
        valid3()
      }
      else if(this.value.length < 20 && this.value.substring(0, 1) !== 'K') {
        this.value = ''
        $(this).css('border-color', '#952825')
      }
      else if(this.value.substring(0, 1) === 'K') {
        $(this).css('border-color', '#B2B2B2')
      }
    }
  }

  input.addEventListener("input", mask3, false);
  input.addEventListener("focus", mask3, false);
  input.addEventListener("blur", mask3, false);
  input.addEventListener("keydown", mask3, false);
});
