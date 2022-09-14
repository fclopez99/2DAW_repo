var numerosecreto = 20;
let numero = prompt("Introduzca un número para o intento. ");

if (numero != numerosecreto){
    if (numero > numerosecreto){
        alert("O número secreto e menor.");
    }
    else {
        alert("O número secreto e mayor.");
    }
}
else {
    alert("Resposta correcta"); 
}