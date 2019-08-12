<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CUIDADOS | Trabalhe conosco</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Maven+Pro|PT+Sans+Narrow&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			font-family: 'Maven Pro', sans-serif;
		}
		.btn-outline-light:hover{
			color: rgba(15, 116, 163, 0.6);
			font-weight: 900;
		}
		.h1{
			line-height: 100px;
		}
		span{
			width: 5%;
			height: 3px;
			display: block;
			background-color: rgba(15, 116, 163, 0.6);
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark text-white m-0 py-4" style="background-color: rgba(15, 116, 163, 0.6);">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-4 text-left">
						<p class="font-weight-light h4">CUIDADOS</p>
					</div>

					<div class="col-8 text-right">
						<ul class="navbar-nav float-left pt-1">
							<li class="nav-item mr-4"><a href="index.php" class="nav-link p-0">Home</a></li>
							<li class="nav-item mr-4"><a href="#sobre_nos" class="nav-link p-0">Sobre nós</a></li>
							<li class="nav-item active mr-4"><a href="trabalhe_conosco.php" class="nav-link p-0">Trabalhe conosco</a></li>
							<li class="nav-item mr-4"><a href="#contato" class="nav-link p-0">Contate-nos</a></li>
							<li class="nav-item mr-4"><a href="#blog" class="nav-link p-0">Blog</a></li>
						</ul>
						<div class="float-right">
							<a href="login.php" class="btn btn-outline-light btn-sm mr-3">Login</a>
							<a href="login.php" class="btn btn-outline-light btn-sm">Cadastre-se</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<div class="card card-block shadow-lg my-5">
						<div class="card-body">
							<p class="h1 font-weight-normal mb-4">
							Trabalhe conosco
							<span></span>
							</p>

							<form method="POST" action="" name="form-login" class="form-signin mt-3">
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
									<div class="col-12">

										<div class="form-group">
											<label for="c_email">E-mail</label>
											<input type="email" class="form-control" name="c_email" id="c_email" placeholder="fulano@provedor.com">
										</div>

										<div class="form-group">
											<label for="c_senha">Senha</label>
											<input type="password" class="form-control" name="c_senha" id="c_senha" placeholder="*********">
										</div> 

										<div class="form-group">
											<label for="c_conf_senha">Confirmar senha</label>
											<input type="password" class="form-control" name="c_conf_senha" id="c_conf_senha" placeholder="*********">
										</div>

										<div class="form-group">
											<label for="c_tel">Telefone</label>
											<input type="tel" class="form-control" name="c_tel" id="c_tel" pattern="([0-9]{2}) [0-9]{1} [0-9]{4}-[0-9]{4}" placeholder="(00) 9 0000-0000">

											<!-- https://pt.stackoverflow.com/questions/51109/como-mascarar-um-input-no-html5
											MASK NO TELEFONE -->
										</div>

										<div class="form-group">
											<p>Gênero</p>
											<input type="radio" name="c_genero_f" id="c_genero_f">
											<label for="c_genero_f">Feminino</label>
											<br>
											<input type="radio" name="c_genero_m" id="c_genero_m">
											<label for="c_genero_m">Masculino</label>
										</div>

										<div class="form-group">
											<label for="c_dt_nascimento">Data de nascimento</label>
											<input type="date" class="form-control" name="c_dt_nascimento" id="c_dt_nascimento">
										</div>

										<div class="form-group">
											<label for="c_cpf">CPF</label>
											<input type="number" class="form-control" name="c_cpf" id="c_cpf" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}" placeholder="000-000-000-00">
										</div>

										<div class="form-group">
											<label for="c_rg">RG</label>
											<input type="number" class="form-control" name="c_rg" id="c_rg" pattern="[0-9]{1}.[0-9]{3}-[0-9]{3}" placeholder="0.000-000">
										</div>

										<div class="p-0 mt-3">
											<button type="submit" name="botao-login" class="btn btn-outline-primary font-weight-bold">Entrar</button>
											<button type="submit" name="botao-cadastro" class="btn btn-outline-primary font-weight-bold">Cadastrar-se</button>	
										</div>

									</div>
								</div>

							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<footer class="text-center text-white py-5" style="background-color: rgba(15, 116, 163, 0.6);">
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

	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>