<?php
session_start();
include("conectar.php");

$usuario = mysqli_real_escape_string($conectar,trim($_POST['usuario']));
$email = mysqli_real_escape_string($conectar,trim($_POST['email']));
$senha = mysqli_real_escape_string($conectar,trim(md5($_POST['password'])));
$sql="SELECT COUNT(*) as total FROM conta WHERE email='$email'";
$resultado = mysqli_query($conectar, $sql);
$row = mysqli_fetch_assoc($resultado);

  //trim - função que retira o espaço do início e do fim da string
  //md5 - função do php que criptografa a senha.
if($row['total'] == 1) {
	$_SESSION['email_existe'] = true;
	header('Location: usuario-cadastro.php');
	exit;
}

$sql1 = "INSERT INTO conta (IdUsuario, Usuario, Email, Senha, Data_Cadastro) VALUES (default, '$usuario', '$email', '$senha', NOW())";

if($conectar->query($sql1) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}
$conectar->close();

header('Location: usuario-cadastro.php');
exit;
?>


