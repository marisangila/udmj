<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar bg-success justify-content-start">
        <?php 
            session_start();
            if($_SESSION["eh_adm"] == 1)
            {
                echo '<a class="navbar-brand" href="cadastrar.php">Cadastrar Usuário</a>';
            }
        ?>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-centers">
            <div class="col-md-auto">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Código</th>
                        <th>E-mail</th>
                        <th>Administrador</th>
                        <th colspan="2">Ações</th>
                    </thead>
                    <tbody>
                        <?php
                            include_once("../source/listar.php");
                            if(!empty($usuarios)){
                                foreach($usuarios as $usuario){
                                    echo '  <tr>
                                                <td>'.$usuario["pk_usuario"].'</td>
                                                <td>'.$usuario["email_usuario"].'</td>
                                                <td>'.$usuario["eh_adm_usuario"].'</td>
                                                <td><a href="../source/excluir.php?usuario='.$usuario["pk_usuario"].'">Excluir</a></td>
                                                <td><a href="editar.php?usuario='.$usuario["pk_usuario"].'">Editar</a></td>
                                            </tr>';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>