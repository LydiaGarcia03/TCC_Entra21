<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ComfyCare | Trabalhe conosco</title>
	<!-- CSS | Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/cadastro_cuidador.css">
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark text-white m-0 py-4">
		<div class="container-fluid">
			<p class="font-weight-light h4">ComfyCare</p>
			<div class="container">
				<div class="row">
					<div class="col-9 offset-md-3 text-right">
						<ul class="navbar-nav float-left pt-1">
							<li class="nav-item mr-5"><a href="sobre.php" class="nav-link p-0">Quem somos</a></li>
							<li class="nav-item mr-5"><a href="blog.php" class="nav-link p-0">Serviços</a></li>
							<li class="nav-item mr-5"><a href="contato.php" class="nav-link p-0">Como funciona</a></li>
							<li class="nav-item mr-5"><a href="contato.php" class="nav-link p-0">Dúvidas</a></li>
							<li class="nav-item mr-5"><a href="contato.php" class="nav-link p-0">Blog</a></li>
							<li class="nav-item active mr-4"><a href="cadastro_cuidador.php" class="nav-link p-0">Trabalhe conosco</a></li>
						</ul>
					</div>
				</div>
			</div>
			<a href="login.php" class="btn btn-outline-light btn-sm mr-3">Login</a>
			<a href="cadastro.php" class="btn btn-outline-light btn-sm">Cadastro</a>
		</div>
	</nav>

	<!-- Progress bar -->
	<div class="progress" style="height: 5px;">
		<div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	</div>

	<!-- Formulário -->
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<div class="card card-block my-5">
						<div class="card-body">
							<p class="h1 font-weight-normal mb-4">
							Trabalhe conosco
							<span></span>
							</p>

							<form method="POST" action="" name="form-login" class="form-signin mt-3">
								
								<!-- Tab 01 -->
								<div class="tab">
									<div class="row">
										<div class="col-6 ">
											<div class="form-group">
												<label for="c_nome">Nome completo</label>
												<input type="text" class="form-control" name="c_nome" id="c_nome" placeholder="Fulano da Silva">
											</div> 
										</div>

										<div class="col-6" style="margin-top: 31.5px;">
											<div class="input-group">
												<label class="custom-file-label text-secondary" for="c_foto">Escolha uma foto de perfil</label>
												<input type="file" class="custom-file-input" id="c_foto" name="c_foto">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="c_email">E-mail</label>
												<input type="email" class="form-control" name="c_email" id="c_email" placeholder="fulano@provedor.com">
											</div>
										</div>

										<div class="col-3">
											<div class="form-group">
												<label for="c_senha">Senha</label>
												<input type="password" class="form-control" name="c_senha" id="c_senha" placeholder="*********">
											</div> 
										</div>

										<div class="col-3">									
											<div class="form-group">
												<label for="c_conf_senha">Confirmar senha</label>
												<input type="password" class="form-control" name="c_conf_senha" id="c_conf_senha" placeholder="*********">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-2">
											<div class="form-group">
												<label for="c_ddd">DDD</label>
												<input type="tel" class="form-control" name="c_ddd" id="c_ddd" pattern="([0-9]{2})" placeholder="(00)">
											</div>
										</div>

										<div class="col-4">
											<div class="form-group">
												<label for="c_tel">Telefone</label>
												<input type="tel" class="form-control" name="c_tel" id="c_tel" pattern="[0-9]{1} [0-9]{4}-[0-9]{4}" placeholder="9 0000-0000">
												<!-- https://pt.stackoverflow.com/questions/51109/como-mascarar-um-input-no-html5
												MASK NO TELEFONE -->
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label>Gênero</label>
												<select class="custom-select">
													<option selected disabled>Selecione o gênero</option>
													<option>Feminino</option>
													<option>Masculino</option>
													<option>Prefiro não responder</option>
													<option>Outro</option>
												</select>
											</div>

											<div class="form-group">
												<label for="c_dt_nascimento">Data de nascimento</label>
												<input type="date" class="form-control" name="c_dt_nascimento" id="c_dt_nascimento">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<label for="c_cpf">CPF</label>
												<input type="number" class="form-control" name="c_cpf" id="c_cpf" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}" placeholder="000-000-000-00">
											</div>
										</div>

										<div class="col-4">
											<div class="form-group">
												<label for="c_rg">RG</label>
												<input type="number" class="form-control" name="c_rg" id="c_rg" pattern="[0-9]{1}.[0-9]{3}-[0-9]{3}" placeholder="0.000-000">
											</div>
										</div>

										<div class="col-4">
											<div class="form-group">
												<label for="c_cep">CEP</label>
												<input type="number" class="form-control" name="c_cep" id="c_cep" pattern="[0-9]{5}-[0-9]{3}" placeholder="00000-000">
											</div>
										</div>
									</div>
				
									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<label for="c_rua">Rua</label>
												<input type="text" class="form-control" name="c_rua" id="c_rua" disabled>
											</div>
										</div>

										<div class="col-2">
											<div class="form-group">
												<label for="c_num_casa">Número</label>
												<input type="number" class="form-control" name="c_num_casa" id="c_num_casa" disabled>
											</div>
										</div>

										<div class="col-6">
											<div class="form-group">
												<label for="c_comp">Complemento</label>
												<input type="text" class="form-control" name="c_comp" id="c_comp">
											</div>
										</div>
									</div>
																				
									<div class="row">
										<div class="col-4">
											<div class="form-group">
												<label for="c_cidade">Cidade</label>
												<input type="text" class="form-control" name="c_cidade" id="c_cidade" disabled>
											</div>
										</div>

										<div class="col-4">
											<div class="form-group">
												<label for="c_bairro">Bairro</label>
												<input type="text" class="form-control" name="c_bairro" id="c_bairro" disabled>
											</div>
										</div>

										<div class="col-4">
											<div class="form-group">
												<label for="c_comp">Estado</label>
												<select class="custom-select" disabled>
													<option>Santa Catarina</option>
													<option>Rio Grande do Sul</option>
													<option>Paraná</option>
													<option>São Paulo</option>
													<option>Minas Gerais</option>
													<option>Bahia</option>
													<option>Mato Grosso do Sul</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<!-- Tab 02 -->
								<div class="tab">
									<div class="row">
										<div class="col-6">
											<div class="form-group">
												<label for="c_formacao">Formação</label>
												<input type="text" class="form-control" name="c_formacao" id="c_formacao" placeholder="Técnico de Enfermagem">
											</div>

											<div class="form-group">
												<label for="c_local_formacao">Local de formação</label>
												<input type="text" class="form-control" name="c_local_formacao" id="c_local_formacao" placeholder="UNIVALI Itajaí">
											</div>

											<div class="form-group">
												<p>Serviço a oferecer</p>
												<select class="custom-select">
													<option selected disabled>Selecione seu serviço</option>
													<option>Cuidador infantil</option>
													<option>Cuidador aos idosos</option>
													<option>Profissional de saúde</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-3">
											<div class="form-group">
												<label>Banco</label>
												<select class="custom-select">
													<option selected disabled>Selecione o banco</option>
													<option>Banco do Brasil</option>
													<option>Itaú</option>
													<option>Bradesco</option>
												</select>
											</div>
										</div>

										<div class="col-3">
											<div class="form-group">
												<label for="c_conta_num">Número da conta</label>
												<input type="number" class="form-control" name="c_conta_num" id="c_conta_num" placeholder="XX-XXXX">
											</div>
										</div>
									</div>
								</div>

								<!-- Botões -->
								<div class="p-0 mt-3 float-left">
									<button name="btnVoltar" id="btnVoltar" class="btn btn-secondary font-weight-normal px-3 ">Voltar</button>
								</div>

								<div class="p-0 mt-3 float-right">
									<button type="submit" name="btnNext" id="btnNext" class="btn btn-primary font-weight-normal">Criar conta</button>	
								</div>
								
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<footer class="text-center text-white py-5">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="m-0">&copy; Direitos reservados</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- JS | Bootstrap -->
	<script src="bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		var 


	</script>
</body>
</html>