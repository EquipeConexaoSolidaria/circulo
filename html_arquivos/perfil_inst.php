<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type="text/css"href="../templates/css_bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../templates/styles/estilo.css">
        <link rel="shortcut icon" href="../templates/icones/favicon.ico" type="image/x-icon">

        <title>Perfil</title>
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
                    </div>
                </div>
            </nav>
        </header>
        <main id="conteudo" >
            <section class="row justify-content-start">
                <article class="col-4 esquerda00">
                    <img class="rounded-circle img4" src="../templates/imgs/canil.jpg" alt=""><br/>
                    <p class="pb-0">Canil</p>
                    <p class="pb-0"><a class="sobre" href="#">Endereço e horário para doar</a></p>
                    <p class="pb-0"><a class="sobre" href="notificacoes.html">Doações</a></p>
                </article>
                <!-- 
                <p class="espaco04">O que sua instituição mais precisa no momento:</p>
                    <form id="formItens"  action="receber-itens-doacao.php" method="POST">
				        <div class="col-6">
				        	<label for="nome-item" class="form-label m-0">
				        		Nome
				        	</label>
				        	<input type="text" class="form-control " name="nome" id="nome-item"  required>
				        </div>
				        <div class="col-md-6">
				        	<label for="desc" class="form-label m-0">
				        	Descrição
				        	</label>
				        	<input type="text" class="form-control" name="desc" id="desc" required>
				        </div>
				        <div class="col-md-5">
				        	<label for="qtdd" class="form-label m-0">
				        		Quantidade
				        	</label>
				        	<input type="number" class="form-control" name="qtdd" id="qtdd" required>
				        </div>
                        <div class="col-md-5">
				        	<label for="unidade" class="form-label m-0">
				        		Unidade
				        	</label>
				        	<input type="text" class="form-control" name="unidade" id="unidade" required>
				        </div>
				        <button class="botao btn-primary">Concluído</button>
			        </form>
                </article>  -->
                <article class="col-8">
                   <article class="resumo col-8">
                       <p class="espaco03">Resumo<p>
                       <p class="espaco03">texto</p>
                       <br>
                       <p class="espaco04">O que a instituição mais precisa no momento</p>
                       <ul class="lista pb-0">
                           <li>Item</li>
                           <li>...</li>
                       </ul>
                   </article>
                    <section>
                        <button onclick="" id="funcao_btn" class="btn-doacao btn" type="submit">
                            Editar
                        </button>
                        <button onclick="" id="funcao_btn" class="btn-doacao btn" type="submit">
                            Salvar Alteração
                        </button>
                    </section>
                </article>
            </section>
        </main>
        <footer>
            <section class="row pb-0">
                <article id="informacoes" class="col-5 mx-auto">
                    <p>Fundadoras:</p>
                    <img class="rounded-circle fundadoras" src="../templates/imgs/ana-100.jpg" alt="">
                    <p class="pb-0"> Ana Paula Rosa, Estudante do Instituto Federal de Educação, Ciência e Tecnologia (IFSP) em Bragança Paulista, SP.</p>
                    <img class="rounded-circle fundadoras" src="../templates/imgs/tais-100.jpg" alt="">
                    <p class="pb-0">Taís Barbosa Rodrigues, Estudante do Instituto Federal de Educação, Ciência e Tecnologia (IFSP) em Bragança Paulista, SP. </p>
                    <img class="rounded-circle fundadoras" src="../templates/imgs/talita-100.jpg" alt="">
                    <p class="pb-0">Talita de Paula Cypriano de Souza, Professora do Instituto Federal de Educação, Ciência e tecnologia (IFSP) em Bragança Paulista, SP. </p>
                </article>
                <article id="comunicacao" class="col-5 mx-auto">
                    <p>Comunicação:</p>
                    <p><img src="../templates/icones/email.png" alt=""> <a class="text-white" href="mailto:conexaosolidariaa@gmail.com">conexaosolidariaa@gmail.com</a></p>
                    <p><img src="../templates/icones/instagram.png" alt=""> <a class="text-white" href="https://www.instagram.com/conexao_solidariaa/">@conexao_solidariaa</a></p>
                </article>
                <p class="text-sm-center pb-0">Desenvolvido por <a class="text-white" href="https://github.com/AnaPaulaXY">Ana Paula Rosa </a> e <a class="text-white" href="https://github.com/BarbosaRodrigues">Tais Barbosa Rodrigues</a>.</p>
                <p class="text-sm-center pb-0">Orientado por <a class="text-white" href="https://github.com/tpcyprianos">Talita de Paula Cypriano de Souza</a>. 2022</p>
            </section>
        </footer>
        <script src="../templates/scripts/scripts.js"></script>
    </body>
</html>
