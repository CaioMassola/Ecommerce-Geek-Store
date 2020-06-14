<?php
session_start();
include_once("banco.php");

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

                    registro: {
                        required: true,
                        // minlength: 11,
                        // maxlength: 11
                    },

                },
                messages: {
                    registro: "Informe seu RG!",

                },

                submitHandler: function(form) {
                    form.submit();
                }

            });
        });
    </script>

</head>

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
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Localizar</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="post" name="cadastro" action="index.php?modulo=Projeto&acao=visualizarDados" id="formCadastro">

                        <div class="form-group">
                            <label>RG</label>
                            <input type="number" class="form-control" name="registro" id="registro">
                        </div>
                                       
                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save">Avançar</button>
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