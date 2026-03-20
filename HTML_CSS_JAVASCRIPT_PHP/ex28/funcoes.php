<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$num1 = 10;
$num2 = 20;

$num3 = soma($num1, $num2);
imprimir_resultado($num3);

function soma ($num1, $num2){
    return $num1 + $num2;
}

function imprimir_resultado ($num3){
    echo "O resultado da soma é : ". $num3;
}

?>

    
</body>
</html>