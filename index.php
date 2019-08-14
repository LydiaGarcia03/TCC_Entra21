<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>CUIDADOS</title>
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
							<li class="nav-item active mr-4"><a href="index.php" class="nav-link p-0">Home</a></li>
							<li class="nav-item mr-4"><a href="sobre.php" class="nav-link p-0">Sobre nós</a></li>
							<li class="nav-item mr-4"><a href="blog.php" class="nav-link p-0">Blog</a></li>
							<li class="nav-item mr-4"><a href="contato.php" class="nav-link p-0">Contate-nos</a></li>
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

	<!-- CONTENT -->
	<div id="carrosel" class="carousel slide w-75 text-center mx-auto" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carrosel" data-slide-to="0" class="active"></li>
			<li data-target="#carrosel" data-slide-to="1"></li>
			<li data-target="#carrosel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" style="height: 550px;">
			<div class="carousel-item active m-0" data-interval="10000">
				<img src="img/image01.jpg" class="d-block" height="550" width="1024">
			</div>
			<div class="carousel-item m-0" data-interval="2000">
				<img src="img/image02.jpg" class="d-block" height="550" width="1024">
			</div>
			<div class="carousel-item m-0">
				<img src="img/image03.jpg" class="d-block" height="550" width="1024">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carrosel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carrosel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>


	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<div class="card shadow-lg my-5" style="height: 400px"> <!-- Height temporário -->
						<div class="card-body">
							
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