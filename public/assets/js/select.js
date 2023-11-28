$('#marka').change(function(){
    if($(this).val() == 1) {
      $('#model').prop('selectedIndex', 0);
      $('#model .for-one').removeAttr('hidden');
      $('#model .for-two, #model .for-three, #model .no-guests').attr('hidden','hidden');
    }
    else if($(this).val() == 2) {
      $('#model').prop('selectedIndex', 0);
      $('#model .for-two').removeAttr('hidden');
      $('#model .for-three, #model .no-guests').attr('hidden','hidden');
    }
    else if($(this).val() == 3) {
      $('#model').prop('selectedIndex', 0);
      $('#model .for-two, #model .for-three').removeAttr('hidden');
      $('#model .no-guests').attr('hidden','hidden');
    }
    else if($(this).val() == 4) {
      $('#model .no-guests').removeAttr('hidden').attr('selected','selected');
      $('#model .for-one, #model .for-two, #model .for-three').attr('hidden','hidden');
    }
  });