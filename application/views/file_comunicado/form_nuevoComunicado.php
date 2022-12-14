<div class="container-fluid">
	<div class="page-header">
	  <h2 class="text-titles">COMUNICADOS <small>.</small></h2>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">FORMULARIO NUEVO COMUNICADO</h3>
</div>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO COMUNICADO</h3>
		</div>
		<div class="panel-body">
			<form id="guardarNuevoComunicado" method="post">
		    	<fieldset>
		    		<div class="container-fluid">
		    			<div class="row">
		    				<div class="col-lg-3">
								<div class="from-group">
									<label>TITULO</label>
									<input type="text" name="titulo" id="titulo" class="form-control" required placeholder="Ingresar titulo...">
								</div>
							</div>
							
							<div class="col-lg-3">
								<div class="from-group">
									<label>DESCRIPCION</label>
									<input type="text" name="descripcion" id="descripcion" class="form-control" required placeholder="Ingresar descripcion...">
								</div>
							</div>
							<div class="col-lg-3">
								<div class="from-group">
									<label>IMAGEN</label>
									<input type="file" name="imagen" id="imagen" accept="image/*">
								</div>
							</div>
		    				<div class="col-lg-3">
								<div class="from-group">
									<label>TIPO</label>
									<select name="idtipo" id="idtipo" class="form-control" required>
										<option></option>
										<?php foreach ($this->db->get('tipo')->result() as $obj) { ?>
											<option value="<?php echo $obj->idtipo ?>"><?php echo $obj->tipos ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
		    			</div>
		    		</div>
		    		<button type="submit" id="boton" class="btn btn-primary btn-raised">GUARDAR DATOS</button>
		    		<a href="comunicado" class="btn btn-danger btn-raised">SALIR</a>
		    	</fieldset>
		    	<br>
		    </form>
		</div>
	</div>
</div>

<script>
	$("#guardarNuevoComunicado").submit(function(event){
		event.preventDefault();
		var formData=new FormData($("#guardarNuevoComunicado")[0]);
		$.ajax({
			url:'guardarNuevoComunicado',
			type:'post',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,
			success:function(){
				alert('REGISTRO EXITOSO')
				window.location='<?php echo base_url(); ?>comunicado';
			}
		});
	});
</script>
