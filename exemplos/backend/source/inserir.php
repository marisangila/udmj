<?php

    include_once("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $conn->prepare("INSERT INTO usuario (email_usuario, senha_usuario) VALUE (?,?)");

    $sql->execute([$email,$senha]);

    unset($sql);
    unset($conn);

    header("location:../pages/cadastrar.php");
?>