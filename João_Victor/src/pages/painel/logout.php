<?php
// carregando dependencias
include_once($_SERVER['DOCUMENT_ROOT'].'/a3/src/assets/php/conn.php'); // puxando arquivo de conexao com o banco de dados
session_start(); // carregando sessoes

// definindo variaveis


// query's no banco de dados


// codigo

// destruindo todas as sessoes

    session_destroy();
    header('Location: http://localhost/a3/src/auth/singin/');


?>