<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../fontawesome-free-5.15.2-web/js/all.min.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Professor | Aperfeiçoando O Meu Eu</title>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark" id="barraUp">
        <ul class="navbar-nav mr-auto">
            <a class="nav-link" href="prof.php"><li class="nav-item">
            <i class="fa fa-arrow-circle-left"></i></li></a>
        </ul>
        <ul class="navbar-nav text-light">
            Olá admin
        </ul>
    </header>
    <div id="fundo">
        <fieldset class="container">
            <form id="formulario" action="cadastrar-prof.php" method="post">
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
                <div class="text-center col-md-6 mb-4"> 
                    <input class="botao col-md-5" type="submit" value="Enviar" id="enviar"></input>
                    <input class="botao col-md-5" type="reset" id="limpar" value="Limpar"></input>
                </div>
            </form>
        </fieldset>
        <p class="error-validation template"></p>
    </div>
    <script src="../js/validacoes.js"></script>
</body>
</html>