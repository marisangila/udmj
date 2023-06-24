<?php
    // carregando dependencias
    include_once($_SERVER['DOCUMENT_ROOT'].'/a3/src/assets/php/conn.php');
    session_start();
    // ACESSOS SITE
    $qtd_acessos = mysqli_fetch_array($conn->query("SELECT acessos from config;")); // puxando qtd de acessos banco de dados
    $qtd_acessos = $qtd_acessos[0]; // qtd de acessos no formato string

    // lista de agendamentos
    $agendamentos = $conn->query("SELECT * from agendamento;");
if(!isset($_SESSION["userID"])){
  header('location: http://localhost/a3/src/auth/singin/');
}


    
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="./src/assets/img/icons_logos/favicon.ico"
      type="image/x-icon"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <main class="layout">
      <aside class="sidebar">
        <div class="content-sidebar">
          <div class="header-sidebar">
            <img src="../../assets/img/logo.png" alt="" width="180" />
          </div>
          <div class="menu">
            <div class="menu-principal">
              <div>
                <p class="title-small-sidebar">Menu Principal</p>
              </div>
              <a href="" class="nav-link active">
                <i class="ri-dashboard-line icon-nav-link"></i>
                <p class="title-nav-link">Dashboard</p>
              </a>
              <a href="" class="nav-link">
                <i class="ri-exchange-dollar-line icon-nav-link"></i>
                <p class="title-nav-link">Financeiro</p>
              </a>
              <a href="" class="nav-link">
                <i class="ri-team-line icon-nav-link"></i>
                <p class="title-nav-link">CRM</p>
              </a>
              <a href="" class="nav-link">
                <i class="ri-calendar-2-line icon-nav-link"></i>
                <p class="title-nav-link">Calendário</p>
              </a>
            </div>
            <div>
              <a href="" class="nav-link">
                <i class="ri-settings-3-line icon-nav-link"></i>
                <p class="title-nav-link">Configurações</p>
              </a>
              <a href="./logout.php" class="nav-link">
                <i class="ri-logout-box-line icon-nav-link"></i>
                <p class="title-nav-link">Sair</p>
              </a>
            </div>
          </div>
        </div>
      </aside>
      <section class="container-body">
        <header class="header-body">
          <div class="content-header-body">
            <p class="text-opacity">Dashboard</p>
            <h2 class="title">Bem vindo de volta, João !</h2>
            <p class="text-opacity">
              Aqui está todo o seu relatório, ultima atualização em 06/06/2023
            </p>
          </div>
        </header>
        <div class="content-body">
          <div class="content-cards-relatorio">
            <!-- CARD -->
            <div class="card-relatorio">
              <header class="header-card">
                <div class="back-icon">
                  <i class="ri-user-line"></i>
                </div>
                <div class="insights">
                  <i class="ri-arrow-right-up-line"></i>
                  <p>10,4%</p>
                </div>
              </header>
              <div class="body-card">
                <h2 class="total-leads">0</h2>
                <p class="text-opacity">Total de clientes</p>
              </div>
            </div>
            <!-- CARD -->
            <!-- CARD -->
            <div class="card-relatorio">
              <header class="header-card">
                <div class="back-icon">
                  <i class="ri-exchange-dollar-fill"></i>
                </div>
                <div class="insights">
                  <i class="ri-arrow-right-up-line"></i>
                  <p>16,4%</p>
                </div>
              </header>
              <div class="body-card">
                <h2 class="total-leads">R$ 24.990,00</h2>
                <p class="text-opacity">Total faturamento</p>
              </div>
            </div>
            <!-- CARD -->
            <!-- CARD -->
            <div class="card-relatorio">
              <header class="header-card">
                <div class="back-icon">
                  <i class="ri-global-line"></i>
                </div>
                <div class="insights">
                  <i class="ri-arrow-left-down-line negativo"></i>
                  <p class="negativo">1,5%</p>
                </div>
              </header>
              <div class="body-card">
                <h2 class="total-leads"><?php echo($qtd_acessos)?></h2>
                <p class="text-opacity">Total de visitas no site</p>
              </div>
            </div>
            <!-- CARD -->
          </div>
          <section class="content-tabela">
            <h2 class="title-tabela">Agendamentos mais recentes</h2>
            <table>
              <tr class="header-tabela">
                <th class="">Nome</th>
                <th class="">Data</th>
                <th class="">Telefone</th>
                <th class="">Serviço</th>
                <th class="">Ações</th>
              </tr>
              <script src="./app.js"></script>
              <!-- DESCRIÇÃO PLANILHA -->
              <?php
              // o banco de dados devolve um array (agendamentos) e o foreach 
              // percorre este array criando uma objeto (variavel agendamento) para cada
              // agendamento, assim podendo crir o front-end.
                    foreach($agendamentos as $agendamento){ 
                      echo("
                      <tr>
                
                <td class=\"dados-tabela\">{$agendamento['nomeCliente']}</td>
                <td class=\"dados-tabela\">{$agendamento['dtAgendamento']}</td>
                <td class=\"dados-tabela\">{$agendamento['telefone']}</td>
                <td class=\"dados-tabela\">{$agendamento['servico']}</td>
                <td class=\"dados-tabela\">
                  <div class=\"popup-ações\" id=\"popup\">
                    <a href=\"./excluir.php?id={$agendamento['id']}\" class=\"ação-popup\">
                      <i
                        class=\"ri-delete-bin-2-line\"
                        style=\"color: rgb(216, 15, 15)\"
                      ></i>
                      Excluir</a
                    >
                    <a href=\"./excluir.php?id={$agendamento['id']}\" class=\"ação-popup\">
                      <i
                        class=\"ri-check-line\"
                        style=\"color: rgb(15, 216, 15)\"
                      ></i>
                      Atendido</a
                    >
                  </div>
                  <button class=\"ação-tabela\" onclick=\"openPopup()\">
                    <i class=\"ri-more-2-line\"></i>
                  </button>
                </td>
              </tr>
                      
                      ");
                    }
                ?>
              <!-- DESCRIÇÃO PLANILHA -->
            </table>
          </section>
        </div>
      </section>
    </main>
  </body>
</html>
