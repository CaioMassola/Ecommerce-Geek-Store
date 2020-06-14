<?php
 session_start();
?>

<meta charset="UTF-8">
<font face="arial" color="black" size="4">

<script type="text/javascript">

function loginsuccess(){
    setTimeout("window.location='index.php?modulo=Projeto&acao=login'",3000);
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


$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sts = $_POST['sts'];
$nasc = $_POST['nasc'];
$sexo = $_POST['sexo'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * from cadastro where email='$email' or id='$id'";

$result = mysqli_query($conecta, $sql) or die ('Erro ao conectar2');
$row=mysqli_num_rows($result);

if($row>0){
    while($consulta = mysqli_fetch_array($result)){
  $_SESSION["usercod"]=$consulta['id'];}
  echo "<center> ID ou Email já cadastrado! Aguarde um instante...</center>";
  echo "<script>loginfailed()</script>";}
  else {
    $sql2 ="INSERT into cadastro(id,nome,sobrenome,sts,nasc,sexo,tel,cel,email,senha) values";
    $sql2 .=  "($id,'$nome','$sobrenome','$sts','$nasc','$sexo',$tel,$cel,'$email','$senha')";
    if ($conecta->query($sql2) === TRUE) {
        echo "";
      } else {
        echo "Error: " . $sql2 . "<br>" . $conecta->error;
      }
    echo "<center> Você foi cadastrado com sucesso! Aguarde um instante...</center>";
    echo "<script>loginsuccess()</script>";}
    mysqli_close($conecta);
  
?>

  </font>
  </meta>