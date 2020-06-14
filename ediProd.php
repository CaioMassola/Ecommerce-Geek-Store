<?php
session_start();
include_once("banco.php");

$idd = filter_input(INPUT_POST, 'idProd', FILTER_SANITIZE_NUMBER_INT);
$nomeProd = filter_input(INPUT_POST, 'nomeProd', FILTER_SANITIZE_STRING);
$tipoProd = filter_input(INPUT_POST, 'tipoProd', FILTER_SANITIZE_STRING);
$qtd = filter_input(INPUT_POST, 'quantProd', FILTER_SANITIZE_STRING);


$result_usuario = "UPDATE produto SET nomeProd='$nomeProd', tipoProd='$tipoProd', quantProd='$qtd'  WHERE idProd='$idd'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if (mysqli_query($mysqli, $result_usuario)) {
	header("Location: index.php?modulo=Projeto&acao=visualizarProdutos");
  } else {
	echo "Error updating record: " . mysqli_error($mysqli);
  }
?>