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
        $("#formManutencao").validate({
            rules: {
                nomeProduto: {
                    required: true,
                },

                nomeProduto2: {
                    required: true,
                },

                nomeProduto3: {
                    required: true,
                },

                nomeProduto4: {
                    required: true,
                },
                
                nomeProduto5: {
                    required: true,
                },

            },
            messages: {
                nomeProduto: "Informe o produto!",
                nomeProduto2: "Informe o produto!",
                nomeProduto3: "Informe o produto!",
                nomeProduto4: "Informe o produto!",
                nomeProduto5: "Informe o produto!",

            },

            submitHandler: function(form) {
                form.submit();
            }

        });
    });
</script>
<body>
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
                    <form method="post" name="cadastro" action="index.php?modulo=Projeto&acao=listar" id="formManutencao">
                        <div class="form-group">
                        <div class="form-group">
                            <label>Nome do novo Produto 1 </label>
                            <input type="text" class="form-control" name="nomeProduto" id="nomeProduto">
                        </div>

                        <div class="form-group">
                            <label>Nome do novo Produto 2 </label>
                            <input type="text" class="form-control" name="nomeProduto2" id="nomeProduto2">
                        </div>

                        <div class="form-group">
                            <label>Nome do novo Produto 3</label>
                            <input type="text" class="form-control" name="nomeProduto3" id="nomeProduto3">
                        </div>

                        <div class="form-group">
                            <label>Nome do novo Produto 4</label>
                            <input type="text" class="form-control" name="nomeProduto4" id="nomeProduto4">
                        </div>

                        <div class="form-group">
                            <label>Nome do novo Produto 5</label>
                            <input type="text" class="form-control" name="nomeProduto5" id="nomeProduto5">
                        </div>
                        <br>
                        <br>
                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save">Listar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>