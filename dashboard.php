<?php
    //require("checkPrivileges.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/dashboard.css">
    <title>DASHBOARD</title>
</head>
<body>
    <main>
        <section class="container">
            <div>
                <h1>SOLICITAÇÕES DOS LABORATÓRIOS DE INFORMÁTICA</h1>
            </div>
                <form action="">
                    <fieldset>
                        <label for="lab">Laboratorio</label>
                        <select default="Lista de Laboratorios" id="lab">
                            <option selected default hidden>Lista de laboratórios</option>
                            <option value="Lab1">Laboratório 01</option>
                            <option value="Lab2">Laboratório 02</option>
                            <option value="Lab3">Laboratório 03</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label for="date">Data</label>
                        <input type="date" id="data">
                    </fieldset>

                    <fieldset>
                        <label for="description">Descrição</label>
                        <input type="text" id="description">
                    </fieldset>

                    <fieldset>
                        <label for="course">Curso Atendido</label>
                        <select id="course">
                            <option selected default hidden>Selecione o Curso</option>
                            <option value="DSM">DSM</option>
                            <option value="GE">GE</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <input type="submit" value="REGISTRAR SOLICITAÇÃO">
                    </fieldset>
                </form>
        </section>
        
    </main>

    
    
</body>
</html>