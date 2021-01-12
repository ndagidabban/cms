
$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn'),
  allPrevBtn = $('.prevBtn');

  //console.log(allNextBtn)
  allWells.hide();

  navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
      $item = $(this);

    if (!$item.hasClass('disabled')) {
      navListItems.removeClass('btn-primary').addClass('btn-default');
      $item.addClass('btn-primary');
      allWells.hide();
      $target.show();
      $target.find('input:eq(0)').focus();
    }
  });

  allPrevBtn.on('click', function () {
    var curStep = $(this).parents(".setup-content"),
      curStepBtn = curStep.attr("id");
    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
    prevStepWizard.removeAttr('disabled').trigger('click');

  });

  allNextBtn.click(function () {
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      curInputs = curStep.find("input[type='text'],input[type='url']"),
      isValid = true;

    $(".form-group").removeClass("has-error");

  //   if(curStepBtn == 'step-1') {
  //     isValid = step1Validation();
  //   }
  //   if(curStepBtn == 'step-2') {
  //     isValid = step2Validation();
  //    }
  //    if(curStepBtn == 'step-3') {
  //      isValid = step3Validation();
  //   }
  //   if(curStepBtn == 'step-4') {
  //     isValid = step4Validation();
  //  }
//    if(curStepBtn == 'step-5') {
//     isValid = step5Validation();
//  }

 
    
    if (isValid) {
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a");
      nextStepWizard.removeAttr('disabled').trigger('click');
    }
      
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});

function step1Validation() {

  const lessonClass = $( "#lesson-class" ).val()

  const rbs = document.querySelectorAll('input[id="convRadio"]');
  let radioCheckStatus = false
  let isFormValid = true;
  for (const rb of rbs) {
      if (rb.checked) {
        radioCheckStatus = true;
        break;

      }
  }
  
  if (lessonClass == '0') {
    isFormValid = false;
    $("#lesson-class").closest(".form-group").addClass("has-error");
  }

  if (!radioCheckStatus) {
    isFormValid = false;
    $("#convRadio").closest(".form-group").addClass("has-error");
  }

  return isFormValid;
}

 function step2Validation() {
  // console.log('step-2');
  
  let formIsValid = true;
  
  const subs = $('#lesson-subjects').val()
  if (subs.length == 0 ) {
    formIsValid = false
    $("#lesson-subjects").closest(".form-group").addClass("has-error");
  }

  let isCurSelected = false;
  const curs = document.querySelectorAll('input[id="curriculum"]');
  for(const cur of curs) {
    if (cur.checked) {
      isCurSelected = true
      break
    }
  }

  if (!isCurSelected) {
    formIsValid = false;
    $("#curriculum").closest(".form-group").addClass("has-error");
  }
  
  const genders = document.querySelectorAll('input[id="gender"]');
  let isGenderSelected = false

    for (const gender of genders) {
    if (gender.checked) {
        isGenderSelected = true;
        break;
    }
  }
  
  if (!isGenderSelected) {
    formIsValid = false;
     $("#gender").closest(".form-group").addClass("has-error");
   }  

  if($('#show-grades').is(":visible") && $('#grades').is(':visible')){
    const grades = $('#grades').val()   
    if (grades == 0) {
      formIsValid = false;
      $("#grades").closest(".form-group").addClass("has-error");
    }
  }

  if($('#need').is(':visible')){
    const need = $('#need').val()   
    if (need == 0) {
      formIsValid = false;
      $("#need").closest(".form-group").addClass("has-error");
    }
  }

  if ($("#goals").val() == 0) {
      formIsValid = false;
      $("#goals").closest(".form-group").addClass("has-error");
  }

  const aboutYourChild = $('#about-your-child').val()
  if (aboutYourChild.trim().length == 0 ){
    formIsValid = false;
    $("#about-your-child").closest(".form-group").addClass("has-error");
  }
   
  return formIsValid; 
 }



 function step3Validation() {
  const state= $('#pac-input').val()
  const vicinity=$('#vicinity').val()
  const bus= $('#nearestBus').val()
  //let checkStatus = false
  let formValid = true;

  if (!state) {
   formValid = false;
    $("#pac-input").closest(".form-group").addClass("has-error");    
  }
  if (!vicinity) {
    formValid = false;
     $("#vicinity").closest(".form-group").addClass("has-error");    
   }
   if (!bus) {
    formValid = false;
     $("#nearestBus").closest(".form-group").addClass("has-error");    
   }
  return formValid;
  }

  function step4Validation() {
    const  first= $('#first_name').val().trim()
    const  last= $("#last_name").val().trim()
    const  mail= $("#email").val().trim()
    const phone = $("#phone_on").val().trim()
    const about = $("#about_us").val()
    let valid = true;
   
    if(first.length == 0){
      valid = false;
      $("#first_name").closest(".form-group").addClass("has-error");
    }
    if(last.length == 0){
      valid= false;
      $("#last_name").closest(".form-group").addClass("has-error");
    }
      if(mail.length == 0){
        valid = false;
        $("#email").closest("form-group").addClass("has-error");
      }
    if(phone.length == 0){
      valid= false;
      $("#phone_on").closest(".form-group").addClass("has-error");
    }
    if(about =='0'){
      valid= false;
      $("#about_us").closest(".form-group").addClass("has-error");
    }
    return valid;
  }