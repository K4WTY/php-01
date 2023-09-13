<?php
    session_start();
    if (isset($_POST)) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (isset($_SESSION["dados"]["users"])) {
            $countDados = count($_SESSION["dados"]["users"]);
            for ($i = 0; $i < $countDados; $i++) {
                if ($_SESSION["dados"]["users"][$i]["username"] == $username && $_SESSION["dados"]["users"][$i]["password"] == $password) {
                    $_SESSION["anyUserChecked"] = true;
                    $_SESSION["userData"] = $_SESSION["dados"]["users"][$i];
                    header("Location: ../pages/home");
                    return;
                }
            }
            header("Location: ../../index.php?error=true&type=1");
            return;
        }
        header("Location: ../../index.php?error=true&type=2");
        return;
    }
    header("Location: ../../");
?>