<?php
    session_start();
    if (isset($_SESSION["anyUserChecked"])) {
        header("Location: ./src/pages/home/");
    }

    $erro = isset($_GET["error"]) ? $_GET["error"] : null;
    $tipo = isset($_GET["type"]) ? $_GET["type"] : null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="alert <?php if ($erro) { echo "error"; } ?>" id="alert" <?php if ($erro) { echo "style='display: block;'"; } ?>>
            <?php if ($tipo == 1) { echo "Usuário ou senha incorretos"; } ?>
            <?php if ($tipo == 2) { echo "Usuário não encontrado"; } ?>
        </div>
        <form action="./src/php/login.php" method="POST">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <img src="./assets/icons/eye.svg" height="20">
            <button>Entrar</button>
            <a href="./src/pages/register/">Cadastrar-se</a>
        </form>
    </div>
    <script src="./assets/js/login.js"></script>
</body>
</html>