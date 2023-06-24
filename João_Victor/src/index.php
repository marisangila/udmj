<?php
    // carregando dependencias
    include_once($_SERVER['DOCUMENT_ROOT'].'/a3/src/assets/php/conn.php');
    session_start();
    $servicos = $conn->query("SELECT * from servicos;");
    
    $qtd_acessos = mysqli_fetch_array($conn->query("SELECT acessos from config;")); // puxando qtd de acessos banco de dados
    $nv_acesso = $qtd_acessos[0] + 1; // somando +1 na qtd de acessos
    $acesso = $conn->query("UPDATE `config` SET `acessos` = '{$nv_acesso}' WHERE `config`.`id` = 1;"); // atualizando valor de acessos
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BarberShop</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>

<body>
    <div class="background">
        <header>
            <nav class="nav-bar">
                <div class="logo">
                    <h1><a href="#">
                        <img src="./assets/img/logo.png" alt="" width="200px" height="80px">
                    </a></h1>
                </div>

                <div class="nav-list">
                    <ul>
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Sobre nós</a>
                        </li>
                    </ul>
                </div>

                <div class="login-button">
                    <button><a href="#">Contato</a></button>
                </div>

                <div class="mobile-menu-icon">
                    <button id="menu-button" onclick="menuShow()">
                        <img class="icon" src="assets/img/menu_white_36dp.svg" alt="" />
                    </button>
                </div>
            </nav>
            <div class="mobile-menu">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a  href="#" class="nav-link">Serviços</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre nós</a></li>
                </ul>

                <div class="login-button">
                    <button><a href="#">Contato</a></button>
                </div>
            </div>
        </header>

        <section>
            <div class="home-text">
                <h1 class="text-h1">DEFINE YOUR <br><span>STYLE</span></h1>
                <p class="descricao-h1">
                    Encontre a expressão perfeita para sua personalidade na nossa
                    barbearia. Aqui, reconhecemos que cada indivíduo é único e
                    valorizamos a oportunidade de ajudá-lo a definir o seu estilo
                    distintivo.
                </p>
                <button class="btn-agendar"><a href="./pages/agendamento/">Agendar horário</a></button>
            </div>
        </section>
        <section>
            <div class="information">
                <div class="contact-info">
                    <div class="phone">
                        <i class="fa-regular fa-phone"></i>
                        <p>(11)98932-5634<span><br>Número comercial,<br>não atenderemos fora<br>do hórario</span></p>
                    </div>

                    <div class="location">
                        <i class="fa-regular fa-phone"></i>
                        <p>1308, Avenida JK<br><span>Avenida JK, Bairro America<br>Joinville 89223-012</span></p>
                    </div>

                    <div class="days">
                        <i class="fa-regular fa-phone"></i>
                        <p>Dias úteis: 8:00 - 19:00<br><span>Sábado: 8:00 - 12:00,<br>Domingo e segunda fechado</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section>
        <div class="servico">
            <h2>Confira os serviços<br>que oferecemos</h2>
            <div class="servico-cliente">
                <div class="detalhe-cliente">
                    <i class="fa-regular fa-phone"></i>
                    <p>+ 2 mil clientes</p>
                </div>

                <div class="nota-cliente">
                    <i class="fa-regular fa-phone"></i>
                    <p>4,9/5,0</p>
                </div>
            </div>
        </div>

        <div class="container-second">
            <div class="barba">
                <p class="nome-combo">BARBA</p>
                <p class="descricao-combo">Somente corte da barba, incluso<br>lavagem pós corte</p>
                <p class="valor-combo">R$ 30,00</p>

                <button class="botao-agendar"><a href="#">Agendar horário</a></button>
            </div>


            <div class="assinatura">
                <p class="nome-combo">ASSINATURA</p>
                <p class="descricao1-combo">Corte seu cabelo quantas vezes quiser,<br>com uma mensalidade no valor de:
                </p>
                <p class="valor1-combo">R$ 59,90</p>

                <button class="botao-agendar"><a href="#">Saber mais</a></button>
            </div>


            <div class="cabelo">
                <p class="nome-combo">CABELO</p>
                <p class="descricao-combo">Corte seu cabelo quantas vezes quiser,<br>com uma mensalidade no valor de</p>
                <p class="valor-combo">R$ 45,00</p>

                <button class="botao-agendar"><a href="#">Agendar horário</a></button>
            </div>
        </div>
    </section>

    <section class="home">
        <div class="home-img">
            <img class="img-home" src="./assets/img/app.png" alt="cell-phone" />
        </div>
        <div class="text-home">
            <h4 class="text-h4">Baixe o nosso app gratuito</h4>
            <p class="descricao-h4">
                Para ficar por dentro de todas as novidades e também fazer
                agendamento de horário, baixe nosso app para facilitar o seu dia a dia
            </p>
            <div class="home-download">
                <a href="#"><img src="./assets/img/donwload.png" alt=""></a>
                <a href="#"><img src="./assets/img/download.png" alt=""></a>
            </div>
        </div>
    </section>
<footer>
    <div class="footer">
        <h5> <img src="./assets/img/logo.png" alt="" width="100px" height="40px"></h5>
        <p>@2023 - Barbearia - Todos os direitos reservados</p>
    </div>
</footer>

    <script src="./assets/js/app.js"></script>
</body>

</html>