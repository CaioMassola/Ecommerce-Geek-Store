<?php
session_start();

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
                    email: {
                        required: true,
                    },
                    nome: {
                        required: true,
                        minWords: 1,
                        maxWords: 1
                    },
                    sobrenome: {
                        required: true,
                        minWords: 1,
                        maxWords: 1
                    },

                    nasc: {
                        required: true
                    },

                    senha: {
                        required: true,
                    },

                    senha2: {
                        required: true,
                        equalTo: "#senha",
                    },

                    civil: {
                        required: true,
                    },

                    tel: {
                        required: true,
                        // minlength: 10,
                        // maxlength: 10
                    },

                    cel: {
                        required: true,
                        // minlength: 11,
                        // maxlength: 11
                    },

                    id: {
                        required: true,
                        // minlength: 11,
                        // maxlength: 11
                    },

                },
                messages: {
                    email: "Informe um email válido!",
                    nome: "Informe seu primeiro nome!",
                    sobrenome: "Informe seu sobrenome!",
                    nasc: "Informe a data de nascimento!",
                    senha: "Informe uma senha válida!",
                    senha2: "As senhas não se correspondem!",
                    cel: "Informe o celular!",
                    tel: "Informe o telefone!",
                    civil: "Informe o estado Civil!",
                    id: "Informe O ID!",

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
            <div class="panel-heading">Cadastro</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="post" name="cadastro" action="index.php?modulo=Projeto&acao=respcadastro" id="formCadastro">

                        <div class="form-group">
                            <label>ID</label>
                            <input type="number" class="form-control" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>

                        <div class="form-group">
                            <label>Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome" id="sobrenome">
                        </div>

                        <div class="form-check">
                            <label>Informe seu Estado Civil</label><br>
                            <input class="form-check-input" type="radio" name="sts" id="casado" value="Casado" >
                            <label class="form-check-label" for="casado">
                                -----Casado
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sts" id="solteiro" value="solteiro">
                            <label class="form-check-label" for="solteiro">
                                -----Solteiro
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sts" id="viuvo" value="Viuvo">
                            <label class="form-check-label" for="viuvo">
                                -----Viúvo
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sts" id="divo" value="Divo">
                            <label class="form-check-label" for="divo">
                                -----Divorsiado
                            </label>
                        </div>
                        <br>

                        <div class="form-group">
                            <label>Data Nascimento</label>
                            <input type="date" class="form-control" name="nasc" id="nasc">
                        </div>


                        <div class="form-check">
                            <label>Informe seu Sexo</label><br>
                            <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
                            <label class="form-check-label" for="masculino">
                                -----Masculino
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino">
                            <label class="form-check-label" for="feminino">
                                -----Feminino
                            </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Telefone Residencial</label>
                            <input type="number" class="form-control" name="tel" id="tel">
                        </div>

                        <div class="form-group">
                            <label>Celular</label>
                            <input type="number" class="form-control" name="cel" id="cel">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>

                        <div class="form-group">
                            <label>Repetir Senha</label>
                            <input type="password" class="form-control" name="senha2" id="senha2">
                        </div>

                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save">Cadastrar</button>
                        </div>
                    </form>
                    <a href="index.php?modulo=Projeto&acao=login">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-default btn-lg btn-block" id="btn_senha">Já sou cadastrado</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>