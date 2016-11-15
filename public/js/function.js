$(window).on('resize', function() {
        
        if ($(window).width() < 1360) {
            $(".config-border").css("padding-left","4.5%");
            
            $("#cosmetics").css("margin-right","0");
            $("#cosmetics").css("margin-left","20%");
            
            $("#atelier").css("margin-right","0");
            $("#atelier").css("margin-left","12%");
            
            $("#lab").css("margin-left","0");
            $("#lab").css("margin-right","6%");
            
            $("#studio").css("margin-left","0");
            $("#studio").css("margin-right","18%");
        }
        else {
             $(".config-border").css("padding-left","2%");
        }
});




$(document).ready(function(){
    verificarPremio();
});



function verificarPremio()
{

    $("#subscribe_form").submit(function(e){

         var select = Number($("#select-form").val());
        if(select == 0)
        {

           return false;
        }
        else{
              return true;
        }
    });
}

function verificarPremioModal()
{
     var select = Number($("#select-form").val());
     var buttom = $("#btn-cadastrar");

     if(select == 0)
     {
        apprise("Você esqueceu de selecionar o seu prêmio.");
     }
    
}