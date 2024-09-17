<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET"){
        session_start();
        if($_POST['user'] == 'coordenacao' && $_POST['password'] == 'coordenacao' || $_POST['user'] == 'tecnicos' && $_POST['password'] == 'tecnicos'){
            $_SESSION['logged'] = TRUE;
            $_SESSION["user"] = $_POST["user"];
            header("location: dashboard.php");
        } else {
            $_SESSION['logged'] = FALSE;
        }
    }
?>