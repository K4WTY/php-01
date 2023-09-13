<?php
    session_start();
    if (!isset($_SESSION["anyUserChecked"])) {
        header("Location: ../../../");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Olá, <?= $_SESSION["userData"]["name"] ?>.</h1>
    <p>Seus dados:</p>
    <p>Nome: <?= $_SESSION["userData"]["name"] ?></p>
    <p>Usuário: <?= $_SESSION["userData"]["username"] ?></p>
    <p>Senha: <?= $_SESSION["userData"]["password"] ?></p>
    <a href="../../php/logoff.php">Sair</a>
</body>
</html>