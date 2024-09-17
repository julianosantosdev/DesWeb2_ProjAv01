<?php
    require ("checkCredentials.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Login</title>
</head>
<body>
    <main class="">
        <section class="loginBox container">
            <h2>LOGIN</h2>
            <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="POST">
                <fieldset class="inputArea">
                    <label for="user">Usuário</label>
                    <input type="text" placeholder="Insira seu usuário" id="user" name="user">
                </fieldset>

                <fieldset class="inputArea">
                    <label for="user">Senha</label>
                    <input type="text" placeholder="Insira sua senha" id="password" name="password">
                </fieldset>

                <fieldset>
                    <input type="submit" id="submitFormButton" value="Entrar">
                </fieldset>
            </form>
            <a href="labRecords.php" id="checkRecordsButton">VER SOLICITAÇÕES</a>
        </section>
    </main>    
</body>
</html>