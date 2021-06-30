<?php
require_once 'conectar.php';
$sql= "SELECT * FROM professor ORDER BY Nome";
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
        <title>Professores | Aperfeiçoando O Meu Eu</title>
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
        <div class="">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Nascimento</th>
                        <th scope="col">Nacionalidade</th>
                        <th scope="col">B.I</th>
                        <th scope="col">Telemóvel</th>
                        <th scope="col">Residência</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Admissão</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $indice=0;
                        while($dados=$resultado ->fetch_array()){ $indice++;?> 
                    <tr>
                        <th><?php echo $indice ?></th>
                        <td><?php echo $dados["IdProf"]; ?></td>
                        <td><?php echo $dados["Nome"] ." " . $dados["NomeDoMeio"] ." " . $dados["Sobrenome"]; ?></td>
                        <td><?php echo $dados["Sexo"]; ?></td>
                        <td><?php echo $dados["Data_Nascimento"]; ?></td>
                        <td><?php echo $dados["Nacionalidade"]; ?></td>
                        <td><?php echo $dados["BI"]; ?></td>
                        <td><?php echo $dados["Telemovel1"] . ", " . $dados["Telemovel2"]; ?></td>
                        <td><?php echo $dados["Provincia"] . ", " . $dados["Municipio"] . ", " . $dados["Bairro"]; ?></td>
                        <td><?php echo $dados["IdCurso"]; ?></td>
                        <td><?php echo $dados["Admissao"]; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>   
    </body>
</html>