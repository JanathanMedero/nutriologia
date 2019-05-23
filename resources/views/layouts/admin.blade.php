<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('admin-lte/font-awesome/css/font-awesome.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('admin-lte/css/adminlte.min.css') }}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{ asset('admin-lte/iCheck/flat/blue.css') }}">
	<!-- Morris chart -->
	<link rel="stylesheet" href="{{ asset('admin-lte/morris/morris.css') }}">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{ asset('admin-lte/jvectormap/jquery-jvectormap-1.2.2.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('admin-lte/datepicker/datepicker3.css') }}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{ asset('admin-lte/daterangepicker/daterangepicker-bs3.css') }}">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="{{ asset('admin-lte/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	{{-- Datatables --}}
	<link rel="stylesheet" href="{{ asset('admin-lte/datatables/dataTables.bootstrap4.css') }}">
	<title>@yield('title')</title>

</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Inicio</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Configuración</a>
				</li>
			</ul>

			<!-- Logout -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fa fa-sign-out"></i></a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="{{ asset('admin-lte/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
				style="opacity: .8">
				<span class="brand-text font-weight-light">Nutriología</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="{{ asset('images/'.$user->picture) }}" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">{{ $user->name }}</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
          	{{-- menu-open en li para mantener el menu abierto (usar en operacion ternaria) --}}
          	<li class="nav-item has-treeview">
          		<a href="#" class="nav-link">
          			<i class="nav-icon fa fa-dashboard"></i>
          			<p>
          				Dashboard
          				<i class="right fa fa-angle-left"></i>
          			</p>
          		</a>
          		<ul class="nav nav-treeview">
          			<li class="nav-item">
          				<a href="#" class="nav-link">
          					<i class="fa fa-circle-o nav-icon"></i>
          					<p>Dashboard v1</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="#" class="nav-link">
          					<i class="fa fa-circle-o nav-icon"></i>
          					<p>Dashboard v2</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="#" class="nav-link">
          					<i class="fa fa-circle-o nav-icon"></i>
          					<p>Dashboard v3</p>
          				</a>
          			</li>
          		</ul>
          	</li>
          	<li class="nav-item">
          		<a href="{{ route('patients.index') }}" class="nav-link {{ request()->is('patients') ? 'active' : '' }} ">
          			<i class="nav-icon fa fa-users" aria-hidden="true"></i>
          			<p>
          				Pacientes
          			</p>
          		</a>
          	</li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		@yield('content')
	</section>

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; 2019 <a href="#">Nutriología</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.0.0
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>


<!-- jQuery -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin-lte/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('admin-lte/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin-lte/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('admin-lte/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('admin-lte/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin-lte/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('admin-lte/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('admin-lte/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin-lte/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('admin-lte/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin-lte/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin-lte/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin-lte/js/demo.js') }}"></script>
{{-- Datatables --}}
<script src="{{ asset('admin-lte/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin-lte/datatables/dataTables.bootstrap4.js') }}"></script>
</body>
</html>
