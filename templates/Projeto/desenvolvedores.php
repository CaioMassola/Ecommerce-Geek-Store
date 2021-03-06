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
    <link rel="stylesheet" href="curriculo.css" />
   
</head>
<header class="flex-wrap">
    <div id="storeNameContainer" class="align-self-start d-inline-flex align-items-center">
        <a href="index.php?modulo=Projeto&acao=telaInicial"><img id="logo" href="" src="img/logo.png" /></a>

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
<p id="us">Nossa Equipe</p>
    <p id="desc">Clique sobre a imagem de cada integrante para conhecer melhor nosso time de desenvolvimento!</p>
    <div class="d-flex justify-content-around flex-wrap">
        <a id = "product" href = "index.php?modulo=Projeto&acao=natyDev"> <img id="logo" href="" src="img/naty.jfif" />
            <p id = "name">Natali Rocha</p>
        </a>
        <a id = "product" href = "index.php?modulo=Projeto&acao=lucasDev"> <img id="logo" href="" src="img/david.jfif" />
            <p id = "name">Lucas David</p>
        </a>
        <a id = "product" href = "index.php?modulo=Projeto&acao=caioDev"> <img id="logo" href="" src="img/caioimg.jfif" />
            <p id = "name">Caio Henrique</p>
        </a>
        <a id = "product" href = "index.php?modulo=Projeto&acao=mariDev"> <img id="logo" href="" src="img/marii.jfif" />
            <p id = "name">Marina Pelissari</p>
        </a>
        <a id = "product" href = "index.php?modulo=Projeto&acao=mathDev"> <img id="logo" href="" src="img/math.jfif" />
            <p id = "name">Matheus Perreche</p>
        </a>
    </div>

</body>
</html>