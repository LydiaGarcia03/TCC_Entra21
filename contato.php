<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CUIDADOS | Contato</title>
	<!-- CSS | Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark text-white m-0 py-4">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-4 text-left">
						<p class="font-weight-light h4">CUIDADOS</p>
					</div>

					<div class="col-8 text-right">
						<ul class="navbar-nav float-left pt-1">
							<li class="nav-item mr-4"><a href="index.php" class="nav-link p-0">Home</a></li>
							<li class="nav-item mr-4"><a href="sobre.php" class="nav-link p-0">Sobre nós</a></li>
							<li class="nav-item mr-4"><a href="blog.php" class="nav-link p-0">Blog</a></li>
							<li class="nav-item active mr-4"><a href="contato.php" class="nav-link p-0">Contate-nos</a></li>
							<li class="nav-item mr-4"><a href="cadastro_cuidador.php" class="nav-link p-0">Trabalhe conosco</a></li>
						</ul>
						<div class="float-right">
							<a href="login.php" class="btn btn-outline-light btn-sm mr-3">Login</a>
							<a href="cadastro.php" class="btn btn-outline-light btn-sm">Cadastre-se</a>
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
					
					<div class="card shadow-lg my-5">
						<div class="card-body">

							<p class="h1 font-weight-normal mb-4">
								Contate-nos
								<span></span>
							</p>

							<form method="POST" action="" name="form-login" class="form-signin mt-3">
								
								<div class="form-group">
									<label for="nome">Nome completo</label>
									<input type="text" class="form-control" name="nome" id="nome" placeholder="Fulano da Silva">
								</div> 
								
								<div class="form-group">
									<label for="email">E-mail</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="fulano@provedor.com">
								</div>

								<div class="form-group">
									<label for="tel">Telefone</label>
									<input type="tel" class="form-control" name="tel" id="tel" pattern="([0-9]{2}) [0-9]{1} [0-9]{4}-[0-9]{4}" placeholder="(00) 9 0000-0000">
									<!-- https://pt.stackoverflow.com/questions/51109/como-mascarar-um-input-no-html5
										MASK NO TELEFONE -->
								</div>
								
								<div class="form-group">
									<label for="motivo">O que gostaria de resolver?</label>
									<input type="textarea" class="form-control" name="motivo" id="motivo" placeholder="Eu gostaria de...">
								</div> 

								<a href="#" class="btn btn-primary">Contate-nos</a>

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
</body>
</html>