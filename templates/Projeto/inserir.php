<?php
session_start();
?> 

<!DOCTYPE html>
<html>

<head>
    <title>Tela Manutenção</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.16.0.pack.js"></script>
</head>

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
        $("#formExtra").validate({
            rules: {
                nomeProdutoExtra: {
                    required: true,
                },
            },
            messages: {
                nomeProdutoExtra: "Informe o produto extra!",
            },

            submitHandler: function(form) {
                form.submit();
            }

        });
    });
</script>
<body>

<!-- <?php
// if(isset($_POST['acao']) && isset($_POST['acao'])== 'submit')
// $nomeProdutoExtra = trim($_POST['nomeProdutoExtra']);
// if(empty($nomeProdutoExtra)){
//     echo "<script>alert('Informe o produto')</script>";
// }
?> -->
    <a href="index.php?modulo=Projeto&acao=login">
        <div class="form-group col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Logout</button>
        </div>
    </a>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Manutenção</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="post" name="cadastro" action="index.php?modulo=Projeto&acao=listarExtra" id="formExtra">
                        <div class="form-group">
                        <div class="form-group">
                            <label>Nome do novo Produto Extra: </label>
                            <input type="text" class="form-control" name="nomeProdutoExtra" id="nomeProdutoExtra">
                        </div>

                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save">Listar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>