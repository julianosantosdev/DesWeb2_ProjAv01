<?php
    require('checkSession.php');
    if($_SESSION['user'] != 'coordenacao'){
        header("location: dashboard.php");
    }

    $lab = $_POST['lab'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $course =  $_SESSION["course"];


    $ge_db = "GE.txt";
    $dsm_db = "DSM.txt";

    if(!file_exists($ge_db) || !file_exists($dsm_db)) {
        $handle = fopen($filename, "w");
    } else {
        $handle = fopen($filename, "a");
    }

    if ($course == "GE") {
        $handle = fileopen($ge_db, "w");
    } else {
        $handle = fileopen($dsm_db, "w");
    }

    fwrite($handle, $_POST['lab'] . "\n");
    fwrite($handle, $_POST['cpf'] . "\n");
    fclose($handle);
?>