<?php
    require("checkSession.php");
    if($_SESSION['user'] != 'coordenacao'){
        header("location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/register.css">
    <title>DASHBOARD</title>
</head>
<body>
    <main>
        <section class="container">
            <div>
                <h1>SOLICITAÇÕES DOS LABORATÓRIOS DE INFORMÁTICA</h1>
            </div>
                <form action="makeRegister.php" method="post" target="blank" onsubmit="window.open('about:blank','print_popup','width=1000,height=800');">>
                    <fieldset>
                        <label for="lab">Laboratorio</label>
                        <select default="Lista de Laboratorios" id="lab" name="lab" required="required">
                            <option selected default hidden>Lista de laboratórios</option>
                            <option value="Laboratório 01">Laboratório 01</option>
                            <option value="Laboratório 02">Laboratório 02</option>
                            <option value="Laboratório 03">Laboratório 03</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label for="date">Data</label>
                        <input type="date" id="data" name="date" lang="pt-BR" required="required">
                    </fieldset>

                    <fieldset>
                        <label for="description">Descrição</label>
                        <input type="text" id="description" name="description" required="required">
                    </fieldset>

                    <fieldset>
                        <label for="course">Curso Atendido</label>
                        <select id="course" name="course" required="required">
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