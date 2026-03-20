<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

$alunos = array(
    array("João",8.7,9.4,7.8),
    array("Maria",9.2,8.5,9.0),
    array("Pedro",7.5,8.0,6.9),

);

echo $alunos [0][0].":p1:".$alunos[0][1]."p2:".$alunos[0][2]."p3:".$alunos [0][3]."<br";
echo $alunos [1][0].":p1:".$alunos[1][1]."p2:".$alunos[1][2]."p3:".$alunos [1][3]."<br>";
echo $alunos [2][0].":p1:".$alunos[2][1]."p2:".$alunos[2][2]."p3:".$alunos [2][3]."<br>";


?>
    
</body>
</html>