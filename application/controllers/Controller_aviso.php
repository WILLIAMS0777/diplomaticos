<?php
class Controller_aviso extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_aviso');
	}

	//inicio socio
	public function socio()
	{
		$datos['contenido'] = "file_socio/adminSocio_index";
		$this->load->view('plantilla', $datos);
	}
	public function nuevoSocio()
	{
		$datos['contenido'] = "file_socio/form_nuevoSocio";
		$this->load->view('plantilla', $datos);
	}
	public function guardarNuevoSocio()
	{
		$ci = $this->input->post('ci');
		$placa = $this->input->post('placa');
		$expedido = $this->input->post('expedido');
		$nombre = mb_strtoupper($this->input->post('nombre'), 'utf-8');
		$paterno = mb_strtoupper($this->input->post('paterno'), 'utf-8');
		$materno = mb_strtoupper($this->input->post('materno'), 'utf-8');
		$idpersona = $this->input->post('idpersona');
		$idplaca = $this->input->post('idplaca');

		$imagen = $_FILES['imagen']['tmp_name'];
		if ($imagen) {
			$ext = explode('.', $_FILES['imagen']['name']);
			$img = round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'], "assets/imagenes_socio/soc_" . $img);
			$imagen = "soc_" . $img;
		} else {
			$imagen = '';
		}
		if ($idpersona == 0) {
			$objeto = array(
				'ci' => $ci,
				'expedido' => $expedido,
				'nombre' => $nombre,
				'paterno' => $paterno,
				'materno' => $materno
			);
			$idpersona = $this->Model_aviso->insertar_tabla_sys('persona', $objeto);
		}
		$objeto1 = array(
			'imagen' => $imagen,
			'estado' => 'activo',
			'idpersona' => $idpersona
		);
		$this->Model_aviso->insertar_tabla_sys('socio', $objeto1);
		$objeto2 = array(
			'idplaca' => $idplaca
		);
		$this->Model_aviso->insertar_tabla_sys('placa', $objeto2);
	}

	public function cambiar_estado_socio()
	{
		$idsocio = $this->input->post('idsocio');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_aviso->editar_tabla_sys('socio', $obj, 'idsocio', $idsocio);
	}
	public function eliminar_socio()
	{
		$idsocio = $this->input->post('idsocio');
		$obj = array('estado' => 'eliminar');
		$this->Model_aviso->editar_tabla_sys('socio', $obj, 'idsocio', $idsocio);
	}
	//fin socio

	//inicio comunicado
	public function comunicado()
	{
		$datos['contenido'] = "file_comunicado/adminComunicado_index";
		$this->load->view('plantilla', $datos);
	}
	public function nuevoComunicado()
	{
		$datos['contenido'] = "file_comunicado/form_nuevoComunicado";

		$this->load->view('plantilla', $datos);
	}
	public function guardarNuevoComunicado()
	{
		$titulo = mb_strtoupper($this->input->post('titulo'), 'utf-8');
		$descripcion = $this->input->post('descripcion');
		$idtipo = $this->input->post('idtipo');
		$imagen = $_FILES['imagen']['tmp_name'];
		if ($imagen) {
			$ext = explode('.', $_FILES['imagen']['name']);
			$img = round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'], "assets/imagenes_comunicado/comu_" . $img);
			$imagen = "comu_" . $img;
		} else {
			$imagen = '';
		}
		$objeto = array(
			'imagen' => $imagen,
			'titulo' => $titulo,
			'descripcion' => $descripcion,
			'imagen' => $imagen,
			'idtipo' => $idtipo,
			'estado' => 'activo',
			'fecha_registro' => date('Y-m-d')
		);
		$this->Model_aviso->insertar_tabla_sys('comunicado', $objeto);
	}
	public function cambiar_estado_comunicado()
	{
		$idcomunicado = $this->input->post('idcomunicado');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_aviso->editar_tabla_sys('comunicado', $obj, 'idcomunicado', $idcomunicado);
	}
	public function eliminar_comunicado()
	{
		$idcomunicado = $this->input->post('idcomunicado');
		$obj = array('estado' => 'eliminar');
		$this->Model_aviso->editar_tabla_sys('comunicado', $obj, 'idcomunicado', $idcomunicado);
	}
	public function editarComunicado($idcomunicado)
	{
		$datos['obj'] = $this->Model_aviso->editarComunicado($idcomunicado);
		$datos['contenido'] = 'file_comunicado/form_editarComunicado';
		$this->load->view('plantilla', $datos);
	}
	public function guardarEditarComunicado()
	{
		$idcomunicado = $this->input->post('idcomunicado');
		$titulo = mb_strtoupper($this->input->post('titulo'), 'utf-8');
		$descripcion = $this->input->post('descripcion');
		$idtipo = $this->input->post('idtipo');
		$imagen = $_FILES['imagen']['tmp_name'];
		if ($imagen) {
			if ($imagen_a) {
				unlink("./assets/imagenes/" . $imagen_a);
			}
			$ext = explode('.', $_FILES['imagen']['name']);
			$img = round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'], "assets/imagenes_comunicado/comu_" . $img);
			$imagen = "comu_" . $img;
		} else {
			$imagen = $imagen_a;
		}


		$objeto = array(
			'titulo' => $titulo,
			'descripcion' => $descripcion,
			'imagen' => $imagen,
			'idtipo' => $idtipo
		);
		$this->Model_aviso->editar_tabla_sys('comunicado', $objeto, 'idcomunicado', $idcomunicado);
	}
	//fin comunicado

	//inicio evento
	public function evento()
	{
		$datos['contenido'] = "file_evento/adminEvento_index";
		$this->load->view('plantilla', $datos);
	}
	public function nuevoEvento()
	{
		$datos['contenido'] = "file_evento/form_nuevoEvento";
		$this->load->view('plantilla', $datos);
	}
	public function guardarNuevoEvento()
	{
		$titulo = mb_strtoupper($this->input->post('titulo'), 'utf-8');
		$descripcion = $this->input->post('descripcion');
		$imagen = $_FILES['imagen']['tmp_name'];
		if ($imagen) {
			$ext = explode('.', $_FILES['imagen']['name']);
			$img = round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'], "assets/imagenes_evento/eve_" . $img);
			$imagen = "eve_" . $img;
		} else {
			$imagen = '';
		}
		$objeto = array(
			'imagen' => $imagen,
			'titulo' => $titulo,
			'descripcion' => $descripcion,
			'imagen' => $imagen,
			'estado' => 'activo',
			'fecha_evento' => date('Y-m-d')
		);
		$this->Model_aviso->insertar_tabla_sys('eventos', $objeto);
	}
	public function cambiar_estado_evento()
	{
		$ideventos = $this->input->post('ideventos');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_aviso->editar_tabla_sys('eventos', $obj, 'ideventos', $ideventos);
	}
	public function eliminar_evento()
	{
		$ideventos = $this->input->post('ideventos');
		$obj = array('estado' => 'eliminar');
		$this->Model_aviso->editar_tabla_sys('eventos', $obj, 'ideventos', $ideventos);
	}
	public function editarEvento($ideventos)
	{
		$datos['obj'] = $this->Model_aviso->editarEvento($ideventos);
		$datos['contenido'] = 'file_evento/form_editarEvento';
		$this->load->view('plantilla', $datos);
	}
	public function guardarEditarEvento()
	{
		$ideventos = $this->input->post('ideventos');
		$imagen_a = $this->input->post('imagen_a');
		$titulo = mb_strtoupper($this->input->post('titulo'), 'utf-8');
		$descripcion = $this->input->post('descripcion');
		$imagen = $_FILES['imagen']['tmp_name'];
		if ($imagen) {
			if ($imagen_a) {
				unlink("./assets/imagenes/" . $imagen_a);
			}
			$ext = explode('.', $_FILES['imagen']['name']);
			$img = round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'], "assets/imagenes_evento/eve_" . $img);
			$imagen = "eve_" . $img;
		} else {
			$imagen = $imagen_a;
		}


		$objeto = array(
			'titulo' => $titulo,
			'descripcion' => $descripcion,
			'imagen' => $imagen
		);
		$this->Model_aviso->editar_tabla_sys('eventos', $objeto, 'ideventos', $ideventos);
	}

	//fin evento

	//inicio 

	public function programacion_vista()
	{
		$datos['contenido'] = "file_programacion/adminProgramacion_index";
		// $datos['horarios'] = array('04:30','05:00', '05:30','06:00','06:30','07:00','07:30','08:00','08:30')
		$this->load->view('plantilla', $datos);
	}

	public function programacion()
	{
		$page = $_GET['page'];
		$this->load->model('Model_aviso');
		$programaciones = $this->model_aviso->listar_programacion($page, 'LUNES');

		// echo var_dump($countries);

		foreach ($programaciones as $programacion) {
			echo "<tr><td>" . $programacion->ci . "</td></tr>";
		}
		exit;
	}



//fin

}
?>