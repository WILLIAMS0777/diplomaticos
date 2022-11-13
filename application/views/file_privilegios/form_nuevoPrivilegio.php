<div class="container-fluid">
	<div class="page-header">
	  <h2 class="text-titles">ADMINISTRACION <small>.</small></h2>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">FORMULARIO NUEVO PRIVILEGIO</h3>
</div>
<div class="container-fluid">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO PRIVILEGIO</h3>
		</div>
		<div class="panel-body">
			<form id="guardarNuevoPrivilegio" method="post">
		    	<fieldset>
		    		<div class="container-fluid">
		    			<div class="row">
                            <div class="col-lg-3">
								<div class="from-group">
									<label>SELECCIONE MENU</label>
									<select name="idmenus" id="idmenus" class="form-control" required>
										<option></option>
										<?php foreach ($this->db->get('menus')->result() as $obj) { ?>
											<option value="<?php echo $obj->idmenus ?>"><?php echo $obj->menus ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
                            <div class="col-lg-3">
								<div class="from-group">
									<label>SELECCIONE ROL</label>
									<select name="idrol" id="idrol" class="form-control" required>
										<option></option>
										<?php foreach ($this->db->get('rol')->result() as $obj) { ?>
											<option value="<?php echo $obj->idrol ?>"><?php echo $obj->roles ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
		    			</div>
		    		</div>
		    		<button type="submit" id="boton" class="btn btn-primary btn-raised">GUARDAR DATOS</button>
		    		<a href="privilegios" class="btn btn-danger btn-raised">SALIR</a>
		    	</fieldset>
		    	<br>
		    </form>
		</div>
	</div>
</div>
<script>
	$("#guardarNuevoPrivilegio").submit(function(event){
		event.preventDefault();
		var formData=new FormData($("#guardarNuevoPrivilegio")[0]);
		$.ajax({
			url:'guardarNuevoPrivilegio',
			type:'post',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,
			success:function(){
				alert('REGISTRO EXITOSO')
				window.location='<?php echo base_url(); ?>privilegios';
			}
		});
	});
</script>