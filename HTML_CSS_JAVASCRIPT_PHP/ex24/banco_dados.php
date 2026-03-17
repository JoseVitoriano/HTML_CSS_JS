<!--Analise da interface entre Html e PHP-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha Bem Vindo</title>
</head>
<body>
    seja bem vindo <?php echo $_POST["name"]; ?><br>
    acesso permitido: <?php echo $_POST["senha"]; ?>
    <br>
    
</body>
</html>