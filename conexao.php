<?php 
    //Dados da conexão
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "autenticacao";

    //Realizando a conexão e verificando erros
    mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $conn = mysqli_connect($server, $username, $password, $database);
    }catch (mysqli_sql_exception $error){
        echo "Erro na conexão: ".$error->getMessage();
    }
?>