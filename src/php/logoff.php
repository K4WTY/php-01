<?php
    session_start();
    unset($_SESSION["anyUserChecked"]);
    unset($_SESSION["userData"]);
    header("Location: ../../");
?>