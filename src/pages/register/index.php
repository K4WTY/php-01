<?php

    session_start();
    if (isset($_SESSION["anyUserChecked"])) {
        header("Location: ../../pages/home/");
    }

    $erro = isset($_GET["error"]) ? $_GET["error"] : null;
    $sucesso = isset($_GET["success"]) ? $_GET["success"] : null;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/reset.css">
    <link rel="stylesheet" href="../../../assets/css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="alert <?php if($erro) { echo "error"; }  if($sucesso) { echo "success"; }?>" id="alert" <?php if($erro || $sucesso) { echo "style='display: block;'"; } ?>>
            <?php if($erro) { echo "Usuário já cadastrado"; } ?>
            <?php if($sucesso) { echo "Usuário cadastrado"; } ?>
        </div>
        <form action="../../php/register.php" method="POST">
            <input type="text" placeholder="Username" name="username" required>
            <input type="text" placeholder="Name" name="name" required>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <img src="../../../assets/icons/eye.svg" height="20" id="eye1">
            <input type="password" placeholder="Confirm password" id="password2" required>
            <img src="../../../assets/icons/eye.svg" height="20" id="eye2">
            <button>Cadastrar</button>
            <a href="../../../">Possui uma conta?</a>
        </form>
    </div>
    <script src="../../../assets/js/register.js"></script>
</body>
</html>