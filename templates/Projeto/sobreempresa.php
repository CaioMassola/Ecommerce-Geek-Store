<?php

session_start();
?>
<html>

<head>
    <title>Sobre Empresa</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <link rel="stylesheet" href="tema.css" />
   
</head>
<header class="flex-wrap">
    <div id="storeNameContainer" class="align-self-start d-inline-flex align-items-center">
        <a href="index.php?modulo=Projeto&acao=telaInicial"><img id="logo" href="" src="../img/logo.png" /></a>

        <a href="index.php?modulo=Projeto&acao=telaInicial">
            <h1 id="storeName" class="my-0">GEEK store</h1>
        </a>

    </div>

    <div id="rightContainer" class="d-inline-flex align-items-center justify-content-around ml-3 mr-5">
        <a href="index.php?modulo=Projeto&acao=sobreempresa"><button type="button" class="btn btn-link">
            <h4 class="px-1">Sobre a Empresa</h4>
        </button>
        </a>

        <a href="index.php?modulo=Projeto&acao=visualizarDados"><button type="button" class="btn btn-link">
            <h4 class="px-1">Manutenção de Usuário</h4>
        </button>
        </a>

        <a href="index.php?modulo=Projeto&acao=manuProd"><button type="button" class="btn btn-link">
            <h4 class="px-1">Manutenção de Produtos</h4>
        </button>
        </a>

        <!-- <a href="logout.php"><button type="button" class="btn btn-link">
            <h4 class="px-1">Sair</h4>
        </button>
        </a> -->

    </div>
</header>


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
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 mb-3">
        <ul class="navbar-nav align-items-center" id="navbar">
            <li class="nav-item">
                <a class="nav-link" href="index.php?modulo=Projeto&acao=camisas">Camisetas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?modulo=Projeto&acao=blusas">Blusas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?modulo=Projeto&acao=acessorios">Acessórios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?modulo=Projeto&acao=canecas">Canecas</a>
            </li>
        </ul>
    </nav>

    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Missão</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" >
                        <div class="form-group">
                            <label>A principal missão da empresa é fornecer produtos exclusivos e de qualidade para os amantes do mundo geek e garantir uma excelente experiência.
                            </label>                 
                        </div>                   
                    </form>                                                                  
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Visão</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" >
                        <div class="form-group">
                            <label>Consolidar a atuação da empresa e tornar-se um e-commerce referência no mercado online de produtos geek com um amplo catálogo de opções.

                            </label>                 
                        </div>                   
                    </form>                                                                  
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Valores</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" >
                        <div class="form-group">
                            <label>Qualidade nos produtos, ética, transparência, segurança para os clientes e preço justo. 
                            </label>                 
                        </div>                   
                    </form>                                                                  
                </div>
            </div>
        </div>
    </div>
    <a href="index.php?modulo=Projeto&acao=desenvolvedores">
        <div class="form-group col-md-4 col-md-offset-4">
            <button  class="btn btn-dark btn-lg btn-block" id="btn_senha" > Ver Desenvolvedores</button>
        </div>
    </a> 
</body>

</html>