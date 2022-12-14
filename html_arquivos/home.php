<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css"href="../templates/css_bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../templates/styles/estilo.css">
        <link rel="shortcut icon" href="../templates/icones/favicon.ico" type="image/x-icon">

        <title>Home</title>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-light bg-transparent">
                <div class="container-fluid">
                    <a href="../index.html" class="navbar-brand">
                        <img id="logo" src="../templates/imgs/circulosolidario.png" alt="Círculo Solidário"> Círculo Solidário
                    </a>
                    <div class="d-flex">
                        <a class="nav-link" aria-current="page" href="#comunicacao">Contato</a>
                        <a class="nav-link" aria-current="page" href="#informacoes">Mais informações</a>
                        <a class="nav-link" aria-current="page" href="perfil_doador.html"><img class="icone-links" src="../templates/icones/perfil.png" alt=""></a>  
                    </div>
                </div>
            </nav>
        </header>
        <main id="conteudo">
            <h1 class="text-center modal-title pt-3 fs-3">
                Busque por instituição
            </h1>  <br>
            <article class="container">
                <div class="row justify-content-start">
                    <div class="col-5 pt-1">
                        <label for="pesquisa">Pesquisar:</label>
                        <input type="text" class="pesquisa"></input>
                        <input type="submit" value="buscar">
                    </div>
                    <div class="col-4 pb-0 pt-2">
                        <a href="mapa.html" class="dropdown-item"><img class="img5" src="../templates/icones/mapa1.png" alt="">  Pesquisar no mapa</a>
                    </div>
                </div>
            </article>
            
            <article class="row justify-content-start">
                <div class="col-3">
                    <a href="canil.php">
                        <button class="form-control">
                            <img src="../templates/imgs/canil.jpg" class="img-thumbnail img7" alt=""> <br> Canil
                        </button>
                    </a>
                </div>
                <div class="col-3">
                    <a href="roupas.php">
                        <button class="form-control">
                            <img src="../templates/imgs/roupas.jpg" class="img-thumbnail img7" alt=""> <br> Roupas
                        </button>
                    </a>
                </div>
            </article>
        </main>
        <?php include_once "footer.php"; ?>
    </body>
</html>