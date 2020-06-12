<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script type="text/javascript" src="js/jquery.maskedinput-1.16.0.pack.js"></script>
    <title>Login</title>
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
        $("#formLogin").validate({
            rules: {
                email: {
                    required: true,
                },

                senha: {
                    required: true,
                },

            },
            messages: {
                email: "Informe um email válido!",
                senha: "Informe uma senha válida!",

            },

            submitHandler: function(form) {
                form.submit();
            }

        });
    });
</script>

<body>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form name="login" action="index.php?modulo=Projeto&acao=telaInicial" method="post" id="formLogin">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>

                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save">Entrar
                            </button>
                        </div>

                    </form>
                    <a href="index.php?modulo=Projeto&acao=cadastro">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-default btn-lg btn-block" id="btn_senha">Não possui cadastro?</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>