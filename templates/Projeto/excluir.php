
 <?php
session_start();
require 'model/Handler.php';

$excluir = Handler::arrayExcluir();

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
            <div class="panel-heading">Sucesso</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" action="index.php?modulo=Projeto&acao=manutencao">
                        <div class="form-group">
                            <label>Produtos Excluidos! </label>
                        </div>
                        <div class="form-group">
                            <label>Segue abaixo as informações: </label>
                            <p> Nome do Produto 1:
                            <?php
                             unset($excluir['nomeProduto']);
                             ?>
                            </p>

                        </div>

                        <div class="form-group">
                           
                            <p> Nome do Produto 2:
                            <?php
                             unset($excluir['nomeProduto2']);
                             ?>
                            </p>

                        </div>

                        <div class="form-group">
                            
                            <p> Nome do Produto 3:
                            <?php
                             unset($excluir['nomeProduto3']);
                             ?>
                            </p>

                        </div>

                        <div class="form-group">
                           
                            <p> Nome do Produto 4:
                            <?php
                             unset($excluir['nomeProduto4']);
                             ?>
                            </p>

                        </div>

                        <div class="form-group">
                            
                            <p> Nome do Produto 5:
                            <?php
                             unset($excluir['nomeProduto5']);
                             ?>
                            </p>

                        </div>

                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_back">Voltar Para Escolha dos Produtos!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>