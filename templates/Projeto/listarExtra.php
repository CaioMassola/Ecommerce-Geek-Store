
 <?php
session_start();
require 'model/Handler.php';

$dados = Handler::arrayListar();

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
<a href="index.php?modulo=Projeto&acao=login">
        <div class="form-group col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Logout</button>
        </div>
    </a>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Dados do Produto</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" action="index.php?modulo=Projeto&acao=inserir">
                        
                        <div class="form-group">
                            <label>Segue abaixo a informação do Produto Extra: </label>

                        <div class="form-group">
                            
                            <p> Nome do Produto Extra:
                            <?= $dados['nomeProdutoExtra']?>
                            </p>

                        </div>

                        <div class="form-group col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save">Alterar Extra</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>