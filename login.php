<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div id="cadastro" class="main"> 
            <h1>Login</h1>
            <form action="verificador.php" method="post" autocomplete="on">
                <div class="form">
                    <label for="email" class="material-symbols-outlined">mail</label>
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                </div>
                <div class="form">
                    <label for="password" class="material-symbols-outlined">lock</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form">
                    <?php
                        if(isset($_SESSION["msg"])){
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?>
                </div>
                <div class="form">
                    <input type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </main>
</body>
</html>