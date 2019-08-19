<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="gentelella/production/images/favicon.ico" type="image/ico"/>
	<title>Dashboard</title>
	<!-- Bootstrap -->
	<link href="gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- JQVMap -->
	<link href="gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
	<!-- bootstrap-daterangepicker -->
	<link href="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="gentelella/build/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/dashboard_cuidador.css">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-2 left_col">
				<div class="left_col scroll-view">

					<div class="clearfix"></div>
						
					<div class="text-right">
						<i id="icon-toggle-switch" class="fa fa-toggle-on" style="color: white;" onclick="toggle_button()"></i>
					</div>

					<!-- menu profile -->
					<div class="profile clearfix text-center">
						<div class="profile_pic">
							<img src="gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<h2>John Doe</h2>
						</div>
					</div>
					<!-- end menu profile -->

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu text-center">
								<li>
									<a href="#"><i class="fa fa-edit"></i> Editar perfil</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-calendar"></i> Agenda</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-percent"></i> Ganhos</a>
								</li>
							</ul>
						</div>
					</div>
						<!-- end sidebar menu -->

						<!-- menu footer buttons -->
						<div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" style="float: left;" title="Settings">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" style="float: right;" title="Logout" href="index.php">
								<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</a>
						</div>
						<!-- end menu footer buttons -->
					</div>
				</div>

				<!-- top navigation
				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>
						</nav>
					</div>
				</div>
				end top navigation -->

				<!-- page content -->
				<div class="right_col" role="main">
					<!-- top tiles -->
					<div class="row tile_count">
						<div class="col-md-5 col-sm-4 col-xs-6 tile_stats_count">
							<!-- line graph -->
							<div class="x_panel">
								<div class="x_title">
									<h2>Line Graph</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content2">
									<div id="graph_line" style="width:100%; height:300px;"></div>
								</div>
							</div>
							<!-- end line graph -->
						</div>	
					</div>
					<!-- end top tiles -->

					<!-- calendar -->
					<div class="row">
						<div class="col-md-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Calendar Events <small>Sessions</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Settings 1</a>
												</li>
												<li><a href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">

									<div id='calendar'></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
		</div>
	</div>

	<!-- calendar modal -->
	<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
				</div>
				<div class="modal-body">
					<div id="testmodal" style="padding: 5px 20px;">
						<form id="antoform" class="form-horizontal calender" role="form">
							<div class="form-group">
								<label class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="title" name="title">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Description</label>
								<div class="col-sm-9">
									<textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary antosubmit">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
				</div>
				<div class="modal-body">

					<div id="testmodal2" style="padding: 5px 20px;">
						<form id="antoform2" class="form-horizontal calender" role="form">
							<div class="form-group">
								<label class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="title2" name="title2">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Description</label>
								<div class="col-sm-9">
									<textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
								</div>
							</div>

						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary antosubmit2">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
	<div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
	<!-- /calendar modal -->
	<!-- end calendar -->
	</div>
	</div>
	</div>
	</div>
	<!-- end page content -->

	<!-- footer -->
	<footer>
		<div class="pull-right">
			Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
		</div>
		<div class="clearfix"></div>
	</footer>
	<!-- end footer -->
	</div>
	</div>

	<!-- FullCalendar -->
	    <script src="../vendors/moment/min/moment.min.js"></script>
	    <script src="../vendors/fullcalendar/dist/fullcalendar.min.js"></script>
	<!-- JQuery -->
	<script src="gentelella/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="gentelella/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="gentelella/vendors/nprogress/nprogress.js"></script>
	<!-- Chart.js -->
	<script src="gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
	<!-- Gauge.js -->
	<script src="gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
	<!-- Bootstrap-progressbar -->
	<script src="gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- ICheck -->
	<script src="gentelella/vendors/iCheck/icheck.min.js"></script>
	<!-- Skycons -->
	<script src="gentelella/vendors/skycons/skycons.js"></script>
	<!-- Flot -->
	<script src="gentelella/vendors/Flot/jquery.flot.js"></script>
	<script src="gentelella/vendors/Flot/jquery.flot.pie.js"></script>
	<script src="gentelella/vendors/Flot/jquery.flot.time.js"></script>
	<script src="gentelella/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="gentelella/vendors/Flot/jquery.flot.resize.js"></script>
	<!-- Flot plugins -->
	<script src="gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
	<!-- DateJS -->
	<script src="gentelella/vendors/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	<script src="gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<!-- Bootstrap-daterangepicker -->
	<script src="gentelella/vendors/moment/min/moment.min.js"></script>
	<script src="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- Custom Theme Scripts -->
	<script src="gentelella/build/js/custom.min.js"></script>

	<script type="text/javascript">

		function toggle_button(){
			var toggle_switch = window.document.getElementById('icon-toggle-switch');

			if(toggle_switch.className == 'fa fa-toggle-on')
				toggle_switch.className = 'fa fa-toggle-off';
			else
				toggle_switch.className = 'fa fa-toggle-on';
		}

	</script>

</body>
</html>