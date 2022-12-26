<?php
    session_start();
    if(!isset($_SESSION["adminname"])) {
        header("Location: admin_login.php");
        exit();
    }
?>