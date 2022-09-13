//Script para práctica sobre ambitos de variables
var numero = 0; //Variable ambito global.
const PI=3.141592653589;
var y = Infinity;
let nombre = 'Fabián';
numero ++;
if (numero == 1){
    let numero = 12; //Variable ambito local.
    console.log(numero);


console.log(numero);
console.log(PI);
console.log(y+1);
console.log(nombre);}
console.log("Alumno de DAW "+nombre);

// typeof: tipo de valor de variable