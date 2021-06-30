<?php
require_once 'conectar.php';
$sql= "SELECT * FROM conta ORDER BY Usuario";
$resultado = mysqli_query($conectar, $sql);
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
        <title>Usuários | Aperfeiçoando O Meu Eu</title>
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
        <div class="container-fluid">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nome de usuário</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Senha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $indice=0;
                        while($dados=$resultado ->fetch_array()){ $indice++;?> 
                    <tr>
                        <th><?php echo $indice ?></th>
                        <td><?php echo $dados["IdUsuario"]; ?></td>
                        <td><?php echo $dados["Usuario"]; ?></td>
                        <td><?php echo $dados["Email"]; ?></td>
                        <td><?php echo $dados["Senha"]; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>   
    </body>
</html>