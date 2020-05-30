
 <?php
session_start();
require 'model/Handler.php';

$dados = Handler::arrayProd();

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
            <div class="panel-heading">Dados Produto</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" action="">
                        
                        <div class="form-group">
                            <label>Segue abaixo as informações: </label>
                            <p> Nome do Produto 1:
                            <?= $dados['nomeProduto']?>
                            </p>

                        </div>

                        <div class="form-group">
                           
                            <p> Nome do Produto 2:
                            <?= $dados['nomeProduto2']?>
                            </p>

                        </div>

                        <div class="form-group">
                            
                            <p> Nome do Produto 3:
                            <?= $dados['nomeProduto3']?>
                            </p>

                        </div>

                        <div class="form-group">
                           
                            <p> Nome do Produto 4:
                            <?= $dados['nomeProduto4']?>
                            </p>

                        </div>

                        <div class="form-group">
                            
                            <p> Nome do Produto 5:
                            <?= $dados['nomeProduto5']?>
                            </p>

                        </div>
                    </form>
                    <a href="index.php?modulo=Projeto&acao=alterar">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_senha">Alterar Produto</button>
                        </div>
                    </a>

                    <a href="index.php?modulo=Projeto&acao=excluir">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_senha">Excluir Produto</button>
                        </div>
                    </a>

                    <a href="index.php?modulo=Projeto&acao=inserir">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_senha">Adicionar Produto</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>