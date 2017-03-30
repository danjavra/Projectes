$(document).ready(function(){
     $('#slider1').slick({
    autoplay: false,
    speed:300,
    dots: true,
    accessibility: true,
    adaptiveHeight: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    }]
  });
  
  $("#player1,#player2").click(CambiarColor);

var color = ["red","blue","green"];

var x = Math.floor(Math.random()*3);

function CambiarColor(){
    $(this).css({"background-color":color[x++]})
    if(x == color.length){
        x = 0;
    }

}

var primerSelect = $("#personaje1");
var imageselecionado1 = $("#imagenselecionado1");

primerSelect.on('change', cambiaImagen1);

function cambiaImagen1(){
    
    var currentValue1 = $(this).val();
   
    contenedor1.hide();
    imageselecionado1.attr("src", currentValue1+".jpg");
    contenedor1.animate({"left":"-800px"});
    contenedor1.fadeIn(100);
    setTimeout(transicion1, 100);
    
}

var segundoSelect = $("#personaje2");
var imageselecionado2 = $("#imagenselecionado2");

segundoSelect.on('change',cambiaImagen2);

function cambiaImagen2(){
    var currentValue2 = $(this).val();
    
    contenedor2.hide();
    imageselecionado2.attr("src", currentValue2+".jpg");
    contenedor2.animate({"right":"-800px"}); 
    contenedor2.fadeIn(100);
    setTimeout(transicion2, 100);
}

var contenedor1 = $('.Ply1Heroes'),
    contenedor2 = $('.Ply2Heroes');

function transicion1(){
    
    contenedor1.animate({"left":"0"});
}
function transicion2(){
    contenedor2.animate({"right":"0"});
}


$("#formulario").validate({
   focusCleanup: true,
   rules:{
      direccion1:{
          required:true,
          minlength:5,
          maxlength:20
          
      },
      edad1:{
         required:true,
         range:[18,99]
      },
      personaje1:{
          required:true
      },
      direccion2:{
         required:true,
          minlength:5,
          maxlength:20 
      },
      edad2:{
         required:true,
         range:[18,99]
      },
      personaje2:{
          required:true
      }
   },
   messages:{
       direccion1:{
       required:"<b>Obligatorio</b>",
       minlength:"minimo 5 letras",
       maxlength:"maximo 20 letras"
         },
       edad1:{
       required:"<b>Obligatorio</b>",
       range:"18-99"
       },
       personaje1:{
       personaje:"<b>Obligatorio</b>"
       },
       direccion2:{
        required:"<b>Obligatorio</b>",
       minlength:"minimo 5 letras",
       maxlength:"maximo 20 letras"   
       },
       edad2:{
       required:"<b>Obligatorio</b>",
       range:"18-99"
       },
       personaje2:{
       required:"<b>Obligatorio</b>"
       }
   }

});
   $("#formulario").valid();



});