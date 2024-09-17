<?php
    require("checkSession.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>DASHBOARD</title>
</head>
<body>
    <main>
        <section>
            <div>
                <h2>Olá, <?php echo (ucfirst(($_SESSION["user"]))); ?></h2>
            </div>
            
            <div>
                <?php if ($_SESSION["user"] == "coordenacao"):?>
                    <a href="registerPage.php">REGISTRAR SOLICITAÇÃO</a>
                <?php endif; ?>
                <a href="recordsTechsView">VER SOLICITAÇÕES POR CURSO</a>
                <a href="labRecords">VER TODAS SOLICITAÇÕES</a>
                <a href="logout.php">LOGOUT</a>
            </div>
        </section>
    </main>
    
</body>
</html>