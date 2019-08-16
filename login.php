<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ComfyCare | Login</title>
	<!-- CSS | Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark text-white m-0 py-4">
		<div class="container-fluid">
			<a href="index.php" style="text-decoration: none;"><p class="font-weight-light text-white h4">ComfyCare</p></a>
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
				<div class="col-6 offset-md-3">
					
					<div class="card card-block shadow-lg my-5">
						<div class="card-body">
							<p class="h4 text-center font-weight-normal">
							Entre com seus dados
							</p>
							<form method="POST" action="" name="form-login" class="form-signin">
								<div class="form-group">
									<label for="email-login">E-mail</label>
									<input type="email" class="form-control" name="email-login" id="email-login" placeholder="login@provedor.com">
								</div>

								<div class="form-group">
									<label for="senha-login">Senha</label>
									<input type="password" class="form-control" id="senha-login" name="senha-login" placeholder="******">
								</div>
								
								<div class="form-group">
									<label for="senha-login">Confirmar senha</label>
									<input type="password" class="form-control" id="senha-login" name="senha-login" placeholder="******">
								</div>

								<div class="p-0 mt-4">
									<p class="small">Ainda não possui conta? <a href="cadastro.php">Cadastre-se</a></p>	
									<button type="submit" name="botao-login" class="btn btn-outline-primary font-weight-bold">Entrar</button>
								</div>
								
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<footer class="text-center text-white mt-5 py-4">
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