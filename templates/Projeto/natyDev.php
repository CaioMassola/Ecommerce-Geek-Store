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
 <div id="onlyProduct" class="d-inline-flex justify-content-center align-items-center flex-wrap">
        <img id="logo"  style="height: 50px;"class="rounded" href="" src="img/naty.jfif" />
        <div id="productDetails" class="d-flex flex-column p-4">
            <h1>Natali Rocha</h1>
            <h4 class="pb-4">Estudante e estagiária na IBM Brasil</h4>
            <ul>
                <br/>
                <li>
                    Profissão: Estudante e estagiária em governança na IBM Brasil.
                </li>
                <br/>
                <li>
                    Contato: <a
                        href="https://www.linkedin.com/in/natali-aguiar-659854161/">Linkedin</a> ;
                </li>
                <br/>
                <li>
                    Instituição de ensino: <a href="https://portal.anhembi.br/">Anhembi Morumbi</a>
                </li>
                <br/>
                <li>
                    Conhecimentos técnicos: Javascript; Python; Node.js; MySQL; Service Now.
                </li>
                <br/>
                <li>
                    Cursos Realizados: Python (4Linux); Interfaces Web (USP); Desenvolvimento Fullstack (Digital House).
                </li>
                <br/>
                <li>
                    Habilidades: Desenvolvimento e governança.
                </li>
                <br/>
                <li>
                    Interesses: Viajar.
                </li>
                <br/>
                <li>
                    Hobbies: Leitura ; Ouvir música ; Cinema.
                </li>
            </ul>
        </div>
        <br>
        <div id="buttonsContainer" class="d-inline-flex justify-content-center align-items-center flex-wrap">
           
        </div>
    </div>

</body>
</html>