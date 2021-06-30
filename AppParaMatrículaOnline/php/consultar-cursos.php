<?php
require_once 'conectar.php';
$sql= "SELECT curso.IdCurso, NomeCurso FROM curso join professor on curso.Idcurso=professor.IdCurso ORDER BY NomeCurso";
$sqlProf= "SELECT Nome, NomeDoMeio, Sobrenome FROM professor join curso on professor.Idcurso=curso.IdCurso";
$sqlCount= "SELECT count(*) as total FROM aluno";
$resultado = mysqli_query($conectar, $sql);
$resultado1 = mysqli_query($conectar, $sqlProf);
$resultado3 = mysqli_query($conectar, $sqlCount);
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
        <title>Cursos | Aperfeiçoando O Meu Eu</title>
    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-dark" id="barraUp">
                <ul class="navbar-nav mr-auto">
                    <a class="nav-link" href="consultar.php"><li class="nav-item">
                        <i class="fa fa-arrow-circle-left"></i></li></a>
                </ul>
                <ul class="navbar-nav text-light">
                    Cursos
                </ul>
        </header>
        <div class="container-fluid">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Professor</th>
                        <th scope="col">Quantidade de alunos</th>
                    </tr>
                </thead>
                <tbody>
                <?php $indice=0;
                        while($dados=$resultado ->fetch_array()){ $indice++;?> 
                    <tr>
                        <th><?php echo $indice ?></th>
                        <td><?php echo $dados["IdCurso"]; ?></td>
                        <td><?php echo $dados["NomeCurso"]; ?></td>
                        <?php while($dados1=$resultado1 ->fetch_array()){?>
                        <td><?php echo $dados1["Nome"] ." ". $dados1["NomeDoMeio"] . " ". $dados1["Sobrenome"]; ?></td>
                        <?php }?>
                        <?php while($dados2=$resultado3 ->fetch_array()){?>
                        <td><?php echo $dados2["total"]; ?></td>
                        <?php }?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
    </body>
</html>