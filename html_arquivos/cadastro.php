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
		<?php include_once "header.php"; ?>

		<main id="conteudo">
			<h1 id=titulo> Cadastre-se </h1>
			<label for="formdoador">
				<input onclick="formdoador()" id="formdoador" type="radio" name="cadastro" value="Represento Doador">
				Represento Doador</label>
			<form id="formularioD"  action="receber-cadastroDoador.php" method="POST">
				<div class="col-md-6">
					<label for="nome-doador" class="form-label">
						Nome
					</label>
					<input type="text" class="form-control" name="nome" id="nome-doador"  required>
				</div>
				<div class="col-md-6">
					<label for="email-doador" class="form-label">
					Email
					</label>
					<input type="text" class="form-control" name="email" id="email-doador" required>
				</div>
				<div class="col-md-5">
					<label for="senha-doador" class="form-label">
						Senha
					</label>
					<input type="password" class="form-control" name="senha" id="senha-doador" required>
				</div>
				<button class="botao btn-primary">Concluído</button>
			</form>
			<div class="mb-3">
				<label>
					<input onclick="forminstituicao()" type="radio" name="cadastro" value="Represento Instituição">
					Represento Instituição
				</label>
			</div>

			<form id="formularioI" action="receber-cadastroInst.php" method="POST">
				<div class="col-md-6">
				<label for="nome-instituicao" class="form-label">
					Nome
				</label>
				<input type="text" class="form-control" name="nome" id="nome-instituicao" required>
				</div>
				<div class="col-md-6">
					<label for="cnpj" class="form-label">
						CNPJ
					</label>
					<input type="text" class="form-control" name="cnpj" id="cnpj" onkeypress="$(this).mask('00.000.000/0000-00')" placeholder="00.000.000/0000-00" required>
				</div>
				<div class="col-md-5">
					<label for="senha" class="form-label">
						Senha
					</label>
					<input type="password" class="form-control" name="senha" id="senha" required>
				</div>
				<div class="col-12">
					<label for="inputAddress" class="form-label">Endereço</label>
					<input type="text" class="form-control" name="endereco1" id="inputAddress" placeholder="nº, Rua, Bairro">
				</div>
				<div class="col-12">
					<label for="inputAddress2" class="form-label">Endereço 2</label>
					<input type="text" class="form-control" name="endereco2" id="inputAddress2" placeholder="Apartamento, estúdio, ou andar">
				</div>
				<div class="col-md-6">
					<label for="inputCity" class="form-label">Cidade</label>
					<input type="text" class="form-control" name="cidade" id="inputCity">
				</div>
				<div class="col-md-4">
					<label for="inputState" class="form-label">Estado</label>
					<select id="inputState" name="estado" class="form-select">
						<option selected>Escolher...</option>
						<option>Acre</option>
						<option>Alagoas</option>
						<option>Amapá</option>
						<option>Amazonas</option>
						<option>Bahia</option>
						<option>Ceará</option>
						<option>Espírito Santo</option>
						<option>Goiás</option>
						<option>Maranhão</option>
						<option>Mato Grosso</option>
						<option>Mato Grosso do Sul</option>
						<option>Minas Gerais</option>
						<option>Pará</option>
						<option>Paraíba</option>
						<option>Paraná</option>
						<option>Pernanbuco</option>
						<option>Piauí</option>
						<option>Rio de Janeiro</option>
						<option>Rio Grande do Norte</option>
						<option>Rio Grande do Sul</option>
						<option>Rondônia</option>
						<option>Roraima</option>
						<option>Santa Catarina</option>
						<option>São Paulo</option>
						<option>Sergipe</option>
						<option>Tocantins</option>
						<option>Distrito Federal</option>
					</select>
				</div>
				<div class="mt-5">
					<label for="appt"><p class="fs-5 pb-0">Dias da semana e horário que a instituição recebe doação:</p></label>
					<div name="dias" class="">
							<label>
								<input type="checkbox" class="dia-semana" name="domingo">
								Domingo
							</label>
							<label>
								<input type="checkbox" class="dia-semana ms-3" name="segunda">
								Segunda
							</label>
							<label>
								<input type="checkbox" class="dia-semana ms-3" name="terca">
								Terça
							</label>
							<label>
								<input type="checkbox" class="dia-semana ms-3" name="quarta">
								Quarta
							</label>
							<label>
								<input type="checkbox" class="dia-semana ms-3" name="quinta">
								Quinta
							</label>
							<label>
								<input type="checkbox" class="dia-semana ms-3" name="sexta">
								Sexta
							</label>
							<label>
								<input type="checkbox" class="dia-semana ms-3" name="sabado">
								Sábado
							</label>
					</div>
					<input type="time" class="appt" name="horario"required>
					<small>  às  </small><input type="time" class="appt" name="horario" required>
				</div>
				<!--<div name="horario2" class="">
					<label for="appt">Segundo Horário:</label>
					<div>
						<label>
							<input type="checkbox" class="dia-semana" name="domingo" value="Domingo">
							Domingo
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="segunda" value="Segunda">
							Segunda
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="terca" value="Terça">
							Terça
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="quarta" value="Quarta">
							Quarta
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="quinta" value="Quinta">
							Quinta
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="sexta" value="Sexta">
							Sexta
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="sabado" value="Sábado">
							Sábado
						</label>
					</div>
					<input type="time" class="appt" name="appt">
					<small>  às  </small><input type="time" id="appt" name="horario2">
				</div>
				<div name="horario3" class="">
					<label for="appt">Terceiro Horário:</label>
					<div>
						<label>
							<input type="checkbox" class="dia-semana" name="domingo" value="Domingo">
							Domingo
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="segunda" value="Segunda">
							Segunda
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="terça" value="Terça">
							Terça
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="quarta" value="Quarta">
							Quarta
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="quinta" value="Quinta">
							Quinta
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="sexta" value="Sexta">
							Sexta
						</label>
						<label>
							<input type="checkbox" class="dia-semana ms-3" name="sabado" value="Sábado">
							Sábado
						</label>
					</div>
					<input type="time" class="appt" name="appt">
					<small>  às  </small><input type="time" class="appt" name="horario3">-->
				</div><button class="botao btn-primary">Concluído</button>
			</form>
		</main>
		<?php include_once "footer.php"; ?>
		<script src="../templates/scripts/scripts.js"></script>
	</body>
</html>