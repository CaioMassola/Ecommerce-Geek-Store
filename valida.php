<?php
 session_start();
?>

<meta charset="UTF-8">
<font face="arial" color="black" size="4">

<script type="text/javascript">

function loginsuccess(){
    setTimeout("window.location='index.php?modulo=Projeto&acao=telaInicial'",3000);
}

function loginfailed(){
    setTimeout("window.location='index.php?modulo=Projeto&acao=cadastro'",3000);
}
</script>

<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";

$conecta = mysqli_connect($host, $usuario, $senha, $bd) or die ('Erro ao conectar');

mysqli_select_db($conecta, $bd) or print(mysqli_error($conecta));

$email=$_POST["email"];
$senha = $_POST["senha"];
$salvar = $email;

$_SESSION['salvar'] = $salvar;
$sql = "SELECT * from cadastro where email='$email' and senha='$senha'";

$result = mysqli_query($conecta, $sql) or die ('Erro ao conectar2');
$row=mysqli_num_rows($result);

if($row>0){
    while($consulta = mysqli_fetch_array($result)){
  $_SESSION["usercod"]=$consulta['id'];}
  echo "<center> Você foi autenticado com sucesso! Aguarde um instante...</center>";
  echo "<script>loginsuccess()</script>";}
  else {
    echo "<center> Você não foi autenticado com sucesso! Aguarde um instante...</center>";
    echo "<script>loginfailed()</script>";}
    mysqli_close($conecta);


?>

  </font>
  </meta>
