<?php

require_once 'classes/login.class.php';
$login = new Login();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HCD | Esqueceu sua senha</title>
	<meta charset="utf-8">
	<!-- CSS -->   
	<link rel="stylesheet" type="text/css" href="media/css/custom/esqueceu_senha.css">
	<link href="media/css/resource/sb-admin-2.min.css" rel="stylesheet">
	<link href="media/css/custom/home.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<!--botao voltar-->
<body style="background-color: dodgerblue">
	<div class="container">
		<div class="col-lg-4" style="position: absolute; top: 20%; left: 34%">		
			<div class="card card-register rounded-0 shadow-lg">
				<div class="card-header py-4 text-center">
					Confirme seu endereço de login
				</div>
				<div class="card-body">
					<form method="POST" action="" name="formLogin">
						<div class="form-group">
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" id="email" class="form-control" 
								placeholder="Endereço de e-mail" required="required">
							</div>
						</div>
						<input type="submit" href="dashboard_cuidador.php" name="btnEntrar" value="Confirmar" class="btn btn-primary btn-block mt-5">
					</form>
				</div>
			</div>
		</div>  
		<a class="scroll-to-top rounded d-inline" href="login.php" id="btn-voltar">
		<i class="fas fa-angle-left"></i>
	</a>
	</div>


<!--botao voltar-->
<script src="https://kit.fontawesome.com/635b697ad0.js"></script>
		
	


<!-- 	<div class="container">
		<div class="col-lg-4 m-b-3" style="position: absolute; top: 20%; left: 34%">		
			<div class="card card-register mt-5">
				<div class="card-header">Confirme seu e-mail</div>
				<div class="card-body">
					<form>
						<div class="form-group">
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" id="email" class="form-control" 
								placeholder="Endereço de e-mail" required="required">
							</div>
						</div>
						<a class="btn btn-primary btn-block" href="">Continuar</a>
					</form>
				</div>
			</div>
		</div>  
	</div> -->