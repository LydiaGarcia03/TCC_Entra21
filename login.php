<?php

	require_once 'classes/login.class.php';
	$login = new Login();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HCD | Login</title>
	<meta charset="utf-8">
	<!-- CSS -->   
	<link href="style/home.css" rel="stylesheet" type="text/css">
	<link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color: dodgerblue">
	<div class="container">
		<div class="col-lg-4" style="position: absolute; top: 20%; left: 34%">		
			<div class="card card-register rounded-0 shadow-lg">

				<div class="card-header py-4 text-center">
					Faça o login para acessar sua conta
				</div>

				<div class="card-body">
					<form method="POST" action="" name="formLogin">

						<div class="form-group">
							<div class="form-label-group">
								<input type="email" id="email" name="email" class="form-control" 
								placeholder="Endereço de e-mail" required autocomplete="off">
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-12">
									<div class="form-label-group">
										<input type="password" id="Senha" class="form-control" 
										placeholder="Senha" required="required">    
									</div>
								</div>
							</div>
						</div>

						<div class="form-group my-4">
							<div class="form-row">
								<div class="col-md-8 offset-md-2 bg-light p-0 rounded">
									
									<div class="btn-group btn-group-toggle" style="width: 100%" data-toggle="buttons">
										<label class="btn btn-light">
											<input type="radio" name="btnTipoUsuario" id="cuidador" value="cuidador" required>Cuidador
										</label>										
								
										<label class="btn btn-light">
											<input type="radio" name="btnTipoUsuario" id="contratante" value="contratante">Contratante
										</label>										
									</div>

								</div>
							</div>
						</div>

						<input type="submit" href="dashboard_cuidador.php" name="btnEntrar" value="Entrar" class="btn btn-primary btn-block mt-5">

					</form>

					<div class="text-center mt-3">
						<a class="d-block small" href="esqueceu_senha.php">Esqueceu sua senha?</a>
					</div>

				</div>
			</div>
		</div>  
	</div>

	<!-- Button TopPage -->
	<a class="scroll-to-top rounded d-inline" href="index.php">
		<i class="fas fa-angle-left"></i>
	</a>

	<!-- Optional JavaScript -->
	<script src="https://kit.fontawesome.com/635b697ad0.js"></script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	 
</body>
</html>