<?php
    include_once("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $conn->prepare("SELECT pk_usuario, email_usuario, senha_usuario, eh_adm_usuario FROM usuario WHERE email_usuario = ?");

    $sql->execute([$email]);

    if($sql->rowCount() == 1){
        $usuario = $sql->fetch();
        if ($usuario['senha_usuario'] == $senha){
            session_start();
            $_SESSION["eh_adm"] = $usuario['eh_adm_usuario'];
            header("location:../pages/pagina_inicial.php");
        }else{
            echo("E-mail ou senha inválidos!");
        }
    }else{
        echo("E-mail ou senha inválidos!");
    }
?>