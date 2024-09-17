<?php
    require('checkSession.php');
    if($_SESSION['user'] != 'coordenacao'){
        header("location: dashboard.php");
    }

    $lab = $_POST["lab"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $course =  $_POST["course"];

    $geEntries = "GE.txt";
    $dsmEntries = "DSM.txt";

    if ($course == "GE") {
        if (!file_exists($geEntries)) {
            $handle = fopen($geEntries, "w");
        } else {
            $handle = fopen($geEntries, "a");
        }

    } 

    if ($course == "DSM") {
        if (!file_exists($dsmEntries)) {
            $handle = fopen($dsmEntries, "w");
        } else {
            $handle = fopen($dsmEntries, "a");
        }
    }

    fwrite($handle, $lab . " | " . $date . " | " . $description . "\n");
    fflush($handle);
    fclose($handle);
    echo '<script>alert("Solicitação Registrada. Você já pode fechar janela.");</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Solicitação</title>
</head>
<body>
    <h1>Solicitação Enviada</h1>
    <a href="registerPage.php">Retornar</a>
</body>
</html>