<?php
session_start();
include_once("banco.php");

$ra = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cadastro WHERE id = '$ra'";
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
                    }

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
                    civil: "Informe o estado Civil!"

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
                    <form method="post" name="cadastro" action="editar.php" id="formCadastro">

                    <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row_usuario['id']; ?>">
                    </div>

                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $row_usuario['nome']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="Masculino" value="<?php echo $row_usuario['sobrenome']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Status Civil</label>
                            <input type="text" class="form-control" name="sts" id="status" list="stslist" value="<?php echo $row_usuario['sts']; ?>">
                            <datalist id="stslist">
                            <option value="Solteiro"></option>
                            <option value="Casado"></option>
                            <option value="Viúvo"></option>
                            <option value="Divorciado"></option>
                           
                        </div>

                        <div class="form-group">
                            <label>Data Nascimento</label>
                            <input type="date" class="form-control" name="nasc" id="nasc" value="<?php echo $row_usuario['nasc']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Sexo</label>
                            <input type="text" class="form-control" name="sexo" id="sexo" list="sexolist" value="<?php echo $row_usuario['sexo']; ?>">
                            <datalist id="sexolist">
                            <option value="Masculino"></option>
                            <option value="Feminino"></option>
                           
                        </div>

                        <br>
                        <div class="form-group">
                            <label>Telefone Residencial</label>
                            <input type="number" class="form-control" name="tel" id="tel" value="<?php echo $row_usuario['tel']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Celular</label>
                            <input type="number" class="form-control" name="cel" id="cel" value="<?php echo $row_usuario['cel']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $row_usuario['email']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" value="<?php echo $row_usuario['senha']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Repetir Senha</label>
                            <input type="password" class="form-control" name="senha2" id="senha2">
                        </div>

                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-success btn-lg btn-block" id="btn_save">Salvar</button>
                        </div>
                    </form>
                    <a href="index.php?modulo=Projeto&acao=telaInicial">
                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_senha">Cancelar</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>