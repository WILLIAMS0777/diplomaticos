<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles"> PROGRAMACION <small>.</small></h1>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">ADMINISTRACION DE COMUNICADOS</h3>
	<a href="<?php echo base_url(); ?>nuevoCoumnicado" class="btn btn-primary"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVAE PROGRAMACION</a>
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; PROGRAMACION</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover text-center">
						<thead>
						<tr>
                        	<th class="zui-sticky-col">HORARIO</th>
                            <th>LUNES</th>
                            <th>MARTES</th>
                            <th>MIERCOLES</th>
                            <th>JUEVES</th>
                            <th>VIERNES</th>
                        	<th>SABADO</th>
                            <th>DOMINGO</th>
                        </tr>
						</thead>
						<tbody>
							<?php foreach ($this->Model_aviso->listar_programacion() as $objeto) { ?>
							<tr>
								
								<td><?php echo $objeto->hora_salida; ?></td>
								<td><?php echo $objeto->imagen; ?> <br>
								 	<?php echo $objeto->nombre.' '.$objeto->paterno.' '.$objeto->materno; ?> <br>
								  	<?php echo $objeto->placa; ?> <br> 
									<button class="btnEdit">editar</button>
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