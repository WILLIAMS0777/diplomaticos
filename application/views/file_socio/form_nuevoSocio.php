<div class="container-fluid">
	<div class="page-header">
	  <h2 class="text-titles">ADMINISTRACION <small>.</small></h2>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">FORMULARIO NUEVO SOCIO</h3><br>
</div>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO SOCIO</h3>
		</div>
		<div class="panel-body">
			<form id="guardarNuevoSocio" method="post">
		    	<fieldset>
		    		<div class="container-fluid">
		    			<div class="row">
		    				<div class="col-lg-3">
								<div class="from-group">
									<label>CANERT</label>
									<input type="text" name="ci" id="ci" class="form-control" required placeholder="Ingresar carnet...">
								</div>
							</div>
							<div class="col-lg-3">
								<div class="from-group">
									<label>EXPEDIDO</label>
									<select name="expedido" id="expedido" class="form-control" required>
										<option></option>
										<option value="LP">LP</option>
										<option value="CBB">CBB</option>
										<option value="TJ">TJ</option>
										<option value="PD">PD</option>
										<option value="BN">BN</option>
										<option value="STC">STC</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="from-group">
									<label>NOMBRE</label>
									<input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Ingresar nombre...">
								</div>
							</div>
		    				<div class="col-lg-3">
								<div class="from-group">
									<label>AP. PATERNO</label>
									<input type="text" name="paterno" id="paterno" class="form-control" placeholder="Ingresar paterno...">
								</div>
							</div>
							<div class="col-lg-3">
								<div class="from-group">
									<label>AP. MATERNO</label>
									<input type="text" name="materno" id="materno" class="form-control" placeholder="Ingresar materno...">
								</div>
							</div>
							<div class="col-lg-3">
								<div class="from-group">
									<label>PLACA DEL VEHICULO</label>
									<input type="text" name="placa" id="placa" class="form-control" placeholder="Ingresar placa del vehiculo...">
								</div>
							</div>
							
							<div class="col-lg-3">
								<div class="from-group">
									<label>IMAGEN</label>
									<input type="file" name="imagen" id="imagen" accept="image/*">
								</div>
							</div>
							
		    			</div>
		    		</div>
		    		<button type="submit" id="boton" class="btn btn-primary btn-raised">GUARDAR DATOS</button>
		    		<a href="socio" class="btn btn-danger btn-raised">SALIR</a>
		    	</fieldset>
		    	<br>
		    </form>
		</div>
	</div>
</div>
<script>
	$("#guardarNuevoSocio").submit(function(event){
		event.preventDefault();
		var formData=new FormData($("#guardarNuevoSocio")[0]);
		$.ajax({
			url:'guardarNuevoSocio',
			type:'post',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,
			success:function(){
				alert('REGISTRO EXITOSO')
				window.location='<?php echo base_url(); ?>socio';
			}
		});
	});
</script>