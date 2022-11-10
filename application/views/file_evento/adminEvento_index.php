<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
-->

<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles">EVENTOS <small>.</small></h1>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">ADMINISTRACION DE EVENTOS</h3>
	<a href="<?php echo base_url(); ?>nuevoEvento" class="btn btn-primary"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO EVENTO</a>
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; EVENTOS</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover text-center" id="table_id">
						<thead>
							<tr>
								<th style="text-align:center" class="text-center">#</th>
								<th style="text-align:center" class="text-center">IMAGEN</th>
								<th style="text-align:center" class="text-center">TITULO</th>
								<th style="text-align:center" class="text-center">DESCRIPCION</th>
								<th style="text-align:center" class="text-center">FECHA DEL EVENTO</th>
								<th style="text-align:center" class="text-center">ESTADO</th>
								<th style="text-align:center" class="text-center">ACCION</th>
							</tr>
						</thead>
						<tbody>
							<?php $con=1; foreach ($this->Model_aviso->listar_evento() as $objeto) { ?>
							<tr>
								<td><?php echo $con++; ?></td>
								<td><img width="40" src="<?php echo base_url()?>assets/imagenes_evento/<?php echo $objeto->imagen; ?>" alt=""></td>
								<td><?php echo $objeto->titulo; ?></td>
								<td><?php echo $objeto->descripcion; ?></td>
								<td><?php echo $objeto->fecha_evento; ?></td>
								<td>
									<?php if($objeto->estado=='activo') { ?>
										<button type="button" class="btn btn-success btn-raised" onclick="cambiar_estado_evento('<?php echo $objeto->ideventos; ?>','1')">ACTIVO</button>
									<?php }else{ ?>
										<button type="button" class="btn btn-danger btn-raised" onclick="cambiar_estado_evento('<?php echo $objeto->ideventos; ?>','0')">INACTIVO</button>
									<?php } ?>
								</td>
								<td>
									<a href="<?php echo base_url() ?>editarEvento/<?php echo $objeto->ideventos; ?>" class="btn btn-info btn-raised">EDITAR</a>

									<a href="javascript:;" class="btn btn-danger btn-raised" onclick="eliminar_evento('<?php echo $objeto->ideventos; ?>')">ELIMINAR</a>
								</td>
								
							</tr>
							<?php } ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready( function (){
    	$('#table_id').DataTable();
	});
	function cambiar_estado_evento(ideventos,estado){
		$.post('cambiar_estado_evento', {ideventos,estado}, function(){
			window.location='';
		});
	}
	function eliminar_evento(ideventos){
		swal({
		  	title: 'USTED ESTA SEGURO DE ELIMINAR?',
		  	text: "------------------------------------------",
		  	type: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#03A9F4',
		  	cancelButtonColor: '#F44336',
		  	confirmButtonText: '<i class="zmdi zmdi-run"></i> ACEPTAR',
		  	cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> CANCELAR'
		}).then(function () {
			$.post('eliminar_evento', {ideventos}, function(){
			window.location='';
			});
		});
	}
</script>