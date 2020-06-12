<?php
 session_start();
?>
<html>

<head>
    <title>Camisas</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <link rel="stylesheet" href="tema.css">
  
</head>
<header class="flex-wrap">
    <div id="storeNameContainer" class="align-self-start d-inline-flex align-items-center">
        <a href="index.php?modulo=Projeto&acao=telaInicial"><img id="logo" href="" src="../img/logo.png" /></a>

        <a href="index.php?modulo=Projeto&acao=telaInicial">
            <h1 id="storeName" class="my-0">GEEK store</h1>
        </a>

    </div>
    <nav class="navbar my-0">
        <form class="form-inline justify-content-start flex-nowrap">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" id="search" list="historico">
            <button class="btn my-2 my-sm-0 btn-light" type="submit"><img href=""  src="../img/loupe-32px.png" /></button>

            <datalist id="historico">
                <option value="Camisas"></option>
                <option value="Blusas"></option>
                <option value="Canecas"></option>
                <option value="Acessórios"></option>             
        </form>
    </nav>
    <div id="rightContainer" class="d-inline-flex align-items-center justify-content-around ml-3 mr-5">
        <a href="index.php?modulo=Projeto&acao=sobreempresa"><button type="button" class="btn btn-link">
            <h4 class="px-1">Sobre a Empresa</h4>
        </button>
        </a>

        <a href="index.php?modulo=Projeto&acao=manutencao"><button type="button" class="btn btn-link">
            <h4 class="px-1">Manutenção de Usuário</h4>
        </button>
        </a>

    </div>
</header>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <ul class="navbar-nav align-items-center" id="navbar">
            <li class="nav-item">
                <a id="activeItem"class="nav-link" href="index.php?modulo=Projeto&acao=camisas">Camisetas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?modulo=Projeto&acao=blusas">Blusas</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="index.php?modulo=Projeto&acao=acessorios">Acessórios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?modulo=Projeto&acao=canecas">Canecas</a>
            </li>
        </ul>
    </nav>
    <div class="d-flex justify-content-around flex-wrap">
        <a id = "product" href = "index.php?modulo=Projeto&acao=camisaBatman"> <img id="logo" href="" src="../img/batca.jpg" />
            <p id = "name">Camiseta Batman</p>
            <p id = "price">R$ 49,90</p>
        </a>
        <a id = "product" href = "index.php?modulo=Projeto&acao=camisaFlash"><img id="logo" href="" src="../img/flashR.jfif" />
            <p id = "name">Camiseta Reverse Flash</p>
            <p id = "price">R$ 49,90</p></a>
        <a id = "product" href = "index.php?modulo=Projeto&acao=camisaAranha"><img id="logo" href="" src="../img/aranha.jpg" />
            <p id = "name">Camiseta Homem-Aranha</p>
            <p id = "price">R$ 49,90</p></a>
        <a id = "product" href = "index.php?modulo=Projeto&acao=camisaSauron"><img id="logo" href="" src="../img/Sauron.jfif" />
            <p id = "name">Camiseta Sauron</p>
            <p id = "price">R$ 49,90</p></a>
    </div>
</body>

</html>