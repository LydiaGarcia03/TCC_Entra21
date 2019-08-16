<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ComfyCare | Contato</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark text-white m-0 py-4">
		<div class="container-fluid">
			<p class="font-weight-light h4">ComfyCare</p>
			<div class="container">
				<div class="row">
					<div class="col-10 col-sm-12 offset-md-3 text-right">
						<ul class="navbar-nav float-left pt-1">
							<li class="nav-item mr-5"><a href="sobre.php" class="nav-link p-0">Quem somos</a></li>
							<li class="nav-item mr-5"><a href="blog.php" class="nav-link p-0">Serviços</a></li>
							<li class="nav-item mr-5"><a href="como_funciona.php" class="nav-link p-0">Como funciona</a></li>
							<li class="nav-item mr-5"><a href="FAQ.php" class="nav-link p-0">Dúvidas</a></li>
							<li class="nav-item mr-5"><a href="contato.php" class="nav-link p-0">Blog</a></li>
							<li class="nav-item mr-5"><a href="cadastro_cuidador.php" class="nav-link p-0">Trabalhe conosco</a></li>
						</ul>
					</div>
				</div>
			</div>
			<a href="login.php" class="btn btn-outline-light btn-sm mr-3">Login</a>
			<a href="cadastro.php" class="btn btn-outline-light btn-sm">Cadastro</a>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<div class="card shadow-lg my-5" style="height: 400px">
						<div class="card-body">
							<p class="h1 font-weight-normal mb-4">
								Contate-nos
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
								</div>

								<div class="row">
									<div class="col-6">

										<div class="form-group">
											<label for="c_email">E-mail</label>
											<input type="email" class="form-control" name="c_email" id="c_email" placeholder="fulano@provedor.com">
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="c_tel">Telefone</label>
											<input type="tel" class="form-control" name="c_tel" id="c_tel" pattern="([0-9]{2}) [0-9]{1} [0-9]{4}-[0-9]{4}" placeholder="(00) 9 0000-0000">

											<!-- https://pt.stackoverflow.com/questions/51109/como-mascarar-um-input-no-html5
												MASK NO TELEFONE -->
											</div>
										</div>
									</div>

									<div class="row">
									<div class="col-6 ">

										<div class="form-group">
											<label for="c_nome">Motivo</label>
											<input type="text area" class="required-entry" name="comment" id="comment" placeholder="Eu gostaria de ...">
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