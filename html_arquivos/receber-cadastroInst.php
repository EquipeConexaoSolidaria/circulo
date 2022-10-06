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
                        <a class="nav-link" aria-current="page" href="perfil_inst.PHP"> <img class="icone-links" src="../templates/icones/perfil.png"></a>
                    </div>
                </div>
            </nav>
        </header>     
		<?php
            require_once("Instituicao.class.php");

            $nome = $_POST["nome"];
            $cnpj = $_POST["cnpj"];
            $senha = $_POST["senha"];
            $endereco = $_POST["endereco1"];
            $endereco2 = $_POST["endereco2"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $horario = $_POST["horario"];
            //$horario2 = $_POST["horario2"];
            //$horario3 = $_POST["horario3"];
            /* dias da semana */
            $stringDiasDaSemana = "";
            if(isset($_POST["domingo"])){
                $stringDiasDaSemana .=" domingo";
            }
            if(isset($_POST["segunda"])){
                $stringDiasDaSemana .=" segunda";
            }
            if(isset($_POST["terca"])){
                $stringDiasDaSemana .=" terca";
            }
            if(isset($_POST["quarta"])){
                $stringDiasDaSemana .=" quarta";
            }
            if(isset($_POST["quinta"])){
                $stringDiasDaSemana .=" quinta";
            }
            if(isset($_POST["sexta"])){
                $stringDiasDaSemana .=" sexta";
            }
            if(isset($_POST["sabado"])){
                $stringDiasDaSemana .=" sabado";
            }
        
            
            $objetoInstituicao = new Instituicao($nome, $cnpj, $senha, $endereco, $endereco2, $cidade, $estado, $stringDiasDaSemana, $horario);
            echo $objetoInstituicao->inserirInstituicao();
            echo " <a href='perfil_inst.php'>Visualize sua página</a>";
            //header("Location: home.html");
?>
</main>
</body>
<?php include_once "footer.php"; ?>
