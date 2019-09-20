<?php

	require_once "classes/site.class.php";
	$site = new Site();

	if($site->session_error() == 0){
		// header('Location: error.php');
		echo 'droga';
		var_dump($_SESSION['tipo_usuario']);
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>HCD | Dashboard</title>
	<!-- Fontes -->
	<link href="sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- CSS -->
	<link href="style/dashboard.css" rel="stylesheet" type="text/css">
	<link href="style/calendar.css" rel="stylesheet" type="text/css">
	<!-- FullCalendar -->
	<link href='fullcalendar/packages/core/main.css' rel='stylesheet'>
	<link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet'>
	<style type="text/css">
		#wrapper #content-wrapper{
			overflow-x: inherit !important;
		}
	</style>
</head>
<body id="page-top">
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_cuidador.php">
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
					<a href="servicos_disponiveis.php" class="nav-link text-center p-0">
						<i class="far fa-fw fa-comments"></i>
						<span>Serviços disponiveis</span>
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
						<span>Dashboard contratante</span>
					</a>
				</li>
			</div>
		</ul>
		<!-- Fim Sidebar -->

		<!-- Conteúdo da página -->
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Notificações -->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown no-arrow mx-auto">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bell fa-fw"></i>
								<!-- Contador -->
								<span class="badge badge-danger badge-counter">+5</span>
							</a>
							<!-- Mensagens -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header bg-primary border-0">Notificações</h6>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<i class="fas fa-exclamation-circle text-primary mr-3 fa-3x"></i>
									<div>
										<div class="small text-gray-500">
											kdbdbiudaijdba
										</div>
										<span class="font-weight-bold">
											diuwhwihs
										</span>
									</div>
								</a>
							</div>
						</li>
					</ul>
				</nav>

				<!-- Begin Page Content -->
			<div class="container">
				<div class="card my-5">
					<div class="card-header">
						<p class="card-title m-0">#ID</p>
					</div>
					<div class="card-body float-left">
						<i class="far fa-user-circle fa-3x"></i>
						<p class="card-text">Tipo do serviço:</p>
						<p class="card-text">Nome do pasciente:</p>
						<a href="#" class="btn btn-primary">Detalhes</a>
					</div>
					<div class="card-footer text-muted">
						Dias
					</div>
				</div>							
		</div>

		
			<div class="container">
				<div class="card my-5">
					<div class="card-header">
						<p class="card-title m-0">#ID</p>
					</div>
					<div class="card-body float-left">
						<i class="far fa-user-circle fa-3x"></i>
						<p class="card-text">Tipo do serviço:</p>
						<p class="card-text">Nome do pasciente:</p>
						<a href="#" class="btn btn-primary">Detalhes</a>
					</div>
					<div class="card-footer text-muted">
						Dias
					</div>
				</div>				
			</div>			
		</div>

			
			<div class="container">
				<div class="card my-5">
					<div class="card-header">
						<p class="card-title m-0">#ID</p>
					</div>
					<div class="card-body float-left">
						<i class="far fa-user-circle fa-3x"></i>
						<p class="card-text">Tipo do serviço:</p>
						<p class="card-text">Nome do pasciente:</p>
						<a href="#" class="btn btn-primary">Detalhes</a>
					</div>
					<div class="card-footer text-muted">
						Dias
					</div>
				</div>				
			</div>			
		</div>
					
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
	<!-- FullCalendar -->
	<script src='fullcalendar/packages/core/main.js'></script>
	<script src='fullcalendar/packages/daygrid/main.js'></script>
	<script src="funcoes.js"></script>
	<script>

		document.addEventListener('DOMContentLoaded', function() {
			var calendarEl = document.getElementById('calendar');

			var calendar = new FullCalendar.Calendar(calendarEl, {
				plugins: [ 'dayGrid' ],
				defaultView: 'dayGridMonth',
				fixedWeekCount: Boolean, default: true,
				height: 370,
				contentHeight: 4,
				locale: 'pt',
				events: [{
					id: 1,
					title: 'Serviço',
					start: new Date(2019, 8, 11),
					allDay: false,
					className: 'info'
				}],
				header: {
					center: '',
					right: 'today, prev, next'
				}

			});

			calendar.render();
		});

		var agendaFun = 




	</script>
</body>
</html>