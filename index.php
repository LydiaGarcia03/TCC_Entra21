<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Template</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
							<li class="nav-item active mr-4"><a href="index.php" class="nav-link p-0">Home</a></li>
							<li class="nav-item mr-4"><a href="#sobre_nos" class="nav-link p-0">Sobre nós</a></li>
							<li class="nav-item mr-4"><a href="trabalhe_conosco.php" class="nav-link p-0">Trabalhe conosco</a></li>
							<li class="nav-item mr-4"><a href="contate_nos.php" class="nav-link p-0">Contate-nos</a></li>
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
					
					<div class="card shadow-lg my-5" style="height: 400px">
						<div class="card-body">
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<footer class="text-center text-white bg-dark py-5">
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