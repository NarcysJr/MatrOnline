<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conta</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../fontawesome-free-5.15.2-web/js/all.min.js"></script>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-dark" id="barraUp">
        <ul class="navbar-nav mr-auto">
            <a class="nav-link" href="usuario.php"><li class="nav-item">
            <i class="fa fa-arrow-circle-left"></i></li></a>
        </ul>
        <ul class="navbar-nav text-light">
            Olá admin
        </ul>
    </header>
    <section class="container">
        <form action="cadastrar-usuario.php" method="POST" class="col-xs-7 col-md-6" id="cadastro">
        <?php
            if($_SESSION['status_cadastro'] = true){
                //echo '<script>alert("Cadastro efetuado com sucesso")</script>';
            }
        ?>
        <?php
            if($_SESSION['email_existe'] = true){
                //echo '<script>alert("Este email já existe")</script>';
            }
            ?>  
            <input type="text" class="form-control col-xs-7 col-sm-6 cadastro-campos" name="usuario" placeholder="Usuario" minlength="4" required autofocus>
            <input type="email" class="form-control col-xs-7 col-sm-6 cadastro-campos" name="email" placeholder="seuemail@gmail.com" required>
            <input type="password" class="form-control col-xs-7 col-sm-6 cadastro-campos" name="password" placeholder="Senha" required minlength="8" maxlength="8">
            <div class="col-md-6 ml-auto mr-auto">
                <input class="botao" type="submit" value="Cadastrar" id="enviar"></input>
                <input class="botao" type="reset" id="limpar" value="Limpar"></input>
            </div>
        </form>
    </section>
</body>

</html>