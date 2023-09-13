<?php
    session_start();
    if (isset($_POST)) {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (isset($_SESSION["dados"]["users"])) {
            $countDados = count($_SESSION["dados"]["users"]);
            for ($i = 0; $i < $countDados; $i++) {
                if ($_SESSION["dados"]["users"][$i]["username"] == $username) {
                    header("Location: ../pages/register?error=true");
                    return;
                }
            }
            $countDados = $countDados + 1;
            array_push($_SESSION["dados"]["users"], $countDados = ["name" => $name, "username" => $username, "password" => $password]);
            header("Location: ../pages/register?success=true");
            return;
        }
        $_SESSION["dados"] = [
            "users" => [
                0 => [
                    "name" => $name,
                    "username" => $username,
                    "password" => $password
                ]
            ]
        ];
        header("Location: ../pages/register?success=true");
        return;
    }
    header("Location: ../pages/register");
?>