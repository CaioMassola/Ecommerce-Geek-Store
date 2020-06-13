<?php
session_start();
include_once("banco.php");

$idd = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nomee = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenomee = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$status = filter_input(INPUT_POST, 'sts', FILTER_SANITIZE_STRING);
$nascc = filter_input(INPUT_POST, 'nasc', FILTER_SANITIZE_STRING);
$sexoo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
$cel = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_NUMBER_INT);
$emaill = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senhaa = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//  echo  $nome, $idi, $curs, $ema;

$result_usuario = "UPDATE cadastro SET nome='$nomee', sobrenome='$sobrenomee', sts='$status', nasc='$nascc', sexo='$sexoo', tel='$tel' , cel='$cel', email='$emaill', senha='$senhaa'  WHERE id='$idd'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);


// if(mysqli_affected_rows($mysqli)){
// 	header("Location: index.php?modulo=Atividade&acao=visualizarAlunos");
// }else{
// 	echo "Erro ao Alterar";
// }
// 
if (mysqli_query($mysqli, $result_usuario)) {
	header("Location: index.php?modulo=Projeto&acao=visualizarDados");
  } else {
	echo "Error updating record: " . mysqli_error($mysqli);
  }
?>