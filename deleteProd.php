<?php

session_start();
include_once("banco.php");
$id = filter_input(INPUT_GET, 'idProd', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM produto WHERE idProd='$id'";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
    if(mysqli_affected_rows($mysqli)){
		$_SESSION['msg'] = "<p style='color:green;'>Produto apagado com sucesso</p>";
        header("Location: index.php?modulo=Projeto&acao=visualizarProdutos");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Esse produto não foi apagado com sucesso</p>";
		header("Location: index.php?modulo=Projeto&acao=visualizarProdutos");
	}
}
else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um produto</p>";
	header("Location: index.php?modulo=Projeto&acao=visualizarProdutos");
}

?>
