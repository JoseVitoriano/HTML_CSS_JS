
var c = 5;
var d = -1;
console.log("IF com duas condições, onde ambas precisam ser verdadeiras:");

if(c > d && d > 0){
    console.log("c é maior que d E d é um número positivo");
}

if(c > d && d <= 0){
    console.log("c é maior que d E d não é um número positivo");

}

if(c < d || d > 0){
    console.log("c é maior que d OU d é um número positivo");
}

if(c < d || d <= 0){
    console.log("c é menor que d OU d não é um número positivo");
}