<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css"href="../templates/css_bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../templates/styles/estilo.css">
        <link rel="shortcut icon" href="../templates/icones/favicon.ico" type="image/x-icon">
        <title>Perfil de Instituição</title>
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
                        <a class="nav-link" aria-current="page" href="home.php"><img class="icone-links" src="../templates/icones/home.png" alt=""></a>
                        <a class="nav-link" aria-current="page" href="perfil_doador.html"><img class="icone-links" src="../templates/icones/perfil.png" alt=""></a>  
                    </div>
                </div>
            </nav>
        </header>
        <main id="conteudo">
            <section class="row justify-content-start">
                <article class="col-4 esquerda00">
                    <img class="img4" src="../templates/imgs/roupas.jpg" alt=""><br/>
                    <p class="pb-0">Roupas</p>
                    <a class="sobre" href="#"><p class="espaco04">Endereço e horário para doar</p></a>
                    <button onclick="function_text()" id="funcao_btn" class="btn-doacao btn" type="submit">
                        Adicionar doação
                    </button> 
                </article>
                <article class="col-8 resumo">
                    <p class="espaco03">Resumo<p>
                    <p class="espaco03">Desde 2015, esta instituição, faz doação de todo tipo de roupa. <br/> Você pode colaborar doando camiseta, agasalho, lençol, roupas para animais, etc.</p>
                    <br>
                    <p class="espaco04">O que a instituição mais precisa no momento</p>
                    <ul class="lista pb-0">
                        <li>Meias</li>
                        <li>Roupas infantis</li>
                    </ul>
                </article>
            </section>
        </main>
        <?php include_once "footer.php"; ?>
        <script src="../templates/scripts/scripts.js"></script>
    </body>
</html>