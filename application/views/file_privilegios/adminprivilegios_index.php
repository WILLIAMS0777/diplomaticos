<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles">ADMINISTRACION <small>.</small></h1>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">ADMINISTRACION DE PRIVILEGIOS</h3>
	<a href="<?php echo base_url(); ?>nuevoPrivilegio" class="btn btn-primary"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO PRIVILEGIO</a>
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; PRIVILEGIOS</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover text-center" id="table_id">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">MENU</th>
								<th class="text-center">ROL</th>
                                <th class="text-center">ESTADO</th>
								<th class="text-center">ACCION</th>
							</tr>
						</thead>
						<tbody>
							<?php $con=1; foreach ($this->Model_usuario->listar_privilegios() as $objeto) { ?>
							<tr>
								<td><?php echo $con++; ?></td>
								<td><?php echo $objeto->menus; ?></td>
                                <td><?php echo $objeto->roles; ?></td>
								<td>
									<?php if($objeto->p_estado=='activo') { ?>
										<button type="button" class="btn btn-success btn-raised" onclick="cambiar_estado_privilegio('<?php echo $objeto->idprivilegios; ?>','1')">ACTIVO</button>
									<?php }else{ ?>
										<button type="button" class="btn btn-danger btn-raised" onclick="cambiar_estado_privilegio('<?php echo $objeto->idprivilegios; ?>','0')">INACTIVO</button>
									<?php } ?>
								</td>
								<td>
									<a href="<?php echo base_url() ?>editarMenus/<?php echo $objeto->idprivilegios; ?>" class="btn btn-info btn-raised">EDITAR</a>
									<a href="javascript:;" class="btn btn-danger btn-raised" onclick="eliminar_privilegios('<?php echo $objeto->idprivilegios; ?>')">ELIMINAR</a>
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
	/*$(document).ready( function (){
    	$('#table_id').DataTable();
	});*/
    function cambiar_estado_privilegio(idprivilegios,p_estado){
		$.post('cambiar_estado_privilegio', {idprivilegios,p_estado}, function(){
			window.location='';
		});
	}
	function eliminar_privilegios(idprivilegios){
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
			$.post('eliminar_privilegios', {idprivilegios}, function(){
			window.location='';
			});
		});
	}
</script>