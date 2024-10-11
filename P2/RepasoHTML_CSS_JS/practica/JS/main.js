// este es un comentario de JSde una linea
/* 
este es un comentario de varias lineas de codigo
*/

//Variables
var nombre="David Jezhuah";
var nombre2='Daniel flores';
let nombre3="Rodolfo Flores";
let edad=20;
let estatura= 1.80;
let logico=true;

//MOstrasr Contenido de variables
console.log("Hola soy la consola y tu nombre es: "+nombre3); // atraves de consola
document.write("Hola soy la consola y tu nombre es: "+nombre3);
document.write("<hr><h2>Hola soy la consola y tu nombre es: "+nombre3+"</h2>");

//Alertas
//alert("soy una alerta")

//mostrar contenido document.getElementBY
//document.getElementById

let datos=document.getElementById("informacion");
/*
datos.innerHTML
datos.innerText
*/
//solucion a esto 
datos.innerHTML='hola soy un contenido de innerhtml<br>';
datos.innerHTML+="<hr><h2>hola soy un contenido de InnerHTML</hr></h2>";
datos.innerHTML+="<hr><h2>mi edad es: "+edad+ "</hr></h2>";
datos.innerHTML+=`
        <hr>
        <h2>Mi edad es:${edad}</h2>
        <h2>Mi nombre es:${nombre}</h2>
        <hr>
` 
//condiciones
if (edad<=18)
datos.innerHTML+='<hr><h2>Soy mayor de edada</h2></hr>';
else
datos.innerHTML+='<hr><h2>Soy menor de edad</h2></hr>';

//ciclos
for (let i=1;i<=5;i++){
    datos.innerHTML+=`<h2>For soy el numero: ${i}</h2>`;

}

let i=1;
while (i<=5){
    datos.innerHTML+=`<h2>While: Soy el numero: ${i}</h2>`;
    i++;
}

i=1;
do{
    datos.innerHTML+=`<hr><h2>DoWhile:For soy el numero: ${i} </h2></hr>`;
    i++;
}while (i<=5);

//Funciones

//.-1 Funciones que no reciben parametros y que no regresa valores

function suma1(){
    let n1=2;
    let n2=3;
    let suma = n1+n2
    datos.innerHTML+=`<h2>La suma 1 es: ${suma} </h2>`;
}
suma1();

//.-2 Funcion que no recibe parametro pero si regresa valor
function suma2(){
    let n1=2;
    let n2=3;
    let suma = n1+n2;
    return suma;
}

let sum=suma2();
datos.innerHTML+=`<h2>La suma 2 es: ${sum} </h2>`;

//.-3 Funciones que si reciben parametro pero no regresa valor

function suma3(numero1,numero2){
    let n1=numero1;
    let n2=numero2;
    let suma=n1+n2
    datos.innerHTML+=`<h2>La suma 3 es: ${suma}</h2>`;
}
suma3(3,4);


//.-4 Funciones que si reciben parametro pero si regresa valor
function suma4(numero1,numero2){
    let n1=numero1;
    let n2=numero2;
    let suma=n1+n2;
    return suma;
}
sum=suma4(3,4);
datos.innerHTML+=`<h2>La suma 4 es: ${sum}</h2>`;

//Arreglos
/*
let animales=[];
animales[0]= "perro";//aqui si es obligatorio empezar en 0
animales[1]= "Gallinia";
animales[4]= "Perico";
*/

let animales=[];
animales[0]= "perro";//aqui si es obligatorio empezar en 0
animales[1]= "Gallinia";
animales[2]= "Perico";

let animales2=["Leon","Tigre","Elefante"];//hay ciertos lenguajes que te permiten aumentar o esta limitado. solo en los lenguajes estrictos ahi no

for(let i=0;i<animales.length;i++){//aqui es como si lo sumara por cada parametro
    datos.innerHTML+=`<h2>EL animal es: ${animales[i]}</h2>`;
}

animales2.forEach(element =>{
    datos.innerHTML+=`<hr><h2>EL animal es: ${element}</h2></hr>`;
})