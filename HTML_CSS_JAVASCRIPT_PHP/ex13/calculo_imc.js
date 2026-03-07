// Calculo da calculadora corporea

const imc = (peso, altura) => peso / (altura * altura);
const situacao = (valor_imc) => {
    if (valor_imc < 18.5) {
        return "Abaixo do PESO !";        
    }    
    else if(valor_imc > 18.5 && valor_imc < 25){
        return "Peso ideal PARABÉNS !";
    }
    else if(valor_imc > 25 && valor_imc < 30){
        return "Levemente acima do PESO !";
    }
    else if(valor_imc > 30 && valor_imc < 35){
        return "OBESIDADE GRAU I";
    }
    else if(valor_imc > 35 && valor_imc < 40){
        return "OBESIDADE GRAU II - SEVERA";
    }
    else{
        return "OBESIDADE GRAU III - MÓRBIDA";
    }
}