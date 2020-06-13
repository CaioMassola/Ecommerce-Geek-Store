<?php
 $conexao = mysqli_connect("localhost","root");
//  $db = mysqli_select_db($conexao, "aluno");

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";

$mysqli = mysqli_connect($host, $usuario,$senha, $bd);

if($mysqli-> connect_errno)
 echo "Falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
 mysqli_close($conexao);
?>