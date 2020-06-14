<?php
 session_start();
?>

<meta charset="UTF-8">
<font face="arial" color="black" size="4">

<script type="text/javascript">

function pedidosuccess(){
    setTimeout("window.location='index.php?modulo=Projeto&acao=visualizarProdutos'",3000);
}

function pedidofailed(){
    setTimeout("window.location='index.php?modulo=Projeto&acao=manuProd'",3000);
}
</script>

<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";

$conecta = mysqli_connect($host, $usuario, $senha, $bd) or die ('Erro ao conectar');

mysqli_select_db($conecta, $bd) or print(mysqli_error($conecta));


$id = $_POST['idProd'];
$nome = $_POST['nomeProd'];
$tipo = $_POST['tipoProd'];
$qt = $_POST['quantProd'];


$sql = "SELECT * from produto where idProd='$id'" ;

$result = mysqli_query($conecta, $sql) or die ('Erro ao conectar2');
$row=mysqli_num_rows($result);

if($row>0){
    while($consulta = mysqli_fetch_array($result)){
  $_SESSION["usercod"]=$consulta['idProd'];}
  echo "<center> ID do produto já cadastrado! Aguarde um instante...</center>";
  echo "<script>pedidofailed()</script>";}
  else {
    $sql2 ="INSERT into produto(idProd,nomeProd,tipoProd,quantProd) values";
    $sql2 .=  "($id,'$nome','$tipo','$qt')";
    if ($conecta->query($sql2) === TRUE) {
        echo "";
      } else {
        echo "Error: " . $sql2 . "<br>" . $conecta->error;
      }
    echo "<center> Pedido efetuado com sucesso! Aguarde um instante...</center>";
    echo "<script>pedidosuccess()</script>";}
    mysqli_close($conecta);
  
?>

  </font>
  </meta>