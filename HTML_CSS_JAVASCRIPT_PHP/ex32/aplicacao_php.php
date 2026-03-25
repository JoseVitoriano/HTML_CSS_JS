

<?php
    
    define('HOST', '192,168,52,128');
    define('PORT', '5432');
    define('DBNAME', 'miniMundo');
    define('USER', 'postgres');
    define('PASSWORD', '1232');

    try {
        $dsn = new PDO('pgsql:host='.HOST.";port=".PORT.";dbname=".DBNAME."; user=".USER.";password=".PASSWORD);
    } catch (PDOException $e) {
        echo'A conexão falhou e retorna a seguinte mensagem de erro:'.$e->getMessage();
        //throw $th;
    }


    $instrucaoSQL = "Select id_cliente,nome_cliente, cpf_cliente, email_cliente, data nascimento_cliente From cliente";
    $resultSet = $dsn-> query($instrucaoSQL);

?>

