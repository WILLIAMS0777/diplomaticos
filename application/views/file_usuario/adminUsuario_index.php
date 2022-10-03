<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles">ADMINISTRACION <small>.</small></h1>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">ADMINISTRACION DE USUARIOS</h3>
	<a href="<?php echo base_url(); ?>nuevoUsuario" class="btn btn-primary"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO</a>
	<a href="" target="_blank" class="btn btn-warning"><i></i> &nbsp; REPORTES PDF</a>
	<a href="" target="_blank" class="btn btn-success"><i></i> &nbsp; REPORTES EXCEL</a>

	<!-- <a href="" target="_blank" class="btn btn-warning btn-raised">REPORTES PDF</a> -->


	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; USUARIOS</h3>
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
								<th class="text-center">ROL</th>
								<th class="text-center">ESTADO</th>
								<th class="text-center">FECHA</th>
								<th class="text-center">ACCION</th>
							</tr>
						</thead>
						<tbody>
							<?php $con=1; foreach ($this->Model_usuario->listar_usuarios() as $objeto) { ?>
							<tr>
								<td><?php echo $con++; ?></td>
								<td><img width="40" src="<?php echo base_url()?>assets/imagenes/<?php echo $objeto->imagen; ?>" alt=""></td>
								<td><?php echo $objeto->ci.' '.$objeto->expedido; ?></td>
								<td><?php echo $objeto->nombre.' '.$objeto->paterno.' '.$objeto->materno; ?></td>
								<td><?php echo $objeto->roles; ?></td>
								<td>
									<?php if($objeto->estado=='activo') { ?>
										<button type="button" class="btn btn-success btn-raised" onclick="cambiar_estado_usuario('<?php echo $objeto->idusuario; ?>','1')">ACTIVO</button>
									<?php }else{ ?>
										<button type="button" class="btn btn-danger btn-raised" onclick="cambiar_estado_usuario('<?php echo $objeto->idusuario; ?>','0')">INACTIVO</button>
									<?php } ?>
								</td>
								<td><?php echo $objeto->fecha_registro; ?></td>
								<td>
									<a href="<?php echo base_url() ?>editarUsuario/<?php echo $objeto->idusuario; ?>" class="btn btn-info btn-raised">EDITAR</a>
									<a href="javascript:;" class="btn btn-danger btn-raised" onclick="eliminar_usuario('<?php echo $objeto->idusuario; ?>')">ELIMINAR</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>

				<!-- 
				<nav class="text-center">
					<ul class="pagination pagination-sm">
						<li class="disabled"><a href="javascript:void(0)">«</a></li>
						<li class="active"><a href="javascript:void(0)">1</a></li>
						<li><a href="javascript:void(0)">2</a></li>
						<li><a href="javascript:void(0)">3</a></li>
						<li><a href="javascript:void(0)">4</a></li>
						<li><a href="javascript:void(0)">5</a></li>
						<li><a href="javascript:void(0)">»</a></li>
					</ul>
				</nav>
				-->

			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready( function (){
    	$('#table_id').DataTable();
	});
	function cambiar_estado_usuario(idusuario,estado){
		$.post('cambiar_estado_usuario', {idusuario,estado}, function(){
			window.location='';
		});
	}
	function eliminar_usuario(idusuario){
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
			$.post('eliminar_usuario', {idusuario}, function(){
			window.location='';
			});
		});
	}
</script>