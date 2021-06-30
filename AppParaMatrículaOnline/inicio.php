<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="fontawesome-free-5.15.2-web/js/all.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Aperfeiçoando O Meu Eu</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav ml-auto">
                <a class="nav-link active" href="inicio.php"><li class="nav-item">Início</li></a>
                    <a class="nav-link" href="cursos.php"><li class="nav-item">Cursos</li></a>
                    <a class="nav-link" href="matricula.php"><li class="nav-item">Inscreva-se</li></a>
            </ul>
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link" data-toggle="modal" data-target="#sessao" href="#">
                        <li class="nav-item"> <i class="fas fa-sign-out-alt"></i> </li>
                    </a>
                </ul>
            </div>
        </nav>
        <header>
            <img class="img-fluid imagemHeader container-fluid" src="imagens/header.png" alt="">
        </header>
        <div class="container-fluid">
            <div class="row" id="corpo">
                <main class="col-md-12">
                    <h3 class="ml-auto mr-auto">Bem vindo a página oficial do centro Aperfeiçoando O Meu Eu!</h3>
                    <h5 id="h-inicio" class="ml-auto mr-auto mt-4"> <q>A sua felicidade depende muito de si, <br> e nós ajudamos-lhe a cuidar da sua saúde emocional.</q> </h5>
                    <div class="row">
                        <p class="col-md-5 mr-auto p-inicio">
                            <q>Identificar problemas e cuidar da solução, nós ajudamos-lhe a cuidar da sua saúde emocional e financeira.</q>
                        </p>
                        <p class="ml-auto mr-1 p-inicio">
                            Focados no desencolvimento pessoal!
                        </p>
                    </div>
                </main>

            </div>
        </div>
    <footer class="footer container-fluid">
        <strong>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                    <span class="contact-title"></span> <i class="fa fa-envelope"></i> onildepaulo@gmail.com
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="contact-title"></span> Calemba 2 - Vila Kiaxi, Luanda-Angola
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                    <i class="far fa-clock"></i>
                    <span class="contact-title">Horário:</span> 8:00-18:00
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                    <i class="fab fa-whatsapp"></i>
                    <span class="contact-title"></span> (+244) 928507891
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 contact-box">
                    <ul>
                        <li>Inteligencia emocional</li>
                        <li>Eduação Financeira</li>
                        <li>Contabilidade</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <p>
                        Fundado em Dezembro de 2020.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <p>
                        Motivações: 
                        <ul>
                            <li>Ensinar</li>
                            <li>Inspirar</li>
                        </ul>
                    </p>
                </div>
            </div>
        </strong>
    </footer>

    <!--Modal-->
    <div class="modal fade" id="sessao" tabindex="-1" role="dialog">
        <div class="modal-dialog bg-light" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-info">Iniciar Sessão</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>
                            <i class="far fa-times-circle text-info"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="php/login.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="formodal form-control col-md-5 container" placeholder="Email" name="email" required autofocus>
                            <input type="password" class="formodal form-control col-md-5 mt-2 container" placeholder="Senha" name="senha" required maxlength="8">
                        </div>
                        <div class="form-group text-center">
                                <button type="submit" class="btn btn-info col-md-3 mt-2">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <h6 class="mr-auto ml-auto text-info">Aperfeiçoando o Meu Eu.</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>