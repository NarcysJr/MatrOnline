<?php
//session_start();
//include("conectar.php");
function authenticate($email, $senha){
	$senha1=md5($senha);
	$sql="SELECT IdUsuario FROM conta where Email='$email' AND Senha='$senha1'";
	$con = new conection();
	$res=$con->getResult($sql);
	if($res[0]['IdUsuario'>0]){
		return $res;
		header("Location:home.php");
	} else{
		header("Location:../inicio.php");
	}
}