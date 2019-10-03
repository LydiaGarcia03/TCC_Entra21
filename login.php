<?php

	require_once 'classes/login.class.php';
	$login = new Login();

	require_once 'includes/startfile.php';

?>

	<title>HCD | Login</title>
</head>
<body style="background-color: dodgerblue">

	<!-- Gambiarra para estética -->
	<div class="row" style="height: 51.5px;">
		&nbsp;
	</div>
		<div class="container">
					<div class="card card-register rounded-0 shadow-lg my-5" id="card_r">

						<div class="card-header text-center">
							<div id="btn-volta">
								<a class="navbar-brand logo font-weight-bold" href="index.php">HCDigital</a>
							</div>

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
												<input type="password" name="senha" id="senha" class="form-control" 
												placeholder="Senha" minlength="8" maxlength="16" required>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group my-4">
									<div class="form-row">
										<div class="col-md-8 offset-md-2 bg-light p-0 rounded">

											<div class="col- btn-group btn-group-toggle" style="width: 100%" data-toggle="buttons" id="opc_botao">
												<label class="btn btn-light" for="cuidador">
													<input type="radio" name="btnTipoUsuario" id="cuidador" value="cuidador" required>Cuidador
												</label>

		                                        <br>

												<label class="btn btn-light" for="contratante">
													<input type="radio" name="btnTipoUsuario" id="contratante" value="contratante">Contratante
												</label>										
											</div>

										</div>
									</div>
								</div>

								<input type="submit" name="btnEntrar" value="Entrar" class="btn btn-primary btn-block mt-5">

							</form>

							<div class="text-center mt-3">
								<a class="d-block small" href="esqueceu_senha.php">Esqueceu sua senha?</a>
							</div>

						</div>
					</div>

				</div>

			</div>
		</div>
	</div>	  

	<!-- Gambiarra para estética -->
	<div class="row" style="height: 51.5px;">
		&nbsp;
	</div>

	<!-- estilo para teste -->
	<style type="text/css">
	@media screen and (min-width: 985px) {
		#card_r{
			margin-top: 336px !important;			
    		left: 50%;
    		margin-right: -50%;
    		transform: translate(-50%, -50%) }
		}

		@media screen and (max-width: 575px) {
			#card_r{
				margin-left: 14px;
			}
</style>

<?php require_once 'includes/endfile.php'; ?>