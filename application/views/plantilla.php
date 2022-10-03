<?php if ($this->session->userdata('session')){?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				diplomaticos <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="<?php echo base_url(); ?>assets/assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles">Usuario</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="my-data.html" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="my-account.html" title="Mi cuenta">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="<?php echo base_url(); ?>adminInicio">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>adminInicio">
						<i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Istitucion
					</a>
				</li>
				<li>

					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Administracion <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo base_url(); ?>adminUsuario"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Admin Usuarios</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>privilegios"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Privilegios</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>roles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Roles</a>
						</li>
						
					</ul>
					
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Avisos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo base_url(); ?>programacion"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Programacion</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>comunicado"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Comunicados</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>eventos"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Eventos</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Reportes <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo base_url(); ?>comunicado"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Reporte de usuarios</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Graficos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo base_url(); ?>comunicado"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Grafico de  usuarios</a>
						</li>

					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>
		
		<!-- Content page -->
		<?php $this->load->view($contenido); ?>
	</section>

	<!--====== Scripts -->
	
	<script src="<?php echo base_url(); ?>assets/js/sweetalert2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/ripples.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>

<?php }else{ redirect(base_url().'salir'); } ?>