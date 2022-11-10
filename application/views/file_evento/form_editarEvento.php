<div class="container-fluid">
	<div class="page-header">
	  <h2 class="text-titles">ADMINISTRACION <small>.</small></h2>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">FORMULARIO NUEVO EVENTO</h3>
</div>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO EVENTO</h3>
		</div>
		<div class="panel-body">
			<form id="guardarEditarEvento" method="post">
		    	<fieldset>
		    		<div class="container-fluid">
		    			<div class="row">
		    				<div class="col-lg-3">
								<div class="from-group">
									<label>TITULO</label>
									<input type="text" value="<?php echo $obj->titulo; ?>" name="titulo" id="titulo" class="form-control" required placeholder="Ingresar titulo...">
								</div>
							</div>
							<div class="col-lg-3">
								<div class="from-group">
									<label>DESCRIPCION</label>
									<input type="text" value="<?php echo $obj->descripcion; ?>" name="descripcion" id="descripcion" class="form-control" required placeholder="Ingresar descripcion...">
								</div>
							</div>
							<div class="col-lg-3">
								<div class="from-group">
									<label>IMAGEN</label>
									<input type="file" name="imagen" id="imagen" accept="image/*">
								</div>
							</div>

							<input type="hidden" name="imagen_a" value="<?php echo $obj->imagen; ?>">
							
		    			</div>
		    		</div>
		    		<button type="submit" id="boton" class="btn btn-primary btn-raised">GUARDAR DATOS</button>
		    		<a href="<?php echo base_url(); ?>adminComunicado" class="btn btn-danger btn-raised">SALIR</a>
		    	</fieldset>
		    	<br>
		    </form>
		</div>
	</div>
</div>
<script>
	$("#guardarEditarEvento").submit(function(event){
		
		event.preventDefault();
		var formData=new FormData($("#guardarEditarEvento")[0]);
		$.ajax({
			url:'<?php echo base_url(); ?>guardarEditarEvento',
			type:'post',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,
			success:function(){
				alert('REGISTRO EXITOSO')
				window.location='<?php echo base_url(); ?>evento';
			}
		});
	});

</script>