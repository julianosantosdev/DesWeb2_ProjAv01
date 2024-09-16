<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        if($_POST['user'] == 'coordenacao' && $_POST['password'] == 'coordenacao'){
            $_SESSION['logged'] = TRUE;
            $_SESSION["user"] = 'Coordenação';
            header("location: dashboard.php");
        } elseif ($_POST['user'] == 'tecnicos' && $_POST['password'] == 'tecnicos') {
            $_SESSION['logged'] = TRUE;
            $_SESSION["user"] = 'Coordenação';
            header("location: dashboard.php");
        } else {
            $_SESSION['logged'] = FALSE;
        }
    }
?>