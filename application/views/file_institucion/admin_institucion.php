<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles">INSTITUCION <small>.</small></h1>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center">SOBRE LA INSTITUCION</h3><br>
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; INSTITUCION</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
                    
                    <div class="col-md-8">
                        <div class="form-group ">
                            <h4><strong>LOGO DE LA INSTITUCION</strong></h4>
                            <td><img src="<?php echo base_url()?>assets/imagenes_institucion/<?php echo $obj->in_logo; ?>" width="200" height="200" alt=""></td>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>NOMBRE DE LA INSTITUCION</strong></h4>
                        <td><?php echo $obj->in_nombre; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>DESCRIPCION</strong></h4>
                        <td><?php echo $obj->in_descripcion; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>MISION</strong></h4>
                        <td><?php echo $obj->in_mision; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>VISION</strong></h4>
                        <td><?php echo $obj->in_vision; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>OBJETIVO</strong></h4>
                        <td><?php echo $obj->in_objetivo; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>CORREO</strong></h4>
                        <td><?php echo $obj->in_correo; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>CELULAR</strong></h4>
                        <td><?php echo $obj->in_celular; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>FACEBOOK</strong></h4>
                        <td><?php echo $obj->in_facebook; ?></td>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>UBICACION GOOGLE MAPS</strong></h4>
                        <td><?php echo $obj->in_google_maps; ?></td>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group ">
                            <h4><strong>IMAGEN DEL PRESIDENTE DE LA INSTITUCION</strong></h4>
                            <td><img src="<?php echo base_url()?>assets/imagenes_institucion/<?php echo $obj->in_imagen_strio_general; ?>" width="200" height="200" alt=""></td>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group ">
                        <h4><strong>NOMBRE DEL PRESIDENTE</strong></h4>
                        <td><?php echo $obj->in_nombre_strio_general; ?></td>
                        </div>
                    </div>
                    
                    <a href="<?php echo base_url() ?>editarInstitucion/<?php echo $obj->idinstitucion; ?>" class="btn btn-info btn-raised">ACTUALIZAR LOS DATOS DE LA INSTITUCION</a>
                    
				</div>
			</div>
		</div>
	</div>
</div>