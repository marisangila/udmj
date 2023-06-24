<?php
// carregando dependencias

include_once($_SERVER['DOCUMENT_ROOT'].'/a3/src/assets/php/conn.php'); // puxando arquivo de conexao com o banco de dados
session_start(); // carregando sessoes

// definindo variaveis

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$idServico = $_POST["servico"];
$dtAgendamento = $_POST["data"];

// codigo

// try é a tentativa de rodar a funçao que faz conexao com o banco;
try {
    //usamos o arroba para ocultar o possível erro retornado pelo PHP
    $teste = $conn->query("INSERT INTO `agendamento` (`id`, `nomeCliente`, `telefone`, `servico`, `dtAgendamento`)
     VALUES (NULL, '$nome', '$telefone', '$idServico', '$dtAgendamento');");
  
    if (!$teste) { //se conexão falhar
       throw new Exception("Erro ao realizar a conexão com o banco de dados");
    }
 }
//  catch ele retorna o erro caso exista;
 catch (Exception $e) {
   $_SESSION['msg'] = "";
    header('location: http://localhost/a3/src/pages/agendamento/'); 
    exit;
 }

 $_SESSION['msg'] = "";
    header('location: http://localhost/a3/src/pages/agendamento/'); 

?>