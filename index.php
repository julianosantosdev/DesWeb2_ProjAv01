<?php
    require ("checkLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>
    <main class="">
        <section class="loginBox container">
            <h2>LOGIN</h2>
            <form action="<?php $_SESSION["PHP_SELF"]?>" method="POST">
                <div class="inputArea">
                    <label for="user">Usuário</label>
                    <input type="text" placeholder="Insira seu usuário" id="user" name="user">
                </div>

                <div class="inputArea">
                    <label for="user">Senha</label>
                    <input type="text" placeholder="Insira sua senha" id="password" name="password">
                </div>

                <div>
                    <input type="submit" id="submitButton">
                </div>
            </form>
        </section>
    </main>    
</body>
</html>