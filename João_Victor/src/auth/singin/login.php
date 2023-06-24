<?php
// carregando dependencias
include_once($_SERVER['DOCUMENT_ROOT'].'/a3/src/assets/php/conn.php'); // puxando arquivo de conexao com o banco de dados
session_start(); // carregando sessoes

// definindo variaveis
$nome = $_POST['usuario'];
$senha = $_POST['senha'];

// query's no banco de dados
$db_user = $conn->query("SELECT * FROM user where user='{$nome}' and senha='{$senha}';");
$db_user_arr = mysqli_fetch_array($db_user);
echo($db_user->num_rows);
// codigo

// se retornar algo diferente de 0 linhas, o if entende que o usuario existe;
if($db_user->num_rows !=  0){
    $_SESSION["userID"] = '';
    header('Location: http://localhost/a3/src/pages/painel/');
}


?>