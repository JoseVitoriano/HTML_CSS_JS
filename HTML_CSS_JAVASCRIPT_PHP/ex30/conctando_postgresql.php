

<?php

define('HOST', '127.0,0,1');
define('PORT','5432');
define('DBNAME','test');
define('PASSWORD', 'psswd');

try {
    $dsn = new PDO('pgsql:host='.HOST.";port=".PORT.";dbname=".DBNAME.";user=".USER.";password=".PASSWORD);

} catch (PDOException $e) {
    echo 'A conexão falhou e retornou a seguinte mensagem de erro:';
    $e->getMessage();
    //throw $th;
}

$dsn = NULL;