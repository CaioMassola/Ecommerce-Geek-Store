<?php

session_start();
include_once("banco.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM cadastro WHERE id='$id'";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
    if(mysqli_affected_rows($mysqli)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
        header("Location: index.php?modulo=Projeto&acao=visualizarDados");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: index.php?modulo=Projeto&acao=visualizarDados");
	}
}
else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: index.php?modulo=Projeto&acao=visualizarDados");
}

?>
