
 <?php
session_start();

$idd = $_POST['id'];
$nomee = $_POST['nome'];
$sobrenomee = $_POST['sobrenome'];
$stss = $_POST['sts'];
$nascc = $_POST['nasc'];
$sexoo = $_POST['sexo'];
$tell = $_POST['tel'];
$cell = $_POST['cel'];
$emaill = $_POST['email'];
$senhaa = $_POST['senha'];

$strcon =  mysqli_connect('localhost','root','', 'cadastro') or die ('Erro ao conectar');
$dadosInsert ="INSERT into cadastro(id,nome,sobrenome,sts,nasc,sexo,tel,cel,email,senha) values";
// $dadosInsert ="INSERT into cadastro(id) values";
$dadosInsert .=  "($idd,'$nomee','$sobrenomee','$stss','$nascc','$sexoo',$tell,$cell,'$emaill','$senhaa')";
// $dadosInsert .=  "($idd)";
// mysqli_query($strcon, $dadosInsert) or die ('Erro ao conectar2');
// mysqli_close($strcon);

if ($strcon->query($dadosInsert) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $dadosInsert . "<br>" . $strcon->error;
  }

  $strcon->close();

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Cadastrado</title>
</head>

<body>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-success">
            <div class="panel-heading">Sucesso</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" action="index.php?modulo=Projeto&acao=telainicial">
                        <div class="form-group">
                            <label>Seu cadastro foi realizado com sucesso! </label>
                        </div>                       
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_back">Ir para a Loja!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>