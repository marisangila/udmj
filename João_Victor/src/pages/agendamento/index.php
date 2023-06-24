<?php
    // carregando dependencias
    include_once($_SERVER['DOCUMENT_ROOT'].'/a3/src/assets/php/conn.php');
    session_start();
    $servicos = $conn->query("SELECT * from servicos;");
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Agendamento</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1><a href="#"><img src="../../assets/img/logo.png" alt="" width="200px" height="70px"></a></h1>
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="./home.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Serviços</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre nós</a></li>
                    <li class="nav-item"><a href="../../auth/singin/index.html" class="nav-link">Painel</a></li>
                </ul>
            </div>
            
            <div class="login-button">
                <button><a href="#">Contato</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button id="menu-button" onclick="menuShow()"><img class="icon" src="../../assets/img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Serviços</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre nós</a></li>
            </ul>

            <div class="login-button">
                <button><a href="#">Contato</a></button>
            </div>
        </div>
    </header>
    <?php 
        if(isset($_SESSION['msg'])){
          echo("
            <!-- MESAGEM SUCESSO  -->
            <div class=\"menssagem-sucesso\">
              <i class=\"ri-check-line icon-mensagem-sucesso\"></i>
              <p class=\"title-mensagem-sucesso\">Agendamento concluído</p>
              <span class=\"notificantion__progress-sucesso\"></span>
            </div>
            <!-- MESAGEM SUCESSO -->
          ");
          unset($_SESSION['msg']);
        }
      ?>
        <div id="container">
          <form id="form" onsubmit="showMensage()" method="post" action="./agendar.php">
            <h2 id="titulo">Agendamento de horário</h1>
            <p id="subtitulo">
              Preencha todas as informações para agendar o seu horário, e fique <br>
              tranquilo, seus dados estão seguros conosco.
            </p>
            <script src="../../assets/js/validar.js"></script>
            <div class="campo">
              <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome" required />
            </div>
    
            <div class="campo">
              <label for="telefone">Telefone</label>
              <input type="text" name="telefone" id="telefone" required />
            </div>
    
            <div class="campo">
              <label for="servico">Escolha o serviço</label>
              <select name="servico" id="">
                <option value="Cabelo">Cabelo</option>
                <option value="Barba">Barba</option>
                <option value="Cabelo e barba">Cabelo e Barba</option>
              </select>
            </div>
    
            <div class="campo">
              <label for="data">Selecione a data</label>
              <input type="date" name="data" id="data" required class="data" />
            </div>
    
            <button class="botao" type="submit" id="enviarForm"><strong>Agendar</strong></button>
          </form>
        </div>
    <script src="../../assets/js/app.js"></script>
</body>

</html>