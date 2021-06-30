<?php
session_start();
if(!$_SESSION['email']) {
	header('Location: ../inicio.php');
	exit();
}