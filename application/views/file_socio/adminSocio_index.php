<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
-->

<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles">SOCIOS <small>.</small></h1>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">ADMINISTRACION DE SOCIOS</h3>
	<a href="<?php echo base_url(); ?>nuevoSocio" class="btn btn-primary"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO SOCIO</a>
	<a href="<?php echo base_url(); ?>listarUsuarioPdf" target="_blank" class="btn btn-warning"><i></i> &nbsp; REPORTES PDF SOCIOS ACTIVOS</a>
	<a href="<?php echo base_url(); ?>listarUsuarioPdf" target="_blank" class="btn btn-warning"><i></i> &nbsp; REPORTES PDF SOCIOS INACTIVOS</a>
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; SOCIOS</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover text-center" id="table_id">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">IMAGEN</th>
                                <th class="text-center">CARNET</th>
								<th class="text-center">NOMBRES Y APELLIDOS</th>
								<th class="text-center">PLACA DEL AUTO</th>
								<th class="text-center">ESTADO</th>
								<th class="text-center">ACCION</th>
							</tr>
						</thead>
						<tbody>
						<?php $con=1; foreach ($this->Model_aviso->listar_socios() as $objeto) { ?>
							<tr>
								<td><?php echo $con++; ?></td>
								<td><img width="40" src="<?php echo base_url()?>assets/imagenes_socio/<?php echo $objeto->imagen; ?>" alt=""></td>
								<td><?php echo $objeto->ci; ?></td>
								<td><?php echo $objeto->nombre.' '.$objeto->paterno.' '.$objeto->materno; ?></td>
								<td><?php echo $objeto->placa; ?></td>
								<td>
									<?php if($objeto->estado=='activo') { ?>
										<button type="button" class="btn btn-success btn-raised" onclick="cambiar_estado_socio('<?php echo $objeto->idsocio; ?>','1')">ACTIVO</button>
									<?php }else{ ?>
										<button type="button" class="btn btn-danger btn-raised" onclick="cambiar_estado_socio('<?php echo $objeto->idsocio; ?>','0')">INACTIVO</button>
									<?php } ?>
								</td>

								<td>
									<a href="" class="btn btn-info btn-raised">EDITAR</a>
									<a href="javascript:;" class="btn btn-danger btn-raised" onclick="eliminar_socio('<?php echo $objeto->idsocio; ?>')">ELIMINAR</a>
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
	function cambiar_estado_socio(idsocio,estado){
		$.post('cambiar_estado_socio', {idsocio,estado}, function(){
			window.location='';
		});
	}
	function eliminar_socio(idsocio){
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
			$.post('eliminar_socio', {idsocio}, function(){
			window.location='';
			});
		});
	}
</script>