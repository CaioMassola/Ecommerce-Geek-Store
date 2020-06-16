<?php
session_start();
include("banco.php");



$consulta = "select * from cadastro";
$con = $mysqli->query($consulta) or die($mysli->error);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <title>Dados dos Alunos</title>
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
                <th scope="col">RG</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Status Civil</th>
                <th scope="col">Nascimento</th>
                <th scope="col">Sexo</th>
                <th scope="col">Telefone</th>
                <th scope="col">Celular</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <?php
            while ($dado = $con->fetch_array()) {
            ?>
              <tbody>
                <tr>
                  <td><?php echo $dado['id'];   ?></td>
                  <td><?php echo $dado['nome'];   ?></td>
                  <td><?php echo $dado['sobrenome'];   ?></td>
                  <td><?php echo $dado['sts'];   ?></td>
                  <td><?php echo $dado['nasc'];   ?></td>
                  <td><?php echo $dado['sexo'];   ?></td>
                  <td><?php echo $dado['tel'];   ?></td>
                  <td><?php echo $dado['cel'];   ?></td>
                  <td><?php echo $dado['email'];   ?></td>
                </tr>
              </tbody>
            <?php } ?>
          </table>
          <a href="index.php?modulo=Projeto&acao=telaInicial">
            <div class="form-group col-md-4 col-md-offset-4">
              <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Tela Inicial</button>
            </div>
          </a>

          <a href="index.php?modulo=Projeto&acao=visualizarDados">
            <div class="form-group col-md-4 col-md-offset-4">
              <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Voltar</button>
            </div>
          </a>
        </div>

</script>
      
</body>

</html>