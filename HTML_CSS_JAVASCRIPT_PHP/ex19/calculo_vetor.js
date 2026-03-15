// Calculo da prática de vetores


var numeros = [];

numeros[0] = solicitarPrimeiroNumero();

numeros[1] = solicitarSegundoNumero();

var resultadoDivisao = divida(numeros);

function solicitarPrimeiroNumero(){

    var numero1 = prompt("Insira o primeiro número: ");
        if (numero1 < 0) {

            alert("O número precisa ser inteiro e positivo");

            return solicitarPrimeiroNumero();
   
        }else{
            return numero1;
        }

}

function solicitarSegundoNumero(){

    var numero2 = prompt("Insira o segundo número: ");
        if (numero2 < 0) {

            return solicitarSegundoNumero();
            
        }else{

            return numero2;
        }
}

function divida(numeros){

    var resultado = 0;

    resultado = numeros[0] / numeros[1];
    return resultado;

}