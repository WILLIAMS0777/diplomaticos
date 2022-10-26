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
							<th>#</th>
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
							<?php $con=1; foreach ($this->Model_aviso->listar_programacion()  as $item):?>
									<tr>
									<td><?php echo $con++; ?></td>
									<?php 
									switch ($item->dia){
										case 'LUNES':
												echo "<td>".$item->hora_salida." - ".$item->placa." - ".$item->nombre." - </td>";
											break;
											
										case 'MARTES':
											echo "<td> </td>";
											echo "<td>".$item->hora_salida." - ".$item->placa." - ".$item->nombre." - </td>";
												break;

										case 'MIERCOLES':
											echo "<td> </td>";
											echo "<td>".$item->placa." - ".$item->nombre." - </td>";
												break;
										
										default:
											# code...
											break;
									}
									?>
							</tr>
								

							<?php endforeach; ?>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>