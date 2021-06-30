<?php
require_once 'conectar.php';
?>

<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/jquery.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../fontawesome-free-5.15.2-web/js/all.min.js"></script>
        <link rel="stylesheet" href="../css/admin.css">
        <title>Professores | Aperfeiçoando O Meu Eu</title>
    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-dark" id="barraUp">
                <ul class="navbar-nav mr-auto">
                    <a class="nav-link" href="logout.php"><li class="nav-item">
                        <i class="fa fa-arrow-circle-left"></i>Sair</li></a>
                </ul>
                <ul class="navbar-nav text-light">
                    Olá admin
                </ul>
        </header>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar-dark fixed col-md-2 bg-info" id="menu">
                        <ul class="navbar-nav">
                            <a class="adminbutton nav-link" href="home.php">
                                <i class="fas fa-home fa-3x mt-4"></i>
                                <li class="nav-item">Home</li>
                            </a>
                            <a class="adminbutton nav-link" href="consultar.php">
                                <i class="fas fa-database fa-3x mt-4"></i>
                                <li class="nav-item">Consultar</li>
                            </a>
                            <a class="adminbutton nav-link" href="usuario.php">
                                <i class="fas fa-user-plus fa-3x mt-4"></i>
                                <li class="nav-item">Usuários</li>
                            </a>
                            <a class="adminbutton nav-link active" href="prof.php">
                                <i class="fas fa-user-tie fa-3x mt-4"></i>
                                <li class="nav-item">Professores</li>
                            </a>
                        </ul>
                </nav>
                <section class="col-md-10 col-xs-12 ml-auto" id="conteudo">
                    <div class="row" id="consul">
                        <a class="consultas col-xs-9 col-sm-7 col-md-3  text-light nav-link" id="ver" href="prof-ver.php">
                            <i class="fas fa-users fa-3x mt-5"></i>
                            <li class="nav-item">Ver</li>
                        </a>
                        <a class="consultas col-xs-9 col-sm-7 col-md-3  text-light nav-link" id="cadastrar" href="prof-inscricao.php">
                            <i class="fas fa-user-plus fa-3x mt-5"></i>
                            <li class="nav-item">Cadastrar</li>
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>