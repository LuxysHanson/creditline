// post phone number get code status
async function sendGetCode() {
  let cache = cacheJS.get('anketa');
  let phoneNumberCorrect = cache.phoneNumberString;
  phoneNumberCorrect = phoneNumberCorrect.split(' ');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
  phoneNumberCorrect = phoneNumberCorrect.split('(');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
  phoneNumberCorrect = phoneNumberCorrect.split(')');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
  phoneNumberCorrect = phoneNumberCorrect.split('-');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
  let bitData = cacheJS.get('anketa');
  $.ajax({
    url: 'https://d7dd57eb-d21d-43ee-87fb-3542a96c48b6.mock.pstmn.io/api/getCode',
    type: 'POST',
    data: {
      phoneNumber: phoneNumberCorrect,
    },
    cache:false,
    contentType: false,
    processData: false,
    success: function (a) {
      if(bitData.phoneNumber) {
        $('.getPage .block1').removeClass('active');
        $('.getPage .block2').addClass('active');
        // записваю номер на 2 блок
        $('.block2 .phoneNumberString').text(cacheJS.get('anketa').phoneNumberString)
      }
    },
    error: function (error) {
      console.log(error)
    }
  })
}
// post valid code
async function sendValidCode() {
  let validCode = $('.a_validCode1').val();
  validCode = validCode.split('-');
  validCode = validCode[0] + validCode[1];
  let ajax = $.ajax({
    url: 'https://d7dd57eb-d21d-43ee-87fb-3542a96c48b6.mock.pstmn.io/api/validCode',
    type: 'POST',
    data: {
      validCode: parseInt(validCode),
    },
    cache:false,
    contentType: false,
    processData: false,
    success: function (a) {
    },
    error: function (error) {
      console.log(error)
    }
  })
  return ajax;
}
//
async function sendGetCode2() {
  let cache = cacheJS.get('anketa');
  let phoneNumberCorrect = cache.phoneNumberString;
  phoneNumberCorrect = phoneNumberCorrect.split(' ');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
  phoneNumberCorrect = phoneNumberCorrect.split('(');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
  phoneNumberCorrect = phoneNumberCorrect.split(')');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
  phoneNumberCorrect = phoneNumberCorrect.split('-');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
  let bitData = cacheJS.get('anketa');
  $.ajax({
    url: 'https://d7dd57eb-d21d-43ee-87fb-3542a96c48b6.mock.pstmn.io/api/getCode',
    type: 'POST',
    data: {
      phoneNumber: phoneNumberCorrect,
    },
    cache:false,
    contentType: false,
    processData: false,
    success: function (a) {
      if(cache.phoneNumber) {
        $('.getPage .block8').removeClass('active');
        $('.getPage .block9').addClass('active');
        timerAgain2()
      }
    },
    error: function (error) {
      console.log(error)
    }
  })
}
// post valid code
async function sendValidCode2() {
  let validCode = $('.a_validCode2').val();
  validCode = validCode.split('-');
  validCode = validCode[0] + validCode[1];
  let ajax = $.ajax({
    url: 'https://d7dd57eb-d21d-43ee-87fb-3542a96c48b6.mock.pstmn.io/api/validCode',
    type: 'POST',
    data: {
      validCode: parseInt(validCode),
    },
    cache:false,
    contentType: false,
    processData: false,
    success: function (a) {
    },
    error: function (error) {
      console.log(error)
    }
  })
  return ajax;
}
// post all data
async function sendAllData() {
  let cache = cacheJS.get('anketa');
  let ajax = $.ajax({
    url: 'https://d7dd57eb-d21d-43ee-87fb-3542a96c48b6.mock.pstmn.io/api/validCode',
    type: 'POST',
    data: cache,
    cache:false,
    contentType: false,
    processData: false,
    success: function (a) {
    },
    error: function (error) {
      console.log(error)
    }
  })
  return ajax;
}
async function sendGetCode3() {
  let cache = cacheJS.get('anketa');
  let phoneNumberCorrect = cache.phoneNumberString;
  phoneNumberCorrect = phoneNumberCorrect.split(' ');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
  phoneNumberCorrect = phoneNumberCorrect.split('(');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
  phoneNumberCorrect = phoneNumberCorrect.split(')');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1];
  phoneNumberCorrect = phoneNumberCorrect.split('-');
  phoneNumberCorrect = phoneNumberCorrect[0] + phoneNumberCorrect[1] + phoneNumberCorrect[2];
  let bitData = cacheJS.get('anketa');
  $.ajax({
    url: 'https://d7dd57eb-d21d-43ee-87fb-3542a96c48b6.mock.pstmn.io/api/getCode',
    type: 'POST',
    data: {
      phoneNumber: phoneNumberCorrect,
    },
    cache:false,
    contentType: false,
    processData: false,
    success: function (a) {
      if(cache.phoneNumber) {
        $('.getPage .block14').removeClass('active');
        $('.getPage .block15').addClass('active');
        timerAgain3()
      }
    },
    error: function (error) {
      console.log(error)
    }
  })
}
// post valid code
async function sendValidCode3() {
  let validCode = $('.a_validCode3').val();
  validCode = validCode.split('-');
  validCode = validCode[0] + validCode[1];
  let ajax = $.ajax({
    url: 'https://d7dd57eb-d21d-43ee-87fb-3542a96c48b6.mock.pstmn.io/api/validCode',
    type: 'POST',
    data: {
      validCode: parseInt(validCode),
    },
    cache:false,
    contentType: false,
    processData: false,
    success: function (a) {
    },
    error: function (error) {
      console.log(error)
    }
  })
  return ajax;
}
