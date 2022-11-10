<div class="container-fluid">
	<div class="page-header">
	  <h2 class="text-titles">ADMINISTRACION <small>.</small></h2>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">FORMULARIO NUEVO REGISTRO DE INSTITUCION</h3>
</div>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; INSTITUCION</h3>
		</div>
		<div class="panel-body">
			<form id="guardarEditarUsuario" method="post">
		    	<fieldset>
		    		<div class="container-fluid">
		    			<div class="row">

                        <div class="col-lg-12">
								<div class="from-group">
                                <h4><strong>LOGO DE LA INSTITUCION</strong></h4>
									<input type="file" name="imagen" id="imagen" accept="image/*">
								</div>
							</div><br><br><br>

		    				<div class="col-lg-12">
								<div class="from-group">
                                <h4><strong>NOMBRE DE LA INSTITUCION</strong></h4>
									<input type="text" value="<?php echo $obj->in_nombre; ?>" class="form-control" disabled placeholder="Ingresar carnet...">
								</div>
							</div>
                            <div class="col-lg-12">
								<div class="from-group">
                                <h4><strong>DESCRIPCION</strong></h4>
									<input type="text" value="<?php echo $obj->in_descripcion; ?>" name="in_descripcion" id="in_descripcion" class="form-control" placeholder="Ingresar materno...">
                                   
								</div>
							</div>
                            <div class="col-lg-12">
								<div class="from-group">
									<label>MISION</label>
									<input type="text" value="<?php echo $obj->in_mision; ?>" name="in_mision" id="in_mision" class="form-control" placeholder="Ingresar materno...">
								</div>
							</div>
                            <div class="col-lg-12">
								<div class="from-group">
									<label>VISION</label>
									<input type="text" value="<?php echo $obj->in_vision; ?>" name="in_vision" id="in_vision" class="form-control" placeholder="Ingresar materno...">
								</div>
							</div>
                            <div class="col-lg-12">
								<div class="from-group">
									<label>OBJETIVO</label>
									<input type="text" value="<?php echo $obj->in_objetivo; ?>" name="in_objetivo" id="in_objetivo" class="form-control" placeholder="Ingresar materno...">
								</div>
							</div>
                            <div class="col-lg-3">
								<div class="from-group">
									<label>AP. MATERNO</label>
									<input type="text" value="<?php echo $obj->materno; ?>" name="materno" id="materno" class="form-control" placeholder="Ingresar materno...">
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
		    		<a href="<?php echo base_url(); ?>adminUsuario" class="btn btn-danger btn-raised">SALIR</a>
		    	</fieldset>
		    	<br>
		    </form>
		</div>
	</div>
</div>
<script>
	$("#guardarEditarUsuario").submit(function(event){
		event.preventDefault();
		var formData=new FormData($("#guardarEditarUsuario")[0]);
		$.ajax({
			url:'<?php echo base_url(); ?>guardarEditarUsuario',
			type:'post',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,
			success:function(){
				alert('REGISTRO EXITOSO')
				window.location='<?php echo base_url(); ?>adminUsuario';
			}
		});
	});

</script>

