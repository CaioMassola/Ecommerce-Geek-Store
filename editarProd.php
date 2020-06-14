<?php
session_start();
include_once("banco.php");

$iddProd = filter_input(INPUT_GET, 'idProd', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM produto WHERE idProd = '$iddProd'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <link rel="stylesheet" href="login.css">

    <style>
        .error {
            color: red;
        }
    </style>

    <script>
        $(document).ready(function() {
            jQuery.validator.setDefaults({
                debug: true,
                success: "valid"
            });
            $("#formCadastro").validate({
                rules: {
                    nomeProd: {
                        required: true,
                    },
                    tipoProd: {
                        required: true,
                    
                    },
                    quantProd: {
                        required: true,
                    },
                
                    

                },
                messages: {
                    nomeProd: "Informe o nome do produto!",
                    tipoProd: "Informe o tipo do produto!",
                    quantProd: "Informe a quantidade do produto!",
                    

                },

                submitHandler: function(form) {
                    form.submit();
                }

            });
        });
    </script>

</head>

<body>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Manutenção de produtos</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="post" name="cadastro" action="ediProd.php" id="formCadastro">

                    <div class="form-group">
                            <input type="hidden" class="form-control" name="idProd" id="idProd" value="<?php echo $row_usuario['idProd']; ?>">
                    </div>

                        
                        <div class="form-group">
                            <label>Tipo do produto</label>
                            <input type="text" class="form-control" name="tipoProd" id="tipoProd" value="<?php echo $row_usuario['tipoProd']; ?>">
                        </div> 

                        <div class="form-group">
                            <label>Nome do produto</label>
                            <input type="text" class="form-control" name="nomeProd" id="nomeProd" value="<?php echo $row_usuario['nomeProd']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Quantidade</label>
                            <input type="number" class="form-control" name="quantProd" id="quantProd" value="<?php echo $row_usuario['quantProd']; ?>">
                        </div>                   

                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save" name="btn-cadastrar">Editar Produto</button>
                        </div>
                    </form>
                    <a href="index.php?modulo=Projeto&acao=telaInicial">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-default btn-lg btn-block" id="btn_senha">Cancelar</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>