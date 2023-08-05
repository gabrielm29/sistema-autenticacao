<?php 
    /*Importando o arquivo com a conexão*/
    session_start();
    require_once ("conexao.php");
    
    /*Recebendo os valores via método POST*/
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? "";
    $password = $_POST["password"] ?? "";

    /*Verificação*/
        $select_query = "SELECT * FROM usuarios WHERE email='$email'";
        try{
            $resultado = mysqli_query($conn, $select_query);
            $usuario = mysqli_fetch_assoc($resultado);
            if($usuario !== null){
                if(password_verify($password, $usuario["senha"])){
                    $_SESSION["msg"] = "<p style='color: #4e9b8a;text-align: center;width: 335px;'>Logado com sucesso! Olá, ".$usuario['nome']."</p>";
                    header("Location: login.php");
                }else{
                    $_SESSION["msg"] = "<p style='color: #960000;text-align: center;width: 335px;'>A senha está incorreta</p>";
                    header("Location: login.php");
                }
            }else{
                $_SESSION["msg"] = "<p style='color: #960000;text-align: center;width: 335px;'>E-mail incorreto ou inexistente</p>";
                header("Location: login.php");
            }
        }catch (mysqli_sql_exception $error){
            echo "Error: ".$error->getMessage();
        }
?>