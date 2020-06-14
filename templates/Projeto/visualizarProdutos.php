<?php
session_start();
include("banco.php");

$consulta = "select * from produto";
$con = $mysqli->query($consulta) or die($mysli->error);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <title>Dados dos Pedidos de Manutenção</title>
</head>
<style>
        body {
      background-color: white;
}

.panel {
    margin-top: 50px;
}

a:link {
    text-decoration: none;
}

#sair {
    margin-top: 20px;
}

@media screen and (max-width: 991px) {
    .btn_save {
        min-width: 100vw;
       
    }
}

.table{
 margin-top: 50px;
 /* margin-left: 200px; */

}
    </style>

<body>
<?php


if(isset($_SESSION["usercod"])){
    echo "<center> Você está logado! <a href='logout.php'>Sair</a></center>";
}

else {
    header("Location: index.php?modulo=Projeto&acao=login");
    exit;
}
?>
        <div class="col-md-8 col-md-offset-2">
          <table class="table">
            <thead class="thead-dark">
              <tr>
              <th scope="col">ID</th>
                <th scope="col">Tipo do Produto</th>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Qtd Produtos</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <?php
            while ($dado = $con->fetch_array()) {


            ?>
              <tbody>
                <tr>
                <td><?php echo $dado['idProd'];   ?></td>
                  <td><?php echo $dado['tipoProd'];   ?></td>
                  <td><?php echo $dado['nomeProd'];   ?></td>
                  <td><?php echo $dado['quantProd'];   ?></td>
                  <td><?php 
                  echo "<a href='editarProd.php?idProd=" . $dado['idProd'] . "'>Editar</a><br>";
                  ?>
                  </td>
                  <td>
      
                    <a href="javascript: if(confirm('Tem certeza que deseja deletar o produto <?php echo $dado['nomeProd']; ?>?'))
			              location.href='deleteProd.php?idProd=<?php echo $dado['idProd']; ?>';" style="color: red">Deletar</a>
                  </td>
                </tr>
              </tbody>
            <?php } ?>
          </table>
          <a href="index.php?modulo=Projeto&acao=telaInicial">
            <div class="form-group col-md-4 col-md-offset-4">
              <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Tela Inicial</button>
            </div>
          </a>
        </div>

</script>
      
</body>

</html>