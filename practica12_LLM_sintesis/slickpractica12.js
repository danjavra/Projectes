$(document).ready(function(){
     $('#slider1').slick({
    autoplay: false,
    speed:300,
    dots: true,
    accessibility: true,
    adaptiveHeight: true,
   infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1
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
    
    imageselecionado1.attr("src", currentValue1+".jpg");
    
}

var segundoSelect = $("#personaje2");
var imageselecionado2 = $("#imagenselecionado2");

segundoSelect.on('change',cambiaImagen2);

function cambiaImagen2(){
    var currentValue2 = $(this).val();
    
    imageselecionado2.attr("src", currentValue2+".jpg");
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
         range:[0,17]
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
         range:[0,17]
      },
      personaje2:{
          required:true
      }
   },
   messages:{
       direccion1:{
       required:"requerido",
       minlength:"minimo 5 letras",
       maxlength:"maximo 20 letras"
         },
       edad1:{
       required:"requerido",
       range:"0-17"
       },
       personaje1:{
       personaje:"requerido"
       },
       direccion2:{
        required:"<b>requerido",
       minlength:"minimo 5 letras",
       maxlength:"maximo 20 letras"   
       },
       edad2:{
       required:"requerido",
       range:"0-17"
       },
       personaje2:{
       required:"requerido"
       }
   }
   
});
});
