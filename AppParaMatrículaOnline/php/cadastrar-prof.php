<?php
session_start();
include("conectar.php");
  $nome = mysqli_real_escape_string($conectar,trim($_POST['nome']));
  $MiddleName = mysqli_real_escape_string($conectar, trim($_POST['nomedomeio']));
  $sobrenome = mysqli_real_escape_string($conectar, trim($_POST['sobrenome']));
  $sexo = mysqli_real_escape_string($conectar, trim($_POST['sexo']));
  $nascimento = mysqli_real_escape_string($conectar, trim($_POST['datanasc']));
  $BI = mysqli_real_escape_string($conectar, trim($_POST['bi']));
  $nacionalidade = mysqli_real_escape_string($conectar, trim($_POST['nacionalidade']));
  $provincia = mysqli_real_escape_string($conectar, trim($_POST['provincia']));
  $municipio = mysqli_real_escape_string($conectar, trim($_POST['municipio']));
  $bairro = mysqli_real_escape_string($conectar, trim($_POST['bairro']));
  $telemovel1 = mysqli_real_escape_string($conectar, trim($_POST['telemovel']));
  $telemovel2 = mysqli_real_escape_string($conectar, trim($_POST['telemovel2']));
  $curso = mysqli_real_escape_string($conectar, trim($_POST['cursos']));
  //trim - função que retira o espaço do início e do fim da string
  $sql = "INSERT INTO professor (IdProf, Nome, NomeDoMeio, Sobrenome, Sexo, Nacionalidade, Data_Nascimento, BI, Provincia, Municipio, Bairro, Telemovel1, Telemovel2, IdCurso, IdTurma, Admissao) VALUES (default, '$nome', '$MiddleName', '$sobrenome', '$sexo', '$nacionalidade', '$nascimento','$BI', '$provincia', '$municipio', '$bairro', '$telemovel1', '$telemovel2', '$curso', '$curso', now())";
  
  if($conectar->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
    header("Location: prof-inscricao.php");
    echo "
    <script>
      alert('Matrícula feita com sucesso!');
    </script>
    ";
  } else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: prof-inscricao.php");
  }
  $conectar->close();
  ?>