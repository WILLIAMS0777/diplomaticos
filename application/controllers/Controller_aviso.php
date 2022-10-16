<?php
class Controller_aviso extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_aviso');
	}
	//inicio
	public function comunicado(){
		$datos['contenido']="file_comunicado/adminComunicado_index";
		$this->load->view('plantilla',$datos);
	}
	public function nuevoComunicado(){
		$datos['contenido']="file_comunicado/form_nuevoComunicado";

		$this->load->view('plantilla',$datos);
	}
	public function guardarNuevoComunicado(){
		$titulo=mb_strtoupper($this->input->post('titulo'),'utf-8');
		$descripcion=$this->input->post('descripcion');
		$idtipo=$this->input->post('idtipo');
		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen) {
			$ext=explode('.', $_FILES['imagen']['name']);
			$img=round(microtime(true)).'.'.end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'],"assets/imagenes_comunicado/comu_".$img);
			$imagen="comu_".$img;
		}else{
			$imagen='';
		}
		$objeto=array(
			'imagen'=>$imagen,
			'titulo'=>$titulo,
			'descripcion'=>$descripcion,
			'imagen'=>$imagen,
			'idtipo'=>$idtipo,
			'estado'=>'activo',
			'fecha_registro'=>date('Y-m-d')
		);
		$this->Model_aviso->insertar_tabla_sys('comunicado',$objeto);
	}
	public function cambiar_estado_comunicado(){
		$idcomunicado=$this->input->post('idcomunicado');
		$estado=$this->input->post('estado');
		if ($estado=='1') {
			$valor_estado='inactivo';
		}else{
			$valor_estado='activo';
		}
		$obj=array('estado'=>$valor_estado);
		$this->Model_aviso->editar_tabla_sys('comunicado',$obj,'idcomunicado',$idcomunicado);
	}
	public function eliminar_comunicado(){
		$idcomunicado=$this->input->post('idcomunicado');
		$obj=array('estado'=>'eliminar');
		$this->Model_aviso->editar_tabla_sys('comunicado',$obj,'idcomunicado',$idcomunicado);
	}
	public function editarComunicado($idcomunicado){
		$datos['obj']=$this->Model_aviso->editarComunicado($idcomunicado);
		$datos['contenido']='file_comunicado/form_editarComunicado';
		$this->load->view('plantilla',$datos);
	}
	public function guardarEditarComunicado(){
		$titulo=mb_strtoupper($this->input->post('titulo'),'utf-8');
		$descripcion=$this->input->post('descripcion');
		$idtipo=$this->input->post('idtipo');
		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen) {
			if ($imagen_a) {
				unlink("./assets/imagenes/".$imagen_a);
			}
			$ext=explode('.', $_FILES['imagen']['name']);
			$img=round(microtime(true)).'.'.end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'],"assets/imagenes_comunicado/comu_".$img);
			$imagen="comu_".$img;
		}else{
			$imagen=$imagen_a;
		}
		
		
		$objeto=array(
			'titulo'=>$titulo,
			'descripcion'=>$descripcion,
			'imagen'=>$imagen,
			'idtipo'=>$idtipo
		);
		$this->Model_aviso->editar_tabla_sys('comunicado',$objeto,'idcomunicado',$idcomunicado);
	}
	//fin

	//inicio 
	//listado de programacion salida de autos 
	//lunes 1 2 3 4 5 .......
	//martes 5 1 2 3 4 6 7
	//miercoles 7 4 5 1 2 3 
	// 

	//solo tiene que capturar los que estan habilitados (activos).
	// un auto si o si sale en la tarde

	public function filtrarProgramaciones(){

	}

	public function programacion(){
		$datos['contenido']="file_programacion/adminProgramacion_index";
		$datos['listaProgramaciones'] = $this->filtrarProgramaciones();
		$this->load->view('plantilla',$datos);
	}

	//fin

}
?>