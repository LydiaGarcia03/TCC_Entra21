<!-- <?php

	//require_once 'classes/solicitar_servico.class.php';

?> -->

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

			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_contratante.php">
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
						<a href="editar_perfil.php" class="nav-link text-center p-0">
							<i class="far fa-fw fa-edit"></i>
							<span>Editar perfil</span>
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

			<div style="bottom: 0px">
				<li class="nav-item no-arrow mb-0">
					<a href="dashboard_cuidador.php" class="nav-link text-center">
						<span>Dashboard cuidador</span>
					</a>
				</li>
			</div>
		
		</ul>
		<!-- Fim Sidebar -->

		<!-- Conteúdo da página -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">

				<!-- Button TopPage -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>

				<div class="card-header">Solicitação de serviço</div>

				<div class="card-body">

					<form>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-12">
									<div class="form-label-group">
										<input type="text" name="nomePaciente" id="nomePaciente" class="form-control"
										placeholder="Nome completo do paciente" required autofocus>    
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<select class="custom-select" name="genero">
										<option selected disabled>Gênero</option>
										<option value="masculino">Masculino</option>
										<option value="feminino">Feminino</option>
										<option value="outro">Outro</option>
									</select>
								</div>

								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="dt_nascimento" id="dt_nascimento" class="form-control"
										placeholder="Data de nascimento" required>    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										 <select class="custom-select" name="servico">
										 	<option selected disabled>Tipo de serviço</option>
										 	<option value="infantil">Cuidador infantil</option>
										 	<option value="idoso">Cuidador de idosos</option>
										 	<option value="enfermagem">Enfermagem</option>
										 </select>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="E-mail do responsável">
									</div>
								</div>
							</div>	
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="date" class="form-control date" placeholder="Escolha os dias para o serviço">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-label-group">
										<input type="number" name="qtd_cuidadores" id="qtd_cuidadores" class="form-control" placeholder="Quantidade de profissionais necessários">
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<p>O paciente é diabético?</p>
										<input type="radio" name="diabetico" id="diabetico_true" value="diabetico_true">
										<label>Sim</label>
										<br>
										<input type="radio" name="diabetico" id="diabetico_false" value="diabetico_false">
										<label>Não</label>
									</div>

									<div class="form-label-group">
										<p>O paciente possui deficiência física?</p>
										<input type="radio" name="deficFisica" id="deficFisica_true" value="deficFisica_true">
										<label>Sim</label>
										<br>
										<input type="radio" name="deficFisica" id="deficFisica_false" value="deficFisica_false">
										<label>Não</label>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-label-group">
										<p>O paciente possui deficiência mental?</p>
										<input type="radio" name="deficMental" id="deficMental_true" value="deficMental_true">
										<label>Sim</label>
										<br>
										<input type="radio" name="deficMental" id="deficMental_false" value="deficMental_false">
										<label>Não</label>
									</div>

									<div class="form-label-group">
										<p>O paciente é hipertenso?</p>
										<input type="radio" name="hipertenso" id="hipertenso_true" value="hipertenso_true">
										<label>Sim</label>
										<br>
										<input type="radio" name="hipertenso" id="hipertenso_false" value="hipertenso_false">
										<label>Não</label>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<textarea style="resize: none;" cols="64" rows="7" placeholder="Descreva, se necessário, algumas informações a mais e essenciais do paciente" class="form-control" name="descricao"></textarea>
									</div>
								</div>
							</div>
						</div>

						<hr>

						<!-- Dados bancários -->
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="cod_banco" id="cod_banco" placeholder="Código do banco" class="form-control">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="num_agencia" id="num_agencia" placeholder="Número da agência" class="form-control">
									</div>
								</div>

							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-4">
								 	<div class="form-label-group">
								 		<input type="text" id="tipo_conta" name="tipo_conta" placeholder="Tipo de conta" class="form-control">
								 	</div>
								 </div>

								<div class="col-md-4">
									<input type="text" name="num_conta" id="num_conta" class="form-control" placeholder="Número da conta">
								</div>

								<div class="col-md-4">
									<input type="text" name="dig_conta" id="dig_conta" class="form-control" placeholder="Dígito da conta">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<input type="text" name="num_cartao" id="num_cartao" class="form-control" placeholder="Número do cartão">
								</div>

								<div class="col-md-6">
									<input type="text" name="nome_user_cartao" id="nome_user_cartao" class="form-control" placeholder="Nome do usuário no cartão">
								</div>
							</div>
						</div>

						<input type="submit" class="btn btn-primary btn-block" name="btnSolicitarServico" value="Solicitar serviço">

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
						<h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair</h5>
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
	<!-- JQuery Mask -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="jQuery-Mask-Plugin/jquery.mask.min.js"/></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#dt_nascimento').mask('99/99/9999');
			$('#cod_banco').mask('999');
			$('#num_agencia').mask('9999');
			$('#tipo_conta').mask('999');
			$('#num_conta').mask('99999999');
			$('#dig_conta').mask('9');
			$('#num_cartao').mask('9999 9999 9999 9999');
		});
	</script>

	<script type="text/javascript">
		$('.date').datepicker({
			multidate: true,
			format: 'dd-mm-yyyy'
		});
	</script>
	<!-- Google Maps Plugin -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=ColoqueASuaKeyAqui&amp;sensor=false"></script>
</body>
</html>