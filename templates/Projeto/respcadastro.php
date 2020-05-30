
 <?php
session_start();
require 'model/Handler.php';

$dados = Handler::arrayHandler();

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
                    <form method="POST" action="index.php?modulo=Projeto&acao=manutencao">
                        <div class="form-group">
                            <label>Seu cadastro foi realizado com sucesso! </label>
                        </div>
                        
                        <div class="form-group">
                            <label>Segue abaixo as informações: </label>
                            <p>Nome:
                            <?= $dados['nome']?>
                            </p>
                            <p>Sobrenome:
                            <?= $dados['sobrenome']?>
                            </p>
                            <p>Status:
                            <?= $dados['status']?>
                            </p>
                            <p>Data de nascimento:
                            <?= $dados['nasc']?>
                            </p>
                            <p>Sexo:
                            <?= $dados['sexo']?>
                            </p>
                            <p>Telefone:
                            <?= $dados['tel']?>
                            </p>
                            <p>Celular:
                            <?= $dados['cel']?>
                            </p>
                            <p>E-mail:
                            <?= $dados['email']?>
                            </p>

                        </div>


                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_back">Ir para a manutenção!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>