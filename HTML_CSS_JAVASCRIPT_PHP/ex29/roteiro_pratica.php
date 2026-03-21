<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $notas = array("João1", 8.5, 8.2);

    function media ($num1,$num2){
        return ($num1 + $num2) / 2;
    }

    $media = media($notas[1], $notas[2]);

    echo "A média do ".$notas[0]." é igual à:".$media;

    

    ?>

</body>
</html>