<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'matriculas');

$conectar = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME) or die('Não foi possível se conectar ao banco de dados');
mysqli_set_charset($conectar,"utf8");
?>