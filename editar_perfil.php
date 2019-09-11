<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>HCD | Dashboard</title>
	<!-- Fontes -->
	<link href="sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- CSS -->
	<link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="style/dashboard.css" rel="stylesheet" type="text/css">
	<link href="style/calendar.css" rel="stylesheet" type="text/css">
</head>
<body id="page-top">
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
				<div class="sidebar-brand-icon">
					<i class="fas fa-laptop-medical"></i>
				</div>
				<div class="sidebar-brand-text mx-3">HCDigital</div>
			</a>

			<!-- Divisor -->
			<hr class="sidebar-divider my-0">

			<!-- Perfil Info -->
			<div class="text-center text-white my-3">
				<img src="img/img-04.jpeg" class="rounded-circle profile-img d-inline" id="profile-img">
				<p class="mb-0 mt-2">Nome</p>
			</div>

			<div class="text-center my-3">
				<li class="nav-item">
					<small>
						<a href="dashboard_contratante.php" class="nav-link text-center p-0">
							<i class="far fa-fw fa-edit"></i>
							<span>Página inicial</span>
						</a>
					</small>
				</li>
			</div>

			<!-- Divisor -->
			<hr class="sidebar-divider my-0">

			<!-- Itens Sidebar -->
			<div class="text-center my-3">
				<li class="nav-item">
					<a href="#agenda.php" class="nav-link text-center p-0">
						<i class="far fa-fw fa-calendar-alt"></i>
						<span>Agenda</span>
					</a>
				</li>
			</div>

			<div class="text-center my-3">
				<li class="nav-item">
					<a href="chat.php" class="nav-link text-center p-0">
						<i class="far fa-fw fa-comments"></i>
						<span>Chat</span>
					</a>
				</li>
			</div>

			<!-- Logout -->
			<div style="bottom: 0px">
				<li class="nav-item no-arrow mb-0">
					<a href="#" class="nav-link text-center" data-toggle="modal" data-target="#logoutModal">
						<i class="fas fa-fw fa-sign-out-alt"></i>
						<span>Sair</span>
					</a>
				</li>
			</div>

			<!-- Logout -->
			<div style="bottom: 0px">
				<li class="nav-item no-arrow mb-0">
					<a href="dashboard_contratante.php" class="nav-link text-center">
						<span>Dashboard cuidador</span>
					</a>
				</li>
			</div>

			<!-- Toggle Sidebar -->


		</ul>
		<!-- Fim Sidebar -->

		<!-- Conteúdo da página -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">

				<!-- Button TopPage -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>

				<div class="card-header">Edição de conta</div>

				<div class="card-body">
					<form>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control"
										placeholder="Nome Completo" required="required" autofocus="autofocus">    
									</div>
								</div>
								<div class="col-6">

									<div class="input-group">
										<label class="custom-file-label text-secondary" for="c_foto"></label>
										<input type="file" class="custom-file-input" name="c_foto" id="c_foto" placeholder="Escolha uma foto de perfil">
									</div>

								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<select class="form-control" name="genero">
										<option>Gênero</option>
										<option value="masculino">Masculino</option>
										<option value="feminino">Feminino</option>
										<option value="outros">Outros</option>
									</select>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="date" name="date" id="date" class="form-control"
										placeholder="Data de nascimento" required="required">    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="email" name="email" id="email" class="form-control"
										placeholder="Endereço de e-mail" required="required">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="email" name="confirmarEmail" id="confirmarEmail" class="form-control"
										placeholder="Confirmar Email" required="required">    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="password" name="senha" id="senha" class="form-control"
										placeholder="senha" required="required">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control"
										placeholder="Confirma Senha" required="required">    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-12">
									<div class="form-label-group">
										<input type="number" name="cep" id="cep" class="form-control"
										placeholder="CEP: (00000-000)" required="required" autofocus="autofocus">  
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="rua" id="rua" class="form-control"
										placeholder="Rua" required="required" autofocus="autofocus" disabled="">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="numeroCasa" id="numeroCasa" class="form-control"
										placeholder="Numero" required="required" autofocus="autofocus">    
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="complemento" id="complemento" class="form-control"
										placeholder="Complemento" required="required" autofocus="autofocus" >    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="cidade" id="cidade" class="form-control"
										placeholder="Cidade" required="required" autofocus="autofocus" disabled="">    
									</div>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="bairro" id="bairro" class="form-control"
										placeholder="Bairro" required="required" autofocus="autofocus" disabled="">    
									</div>
								</div>
								<div class="col-md-6">

									<select class="custom-select" disabled="">
										<option>AC</option>
										<option>AL</option>
										<option>AP</option>
										<option>AM</option>
										<option>BA</option>
										<option>CE</option>
										<option>DF</option>
										<option>ES</option>
										<option>GO</option>
										<option>MA</option>
										<option>MT</option>
										<option>MS</option>
										<option>MG</option>
										<option>PA</option>
										<option>PB</option>
										<option>PR</option>
										<option>PE</option>
										<option>PI</option>
										<option>RJ</option>
										<option>RN</option>
										<option>RO</option>
										<option>RS</option>
										<option>RR</option>
										<option>SC</option>
										<option>SP</option>
										<option>SE</option>
										<option>TO</option>
									</select>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="number" name="telefone_residencial" id="telefone_residencial" class="form-control"
										placeholder="Numero fixo" required="required">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="number" name="telefone_celular" id="telefone_celular" class="form-control"
										placeholder="Numero de celular" required="required">    
									</div>
								</div>
								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="num_coren" id="num_coren" class="form-control"
										placeholder="Numero do coren" required="required" autofocus="autofocus">
									</div>
								</div>
								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="cod_banco" id="cod_banco" class="form-control"
										placeholder="Código do banco" required="required" autofocus="autofocus">    
									</div>
								</div>
								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="num_agencia" id="num_agencia" class="form-control"
										placeholder="Número da agência" required="required" autofocus="autofocus">    
									</div>
								</div>
								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="dig_agencia" id="dig_agencia" class="form-control"
										placeholder="Digito da agência" required="required" autofocus="autofocus">    
									</div>
								</div>

								<div class="col-md-4 mt-3">
									<select class="custom-select">
										<option disabled selected>Tipo</option>
										<option value="corrente">Corrente</option>
										<option value="poupança">Poupança</option>
										<option value="especial">Especial</option>
									</select>
								</div>

								<div class="col-md-4 mt-3 mt-3">
									<input type="text" name="num_conta" id="num_conta" class="form-control" placeholder="Número da conta">
								</div>

								<div class="col-md-4 mt-3 mt-3">
									<input type="text" name="dig_conta" id="dig_conta" class="form-control" placeholder="Dígito da conta">
								</div>

								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="num_cartao" id="num_cartao" class="form-control"
										placeholder="Número do cartão" required="required" autofocus="autofocus" >    
									</div>
								</div>
								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="nome_user_cartao" id="nome_user_cartao" class="form-control"
										placeholder="Nome do usuário do cartão" required="required" autofocus="autofocus" >    
									</div>
								</div>

								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="curso_formacao" id="curso_formacao" class="form-control"
										placeholder="Curso de formação" required="required" autofocus="autofocus" >    
									</div>
								</div>
								<div class="col-md-6 mt-3">
									<div class="form-label-group">
										<input type="text" name="instituicao" id="instituicao" class="form-control"
										placeholder="Instituição de formação" required="required" autofocus="autofocus" >    
									</div>
								</div>
							</div>
						</div>

						<input type="submit" class="btn btn-primary btn-block" name="btnNovaConta" value="Concluir alterações">

					</form>

				</div>
				<!-- End of Main Content -->

				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; HCDigital 2019</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->

			</div>
			<!-- End of Content Wrapper -->

		</div>
		<!-- End of Page Wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tem certeza que quer sair</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Selecione sair se deseja.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-primary" href="index.php">Sair</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="sbadmin/vendor/jquery/jquery.min.js"></script>
		<script src="sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="sbadmin/js/sb-admin-2.min.js"></script>
		<!-- Page level plugins -->
		<script src="sbadmin/vendor/chart.js/Chart.min.js"></script>
		<!-- Page level custom scripts -->
		<script src="sbadmin/js/demo/chart-area-demo.js"></script>
		<script src="sbadmin/js/demo/chart-pie-demo.js"></script>
		<!-- Toggle Button -->
		<script type="text/javascript">

			function toggleSideBar(){
				var profile_img = window.document.getElementById('profile_img');
				if(profile_img.classList.contains('d-inline')){
					profile_img.addClass('d-none');
				} else{
					profile_img.addClass('d-inline');
				}
			}

		</script>
	</body>
	</html>