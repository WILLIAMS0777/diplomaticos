<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
</head>
<body>
	<div class="full-box login-container cover">
		<form id="login" method="post" autocomplete="off" class="logInForm">
			<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
			<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
			<div class="form-group label-floating">
			  <label class="control-label" for="UserName">USUARIO</label>
			  <input class="form-control" id="UserName" type="text" name="user">
			  <p class="help-block">Escribe tú nombre de usuario</p>
			</div>
			<div class="form-group label-floating">
			  <label class="control-label" for="UserPass">CONTRASEÑA</label>
			  <input class="form-control" id="UserPass" type="password" name="pass">
			  <p class="help-block">Escribe tú contraseña</p>
			</div>
			<div class="form-group" id="error">
				
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Iniciar sesión" class="btn btn-info" style="color: #FFF;">
			</div>
		</form>
	</div>
	<!--====== Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/ripples.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/sweetalert2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script>
		$.material.init();

		$("#login").submit(function(event){
			event.preventDefault();
			$.ajax({
				url:'login',
				type:'post',
				data:$("form").serialize(),
				success:function(datos){
					var valores=eval(datos)
					if(valores[0]===0){
						$("#error").html("<b style='color:#ff0000;'>ERROR DE USUARIO Y CONTRASEÑA</b>");
					}else{
						window.location="<?php echo base_url().'adminInicio'; ?>"
					}
				}
			})
		});
	</script>
</body>
</html>