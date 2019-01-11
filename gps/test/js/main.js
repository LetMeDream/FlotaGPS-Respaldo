$(document).ready(function(){
  // As long as it works; Esto de acá abajo es una manera balurda de impedir a los usuarios
  // avanzar a través del form sin haber seleccionado alguna opción en los input
  // de estilo RADIO BUTTONS ↓
  //---------------------------------------------------------------------------------------------------------------------
  $("#buttonA").attr('disabled', 'disabled');
  $("#buttonC").attr('disabled', 'disabled');
  $("#buttonE").attr('disabled', 'disabled');
  $('#buttonA4').attr('disabled', true);
  $("input:radio[name=ans1]").change(function () {$("#buttonA").prop("disabled", false);});
  $("input:radio[name=r1]").change(function () {$("#buttonC").prop("disabled", false);});
  $("input:radio[name=x1]").change(function () {$("#buttonE").prop("disabled", false);});
  //---------------------------------------------------------------------------------------------------------------------
  // Ahora toca encargarse de los input que han de recibir texto; -> ↓↓↓
  // comenzando por el código postal
  /*$('#postalCode').keyup(function(){
      if($(this).val().length !=0)
          $('#buttonD').attr('disabled', false);            
      else
          $('#buttonD').attr('disabled',true);
    })
  //  luego el nombre
  $('#nombre').keyup(function(){
    if($(this).val().length !=0)
        $('#buttonA1').attr('disabled', false);            
    else
        $('#buttonA1').attr('disabled',true);
  })
  // Luego el nombre de la empresa
  $('#negocio').keyup(function(){
    if($(this).val().length !=0)
        $('#buttonA2').attr('disabled', false);            
    else
        $('#buttonA2').attr('disabled',true);
  })
  $('#correo').keyup(function(){
    if($(this).val().length !=0)
        $('#buttonA3').attr('disabled', false);            
    else
        $('#buttonA3').attr('disabled',true);
  })
  */
  // All the above code has been commented in the formMerging procces
  // Por último, el teléfono. >>>>>>>>>>>>>>> NOW ACTUALLY YOU DO ALL THE COMPARISONS IN HERE, NOT JUST PHONENUMBER.
  $('.3 input').keyup(function(){

    var empty = false;
    // Here happens the magic. ↓
    $('.3 input').each(function() {
          if ($(this).val() == '') {
              empty = true;
          }
      });

      if (empty) {
          $('#buttonA4').attr('disabled', true);
      } else {
          $('#buttonA4').attr('disabled', false);
      } 


  
  })
  

// Esto y todo lo que está debajo era el código original del Form
// Su función es cambiar el Fieldset y el Header cada vez que el usuario clickee 
// el botón para ello.
    $(".form-wrapper .button").click(function(){
      var button = $(this);
      var currentSection = button.parents(".section");
      var currentSectionIndex = currentSection.index();
      var headerSection = $('.steps li').eq(currentSectionIndex);
  
      currentSection.removeClass("is-active").next().addClass("is-active");
      headerSection.removeClass("is-active").next().addClass("is-active");
     // Added ↓
     if(currentSectionIndex <= 3){
      $(".form-wrapper").submit(function(e) {
        e.preventDefault();
        

      });
    }
  
   





       /* Removed

      $(".form-wrapper").submit(function(e) {
        e.preventDefault();
      });

     Removed
      if(currentSectionIndex === 7){
        $(document).find(".form-wrapper .section").first().addClass("is-active");
        $(document).find(".steps li").first().addClass("is-active");
      }
    */

    /* Added and commented
    $(".form-wrapper .sex").click(function(){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    })
    */

   

    });

    /* Added and trying */
    $(".form-wrapper .sex").click(function(){
        var button = $(this);
        var currentSection = button.parents(".section");
        var currentSectionIndex = currentSection.index();
        var headerSection = $('.steps li').eq(currentSectionIndex);
        currentSection.removeClass("is-active").prev().addClass("is-active");
        headerSection.removeClass("is-active").prev().addClass("is-active");


    })
    

  });
  