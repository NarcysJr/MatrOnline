<?php
session_start();
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
        <title>Home-Admin | Aperfeiçoando O Meu Eu</title>
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
        <main class="container-fluid">
            <section class="row">
                <nav class="navbar-dark col-md-2 bg-info" id="menu">
                    <ul class="navbar-nav" id="elementos">
                        <a class="adminbutton nav-link active" href="home.php">
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
                        <a class="adminbutton nav-link" href="prof.php">
                            <i class="fas fa-user-tie fa-3x mt-4"></i>
                            <li class="nav-item">Professores</li>
                        </a>
                    </ul>
                </nav>
                <div class="col-md-10" id="conteudo">
                    <div class="col-md-5 mr-auto ml-auto" id="welcome">
                        <strong><h3 class="text-center">Seja bem vindo ao aplicativo.</h3></strong>
                        <p class="text-center">Utilize o menu ao lado para efetuar a tarefa desejada.</p>
                    </div>
                </div>
            </section>
        </main>
        
    </body>
</html>