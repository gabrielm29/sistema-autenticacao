<?php
    /*Importando o arquivo com a conexão*/
    require_once ("conexao.php");
    
    /*Recebendo os dados via método POST e criptografando a senha*/
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $hash = password_hash($password, PASSWORD_BCRYPT);

    /*Inserindo um comando SQL a uma variável*/
    $insert_sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$name','$email','$hash')" ;

    /*Executando o comando SQL e verificando se a conexão foi realizada com sucesso*/
    try{
        $resultado = mysqli_query($conn, $insert_sql);
        header("Location: index.php"); 
    }catch (mysqli_sql_exception $error){
        echo "Erro no cadastro: ".$error->getMessage();
    }

?>