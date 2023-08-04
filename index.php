<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>
<body>
    <main>
        <div id="login" class="main">
            <h1>Bem-Vindo de Volta!</h1>
            <button onclick="window.location.href='login.php'">Logar</button>
        </div>
        <div id="cadastro" class="main"> 
            <h1>Crie Sua Conta</h1>
            <form action="cadastrar.php" method="post" autocomplete="on">
                <div class="form">
                    <label for="name" class="material-symbols-outlined">person</label>
                    <input type="text" name="name" id="name" placeholder="Name">
                </div>
                <div class="form">
                    <label for="email" class="material-symbols-outlined">mail</label>
                    <input type="email" name="email" id="email" placeholder="E-mail">
                </div>
                <div class="form">
                    <label for="password" class="material-symbols-outlined">lock</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </main>
</body>
</html>