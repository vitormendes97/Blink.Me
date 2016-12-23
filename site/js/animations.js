$(document).ready(function(){


  toggleClass('#menu','#submenu_geral','menu-main-closed');

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-item'
  });

  $('.sair').click(function(){
    $('#submenu_geral').addClass('menu-main-closed');
  $('.sair').hide();
  });


  $('.closed').click(function() {
       var index = $(this).parent().index();
       $('.cosmetics_menu').eq(index).slideToggle("cosmetics_menu_open");
   });

   $('.sub_menu_closed').click(function() {
        var index = $(this).parent().index();
        $('.cosmetics_submenu').eq(index).slideToggle("cosmetics_menu_open");
    });


  // $('#lab_enviar').click(function(){
  //   $('#lab-form :input').each(function(){
  //      var input = input.concat( $(this).val()+',');
  //   });
  //   $('input[name=servicos]').val(input);
  // });
  var conteudo ='';
  $('#lab-form input[type=checkbox]').each(function(){
      $(this).click(function(){

        var id = $(this).val();

        if($('#'+id).is(":checked")){
          conteudo = conteudo.concat($(this).val()+', ');
          $('input[name=servicos]').val(conteudo);
        }
        else{
            conteudo = conteudo.replace($(this).val()+",","");
            $('input[name=servicos]').val(conteudo);
        }
      });
  });


  $('#schedule-widget').click(function() {
    $(this).fadeOut(500);
  });

  $('#schedule-button').click(function(){
    $('#schedule-widget').toggle(500);
  });

});


function toggleClass(elementClick, elementToggled,className){
  $(elementClick).on('click',function(){
    $(elementToggled).toggleClass(className);
    $(".sair").show();
  });
}


function fadeIn(element1, element2){

  $(element1).click(function(){
    $(element2).fadeIn();
  });
}

function fadeOut(element1, element2){

  $(element1).click(function(){
    $(element2).fadeOut();
  });
}
