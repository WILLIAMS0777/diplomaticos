<div class="container-fluid">
	<div class="page-header">
	  <h2 class="text-titles">ADMINISTRACION <small>.</small></h2>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">FORMULARIO NUEVO USUARIO</h3>
</div>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO</h3>
		</div>
		<div class="panel-body">
			<form id="guardarNuevoMenu" method="post">
		    	<fieldset>
		    		<div class="container-fluid">
		    			<div class="row">
							<div class="col-lg-6">
								<div class="from-group">
									<label>MENUS</label>
									<input type="text" name="menus" id="menus" class="form-control" required placeholder="Ingresar menu...">
								</div>
							</div>
		    			</div>
		    		</div>
		    		<button type="submit" id="boton" class="btn btn-primary btn-raised">GUARDAR DATOS</button>
		    		<a href="adminUsuario" class="btn btn-danger btn-raised">SALIR</a>
		    	</fieldset>
		    	<br>
		    </form>
		</div>
	</div>
</div>
<script>
	$("#guardarNuevoMenu").submit(function(event){
		event.preventDefault();
		var formData=new FormData($("#guardarNuevoMenu")[0]);
		$.ajax({
			url:'guardarNuevoMenu',
			type:'post',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,
			success:function(){
				alert('REGISTRO EXITOSO')
				window.location='<?php echo base_url(); ?>menus';
			}
		});
	});
</script>