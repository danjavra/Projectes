$(document).ready(ini);
function ini(){
//estructora json
$("#div1").css({"background-color":"blue","color":"white","height":"200px"});
$("#div1").click(changeColors);
$(".div23").mouseenter(anima23);
$(".div23").mouseleave(desanima23);
$(".div23").click(muestraValores);
}
function changeColors(){
   $(".div23").css({"background-color":"orange"});
}

function anima23(){
    $(this).animate({"width":"300px","height":"100px"},{"duration":1500});
}

function desanima23(){
    $(this).stop();
    $(this).animate({"width":"100px","height":"30px"},{"duration":3000,"complete":setColor});
}

function setColor(){
    $(this).css({"background-color":"red"});
}

function muestraValores(){
    var c=$(this).attr("class");
    var b=$(this).css("background-color");
    $(this).html("class:"+c+" back:"+b);
}
// para ocultar o para mostrar un div, $(this).fadeout() y $(this).fadein()