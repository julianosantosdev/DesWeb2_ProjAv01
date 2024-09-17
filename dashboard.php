<?php
    require("checkSession.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/dashboard.css">
    <title>DASHBOARD</title>
</head>
<body>
    <main>
        <section>
            <div>
                <h2>Olá, <?php echo (ucfirst(($_SESSION["user"]))); ?></h2>
            </div>
            
            <div class="linksMenu">
                <?php if ($_SESSION["user"] == "coordenacao"):?>
                    <a href="registerPage.php">REGISTRAR SOLICITAÇÃO</a>
                <?php endif; ?>
                <a href="viewLabsRequestsCourse.php">VER SOLICITAÇÕES POR CURSO</a>
                <a href="viewAllLabsRequests.php">VER TODAS SOLICITAÇÕES</a>
                <a class="logout" href="logout.php">LOGOUT</a>
            </div>
        </section>
    </main>
    
</body>
</html>