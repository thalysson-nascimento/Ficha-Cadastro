<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recadastramento de Dependentes no SiCaPEx</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<br>

	<div class="container">
		<div class="col-12 col-md-12 text-right">
			<span id="aviso">click no icone para obter mais informações</span>
			<img src="images/info.png" data-toggle="modal" data-target=".bd-example-modal-lg" style="width: 30px; height: 30px;">
		</div>
	</div>

	<div class="container">

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">
							Informação referente ao recadastramento de dependentes no SiCaPEx.
						</h5>
					</div>
					<div class="modal-body">
						...
					</div>
				</div>
			</div>
		</div>

		<!-- Modal - Erro ao imprimir o formulário -->
		<div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ops! Erro ao imprimir o formulário.</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Todos os campos devem ser devidamente preenchidos.
					</div>
				</div>
			</div>
		</div>

<!-- 		<div id="content-info" class="row">
			<div class="col-12 col-md-12 text-center">
				<h4>Recadastramento de dependentes no SiCaPex</h4>
				<br>
			</div>
		</div> -->

		<form class="needs-validation" id="form-linked-record" method="POST" novalidate>

			<div class="printableArea">

				<div class="row">
					<div class="col-12 col-md-12 text-justify" style="text-indent: 40px;">
						Eu, 
						<span class="text-uppercase font-weight-bold trc-nome-vinculado">
						nome completo do vinculado</span>, 
						identidade nº
						<span class="trc-identidade-vinculado">
							00000000-0
						</span> 
						<span class="text-uppercase trc-orgao-expedidor">
						MD/EB</span>, inscrito no CPF nº 
						<span class="trc-cpf-vinculado">000.000.000-00</span>, residente e domiciliado à 
						<span class="trc-logradouro">endereço</span>, nº 
						<span class="trc-numero-residencia">000</span>, 
						<span class="trc-bairro">bairro</span>, 
						<span class="trc-cidade">cidade</span>/<span class="trc-uf">UF</span>, 
						declaro para os devidos fins que tenho sob minha dependência:
					</div>
				</div>

				<label></label>
				<div class="row">
					<div class="col-12 col-md-12">
						<div class="alert alert-primary" role="alert">
							Dados completo do vinculado.
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-12 col-md-12">
							<label for="nome-vinculado">Nome:</label>
							<input type="text" class="form-control text-uppercase nome-vinculado" id="validationCustom01" placeholder="nome completo" required>
							<small class="form-text text-muted info-nome-vinculado"></small>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-12 col-md-6">
							<label for="posto-grad">Posto/Graduação</label>
							<select class="custom-select posto-grad" required>
								<option selected value="">Escolha a Graduação</option>
								<option value="GEN EXE">GENERAL DE EXÉRCITO</option>
								<option value="GEN DIV">GENERAL DE DIVISÃO</option>
								<option value="GEN BRI">GENERAL DE BRIGADA</option>
								<option value="CEL">CORONEL</option>
								<option value="TEN CEL">TENENTE CORONEL</option>
								<option value="MAJ">MAJOR</option>
								<option value="CAP">CAPITÃO</option>
								<option value="1º TEN">1º TENENTE</option>
								<option value="2º TEN">2º TENENTE</option>
								<option value="S TEN">SUB TENENENTE</option>
								<option value="1º SGT">1º SARGENTO</option>
								<option value="2º SGT">2º SARGENTO</option>
								<option value="3º SGT">3º SARGENTO</option>
								<option value="CB">CABO</option>
								<option value="SD">SOLDADO</option>
							</select>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
						<div class="col-12 col-md-6">
							<label for="situacao">Situação</label>
							<select class="custom-select situacao" required>
								<option selected value="">Escolha a situação</option>
								<option value="R/1">R/1</option>
								<option value="REFM">REFM</option>
							</select>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-12 col-md-8">
							<label for="identidade-vinculado">Identidade</label>
							<input type="text" class="form-control identidade-vinculado" placeholder="000000000-0" required>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
						<div class="col-12 col-md-4">
							<label for="validationCustom04">Orgão Expedidor</label>
							<input type="text" class="form-control text-uppercase orgao-expedidor-md-eb" placeholder="MD/EB" required>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-12 col-md-12">
							<label for="cpf-vinculado">CPF:</label>
							<input type="text" class="form-control text-uppercase cpf-vinculado" id="validationCustom01" placeholder="000.000.000-00" required>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-12 col-md-4">
							<label for="logradouro">Logradouro</label>
							<input type="text" class="form-control logradouro" placeholder="Av. ou Rua" required>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
						<div class="col-12 col-md-1">
							<label for="numero-residencia">Número</label>
							<input type="text" class="form-control numero-residencia" placeholder="0000" required>
							<div class="invalid-feedback">
								Obrigatório.
							</div>
							<div class="valid-feedback">
								Preenchido.
							</div>
						</div>
						<div class="col-12 col-md-3">
							<label for="bairro">Bairro</label>
							<input type="text" class="form-control bairro" placeholder="Bairro" required>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
						<div class="col-12 col-md-2">
							<label for="cidade">Cidade</label>
							<input type="text" class="form-control cidade" placeholder="Cidade" required>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
						<div class="col-12 col-md-2">
							<label for="estado">Estado</label>
							<select class="custom-select uf" required>
								<option selected value="">Selecione o estado</option>
								<option>AC</option>
								<option>AL</option>
								<option>AP</option>
								<option>AM</option>
								<option>BA</option>
								<option>CE</option>
								<option>DF</option>
								<option>ES</option>
								<option>GO</option>
								<option>MA</option>
								<option>MS</option>
								<option>MG</option>
								<option>PA</option>
								<option>PB</option>
								<option>PR</option>
								<option>PE</option>
								<option>PI</option>
								<option>RJ</option>
								<option>RN</option>
								<option>RS</option>
								<option>RO</option>
								<option>RR</option>
								<option>SC</option>
								<option>SP</option>
								<option>SE</option>
								<option>TO</option>
							</select>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo preenchido.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row" id="add-dependent">
				<div class="col-12 col-md-12">
					<div class="alert alert-dark" role="alert">	
						Dados completo do(s) dependente(s).
					</div>
				</div>
			</div>

			<div class="clone_form printableArea">
				<div class="dados_dos_denpendetes">

					<div class="row">
						<div class="col-12">
							Dependente: [0]
							<hr>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-12 col-md-8">
								<label for="nome-dependente">Nome:</label>
								<input type="text" class="form-control text-uppercase nome-dependente" placeholder="Nome completo" required>
								<small id="emailHelp" class="form-text text-muted">Digite o nome completo sem abreviar.</small>
								<div class="invalid-feedback">
									Campo obrigatório.
								</div>
								<div class="valid-feedback">
									Campo Preenchido.
								</div>
							</div>
							<div class="col-12 col-md-4">
								<label for="nome_dependente">Tipo de dependente:</label>
								<select class="custom-select" id="tipo_dependente" required>
									<option selected value="">Escolha o tipo de dependente</option>
									<option>Cônjuge</option>
									<option>Filha</option>
									<option>Filho</option>
									<option>Pai</option>
									<option>Mãe</option>
									<option>Avó/Avô</option>
									<option>Sogra</option>
									<option>Madrasta</option>
									<option>Ex-cônjuge</option>
									<option>Ex-companheiro(a)</option>
									<option>Irmão</option>
									<option>Irmã</option>
									<option>Cunhado(a)</option>
									<option>Sobrinho(a)</option>
									<option>Neto(a)</option>
									<option>Tutelado(a)</option>
									<option>Enteado(a)</option>
									<option>Companheiro(a)</option>
									<option>Menor sob guarda</option>
									<option>Outros</option>
								</select>
								<div class="invalid-feedback">
									Campo obrigatório.
								</div>
								<div class="valid-feedback">
									Campo Preenchido.
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-12 col-md-12">
								<label for="cpf-dependente">CPF:</label>
								<input type="text" class="form-control cpf-dependente" maxlength="14" aria-describedby="emailHelp" placeholder="000.000.000-00" required>
								<small id="emailHelp" class="form-text text-muted">Digite apenas números.</small>
								<div class="invalid-feedback">
									Campo obrigatório.
								</div>
								<div class="valid-feedback">
									Campo Preenchido.
								</div>

							</div>
						</div>
					</div>

					<label>
						Beneficiário para fins de:
					</label>

					<div class="row">
						<div class="col-12 col-md-3">
							<label for="fusex-samed">Fusex/Samed:</label>
							<select class="custom-select fusex-samed">
								<option>Sim</option>
								<option selected>Não</option>
							</select>
						</div>
						<div class="col-12 col-md-3">
							<label for="salario-familia">Salário Familia:</label>
							<select class="custom-select salario-familia">
								<option>Sim</option>
								<option selected>Não</option>
							</select>
						</div>
						<div class="col-12 col-md-3">
							<label for="imposto-renda">Imposto de Renda:</label>
							<select class="custom-select imposto-renda">
								<option>Sim</option>
								<option selected>Não</option>
							</select>
						</div>
						<div class="col-12 col-md-3">
							<label for="pensao-militar">Pensão Militar:</label>
							<select class="custom-select pensao-militar">
								<option>Sim</option>
								<option selected>Não</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-3">
							<label for="tipo-sanguineo">Tipo sanguíneo:</label>
							<select class="custom-select tipo-sanguineo" required>
								<option selected value="">Selecione o tipo sanguíneo</option>
								<option>A</option>
								<option>B</option>
								<option>AB</option>
								<option>O</option>
							</select>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo Preenchido.
							</div>
						</div>
						<div class="col-12 col-md-3">
							<label for="fator-rh">Fatot RH:</label>
							<select class="custom-select fator-rh" required>
								<option selected value="">Escolha o fator RH</option>
								<option>POSITIVO</option>
								<option>NEGATIVO</option>
							</select>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo Preenchido.
							</div>
						</div>
						<div class="col-12 col-md-3">
							<label for="data-nascimento">Data de nascimento:</label>
							<input type="date" name="bday" min="1900-01-01" max="2020-12-31" class="form-control" required>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo Preenchido.
							</div>
						</div>
						<div class="col-12 col-md-3">
							<label for="escolaridade">Escolaridade:</label>
							<select class="custom-select escolaridade" required>
								<option selected value="">Escolha a escolaridade</option>
								<option>Ensino Fundamental</option>
								<option>Ensino Médio</option>
								<option>Superior</option>
							</select>
							<div class="invalid-feedback">
								Campo obrigatório.
							</div>
							<div class="valid-feedback">
								Campo Preenchido.
							</div>
						</div>

					</div>
				</div>

			</div>

			<br>

			<div class="row" id="add-dependent">
				<div class="col-12 col-sm-6"></div>
				<div class="col-12 col-sm-6">
					<button type="button" class="btn btn-primary btn-lg float-right col-12" id="adicionar_dependentes">
						Click para adicionar outro dependente
					</button>
				</div>
			</div>
			
			<br>

			<div class="printableArea">
				<div class="row">
					<div class="col-12 col-md-12 text-center">
						A presente declaração é a expressão de verdade pela qual me responsabilizo para todos os efeitos legais.
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-12 col-md-12 text-center">
						<hr>
						<span class="text-uppercase	 trc-nome-vinculado">
						nome completo do vinculado</span> - <span class="text-uppercase	 trc-posto-grad">posto</span> - <span class="text-uppercase trc-situacao">situação</span>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-12 text-center">
						<small class="form-text text-muted">
							Obs: Junto a esta ficha, anexar o comprovante de CPF e identidade do(s) dependente(s) mensionado(s).
						</small>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-12">
					<label></label>
					<input type="submit" class="btn btn-success col-12 col-md-12" id="btn-imprimir-ficha" value="IMPRIMIR FICHA DE CADASTRO DOS DEPENDENTES"></input>
				</div>
			</div>	

		</form>

	</div>
	<br>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script> -->
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>


	<script type="text/javascript">
		var elem = $('#adicionar_dependentes');
		$('#adicionar_dependentes').on('click', function(){
			$('html, body').animate({
				scrollTop: elem.offset().top
			}, 700);
		});
	</script>
	<script type="text/javascript">
		$(function(){
			var duration = 3000;
			$('#aviso').hide();
			$('#aviso').fadeIn(duration);
			$('#aviso').delay(duration).fadeOut(duration);
		});
	</script>

	<script type="text/javascript" src="js/adicionar.dependentes.js"></script>
	<script type="text/javascript" src="js/update.text.header.js"></script>
	<script type="text/javascript" src="js/mask.input.js"></script>
	<script type="text/javascript" src="js/limit.input.js"></script>
	<script type="text/javascript" src="js/print.form.js"></script>

</body>
</html>	