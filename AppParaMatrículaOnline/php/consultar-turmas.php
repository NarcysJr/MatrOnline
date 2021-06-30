<?php
require_once 'conectar.php';
$sql= "SELECT turma.IdTurma, curso.NomeCurso, professor.Nome, professor.NomeDoMeio, professor.Sobrenome FROM turma join frequenta on turma.IdTurma=frequenta.IdTurma join curso on frequenta.IdCurso=curso.IdCurso join professor on turma.IdProf=professor.IdProf ORDER BY turma.Ano, curso.NomeCurso";
$sqlAluno= "SELECT count(*) as Qnt_aluno FROM aluno";
$resultado = mysqli_query($conectar, $sql);
$resultado1 = mysqli_query($conectar, $sql1);
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
        <title>Turmas | Aperfeiçoando O Meu Eu</title>
    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-dark" id="barraUp">
                <ul class="navbar-nav mr-auto">
                    <a class="nav-link" href="consultar.php"><li class="nav-item">
                        <i class="fa fa-arrow-circle-left"></i></li></a>
                </ul>
                <ul class="navbar-nav text-light">
                    Turmas
                </ul>
        </header>
        <div class="container-fluid">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Professor</th>
                        <th scope="col">Quantidade de alunos</th>
                    </tr>
                </thead>
                <tbody>
                <?php $indice=0;
                        while($dados=$resultado ->fetch_array()){ $indice++;?> 
                    <tr>
                        <th><?php echo $indice ?></th>
                        <td><?php echo $dados["IdTurma"]; ?></td>
                        <td><?php echo $dados["curso.NomeCurso"]; ?></td>
                        <td><?php echo $dados["professor.Nome"]. " ". $dados["professor.NomeDoMeio"]. " ". $dados["professor.Sobrenome"]; ?></td>\
                        <td><?php echo $resultado1; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>   
    </body>
</html>