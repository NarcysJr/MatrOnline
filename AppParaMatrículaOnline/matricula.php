<?php

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
    <title>Matrícula | Aperfeiçoando O Meu Eu</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link" href="inicio.php"><li class="nav-item">Início</li></a>
                    <a class="nav-link" href="cursos.php"><li class="nav-item">Cursos</li></a>
                    <a class="nav-link active" href="matricula.php"><li class="nav-item">Inscreva-se</li></a>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link" data-toggle="modal" data-target="#sessao" href="#">
                        <li class="nav-item"> <i class="fas fa-sign-out-alt"></i> </li>
                    </a>                    
                </ul>
            </div>
    </nav>
    <div id="fundo">
        <fieldset class="container">
        <!--<legend>Campos obrigatórios <strong class="obr">*</strong></legend>-->
            <form id="formulario" action="php/cadastrar-aluno.php" method="post">
                <div class="form-row">
                    <div class="form-group col-xs-3 col-sm-6 col-md-3 ">
                        <label  for="nome" id="nomelabel">Nome próprio</label>
                        <input class="campos form-control validar" type="text" id="nome" required maxlength="40" name="nome" minlength="2" autofocus>
                    </div>
                    <div class="form-group col-xs-3 col-sm-6 col-md-3">
                        <label  for="nomedomeio" id="nomedomeiolabel">Nome do meio</label>
                        <input class="campos form-control" type="text" id="nomedomeio" required maxlength="80" minlength="2" name="nomedomeio">  
                    </div>
                    <div class="form-group col-xs-3 col-sm-6 col-md-3">
                        <label for="sobrenome" id="sobrenomelabel">Sobrenome</label>
                        <input class="campos form-control validar" type="text" id="sobrenome" required maxlength="40" name="sobrenome" minlength="2" >
                    </div>
                </div> 
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label class="mr-3" for="masculino">M</label> 
                    <label for="feminino">F</label> <br>
                    <input class="mr-3" type="radio" id="masculino" name="sexo" value="M" checked>
                    <input type="radio" id="feminino" name="sexo" value="F">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-xs-4 col-sm-6 col-md-4 col-lg-3">
                    <label for="datanasc">Data de nascimento</label>
                    <input class="campos form-control validar" type="date" id="datanasc" name="datanasc" required>
                </div>
                <div class="form-group col-xs-4 col-sm-6 col-md-4 col-lg-3">
                    <label for="BI">Nº B.I.</label>
                    <input class="campos form-control validar" type="text" id="bi" name="bi" required minlength="14" maxlength="14">
                </div>
                <div class="form-group col-xs-4 col-sm-6 col-md-3">
                    <label for="nacionalidade" id="naclabel">Nacionalidade</label>
                    <input class="campos form-control validar" type="text" id="nacionalidade" name="nacionalidade" required>
                </div>
            </div>

            <div class="form-group mt-3">
                <label for=provincia>Residência:</label>
                <div class="form-row">
                    <div class="col-xs-3 col-sm-4 col-md-2">
                        <select class="campos form-control" name="provincia" id="provincia" required>
                            <option value="Bengo">Bengo</option>
                            <option value="Benguela">Benguela</option>
                            <option value="Bie">Bié</option>
                            <option value="Cabinda">Cabinda</option>
                            <option value="Cuando">Cuando-Cubango</option>
                            <option value="Cunene">Cunene</option>
                            <option value="Cuanzan">Cuanza-Norte</option>
                            <option value="Cuanzas">Cuanza-Sul</option>
                            <option value="Huambo">Huambo</option>
                            <option value="Huila">Huíla</option>
                            <option value="Moxico">Moxico</option>
                            <option value="Luanda">Luanda</option>
                            <option value="Lundan">Lunda-Norte</option>
                            <option value="Lundas">Lunda-Sul</option>
                            <option value="Malanje">Malanje</option>
                            <option value="Namibe">Namibe</option>
                            <option value="Uige">Uíge</option>
                            <option value="Zaire">Zaire</option>
                        </select>
                    </div>
                    <select class="campos form-control col-xs-2 col-sm-3 col-md-2" name="municipio" id="municipio" required>
                        <option value="Ambriz">Ambriz</option>
                        <option value="Bula-atumba">Bula Atumba</option>
                        <option value="Dande">Dande</option>
                        <option value="Dembos">Dembos</option>
                        <option value="Nambuangongo">Nambuangongo</option>
                        <option value="Pango-aluquém">Pango Aluquém</option>
                        <option value="Caxito">Caxito</option>
                    </select>
                    <div class="col-xs-3 col-sm-6 col-md-2">
                        <input class="campos form-control validar" type="text" id="bairro" name="bairro" placeholder="Bairro" required>
                    </div>
                </div>
            </div>
                <div class="form-row mt-3">
                    <div class="form-group col-xs-3 col-sm-6 col-md-3">
                        <label id="tellabel"class="mt-1" for="tel">Telemóvel:</label>
                        <input class= "campos form-control validar" type="tel" id="tel1" name="telemovel" required minlength="9" maxlength="9">
                    </div>
                    <div class="form-group col-xs-3 col-sm-6 col-md-3">
                        <label id="tellabel2"class="mt-1" for="tel2">Alternativo (opcional):</label>
                        <input class= "campos form-control" type="tel" id="tel2" name="telemovel2"  maxlength="9">
                    </div>
                </div>
                <div class="form-group mb-5">
                    <label id="cursoslabel" class="mt-1" for="cursos">Curso:</label>
                    <select class="campos form-control col-xs-3 col-sm-4 col-md-3" name="cursos" id="cursos" required>
                        <option value="1">Inteligência Emocional</option>
                        <option value="2">Contabilidade</option>
                        <option value="3">Educação Financeira</option>
                    </select>
                </div>
                <div class="form-group row col-sm-6 col-md-12 mt-5 text-info strong">
                    <p class="text-dark mr-1">Formato de aula:</p>
                    <strong id="form-aula">
                        <label id="onlinelabel" for="online">Online</label>
                        <input type="radio" id="online" name="formato" value="Online" checked>
                        <label id="presenciallabel" for="presencial">Presencial</label>
                        <input type="radio" id="presencial" name="formato" value="Presencial" disabled >
                        <label id="domiciliolabel" for="domicilio">Domicílio</label>
                        <input type="radio" id="domicilio" name="formato" value="Domicílio" disabled>
                    </strong>
                </div>
                <div class="text-center col-md-6 mb-4"> 
                    <input class="botao col-md-5" type="submit" value="Enviar" id="enviar"></input>
                    <input class="botao col-md-5" type="reset" id="limpar" value="Limpar"></input>
                </div>
            </form>
        </fieldset>
        <p class="error-validation template"></p>
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
                    <form action="php/home.php">
                        <div class="form-group">
                            <input type="email" class="formodal form-control col-md-5 container" placeholder="Email" name="email" required autofocus>
                            <input type="password" class="formodal form-control col-md-5 mt-2 container" placeholder="Senha" required maxlength="8">
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
    <script src="js/validacoes.js"></script>
</body>
</html>