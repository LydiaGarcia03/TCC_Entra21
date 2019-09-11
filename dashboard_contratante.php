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

			<!-- Logout -->
			<div style="bottom: 0px">
				<li class="nav-item no-arrow mb-0">
					<a href="dashboard_cuidador.php" class="nav-link text-center">
						<span>Dashboard cuidador</span>
					</a>
				</li>
			</div>

			<!-- Toggle Sidebar -->
			

		</ul>
		<!-- Fim Sidebar -->

		<!-- Conteúdo da página -->
		<div id="content-wrapper" class="d-flex flex-column background_contract">
			<div id="content">

				<!-- Button TopPage -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>


			
				<div class="container-fluid">
					<div class="container">
						<h2>Fazer um agendamento</h2>
						<div class="card card-register mx-auto mt-5">
							<div class="card-body">
								<form>
									<div class="row">
										<div class="col-3 mb-3">
											<input type="text" class="form-control" placeholder="Nome">
										</div>
										<div class="col-3">
											<input type="text" class="form-control" placeholder="Idade">
										</div>
										<div class="col-3">
											<input type="text" class="form-control" placeholder="Especialidade">
										</div>
										<div class="col-3">
											<input type="text" class="form-control" placeholder="CEP">
										</div>
									</div>
								</form>
								<input type="submit" class="btn btn-primary btn-block" name="btnNovaConta" value="Confirmar  agendamento">

							</div>

						</div>
						<!-- End of Content Wrapper -->
					</div>
				</div>
			</div>
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