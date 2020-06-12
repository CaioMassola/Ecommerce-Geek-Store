<?php
 session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Caneca</title>

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
    <nav class="navbar my-0">
        <form class="form-inline justify-content-start flex-nowrap">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" id="search" list="historico">
            <button class="btn my-2 my-sm-0 btn-light" type="submit"><img href=""
                    src="../img/loupe-32px.png" /></button>

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
    <div id="onlyProduct" class="d-inline-flex justify-content-center align-items-center flex-wrap">
        <img id="logo" class="rounded" href="" src="../../img/canecab.jpg" />
        <div id="productDetails" class="d-flex flex-column p-4">
            <h1>R$ 34,90</h1>
            <h4 class="pb-4">Caneca Batman</h4>
            <h5 id="basicDetails">As canecas da GEEK store são de Cerâmica de alta qualidade e possuem
                qualidade Premium, tornando uma ótima alternativa criativa e original de
                presente.</h5>
            <h5>Cor Preta / Temas DC Comics, Filmes, Gamer</h5>
        </div>
        <br>
        <div id="buttonsContainer" class="d-inline-flex justify-content-center align-items-center flex-wrap">
        </div>
    </div>
</body>

</html>