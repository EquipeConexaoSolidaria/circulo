<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"type="text/css"href="../templates/css_bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../templates/styles/estilo.css">
        <link rel="shortcut icon" href="../templates/icones/favicon.ico" type="image/x-icon">
		
		<title> Cadastro </title>
	</head>
	<body>
        <main id="conteudo">        
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
        <?php
            require_once("Doador.class.php");

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            
            $objetoDoador = new Doador($nome, $email, $senha);
            echo $objetoDoador->inserirDoador();
            echo " <a href='home.php'>Continue</a>";
            //header("Location: home.html");
?>
</main>
</body>
<?php include_once "footer.php"; ?>