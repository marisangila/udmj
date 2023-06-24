<?php
// carregando dependencias
include_once($_SERVER['DOCUMENT_ROOT'].'/a3/src/assets/php/conn.php'); // puxando arquivo de conexao com o banco de dados
session_start(); // carregando sessoes

// definindo variaveis
$id = $_GET['id'];

// query's no banco de dados
$db_user = $conn->query("DELETE FROM agendamento WHERE `agendamento`.`id` = {$id}");


    header('Location: http://localhost/a3/src/pages/painel/');



?>