var texto="Hola Mundo";
console.log(texto);
//window.alert(texto);//
var num=window.prompt("Introduce un numero");
console.log(num);
num = parseInt(num);
num=num+20;
console.log(num);

function muestraInput(){
    var input=document.getElementById("entrada");
    var texto=input.value;
    console.log(texto);
}

function changeText(estado){

var div = document.getElementById("mensaje");
div.innerHTML+=texto+" <h1 onclick='alert(\"lol\")'> "+estado+" </h1>";
}

