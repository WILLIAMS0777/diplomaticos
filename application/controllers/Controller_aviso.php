<?php
class Controller_aviso extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_aviso');
	}

	//inicio socio
	public function socio(){
		$datos['contenido']="file_socio/adminSocio_index";
		$this->load->view('plantilla',$datos);
	}
	//fin socio
	
	//inicio comunicado
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
	//fin comunicado

	//inicio evento
	public function evento(){
		$datos['contenido']="file_evento/adminEvento_index";
		$this->load->view('plantilla',$datos);
	}
	public function nuevoEvento(){
		$datos['contenido']="file_evento/form_nuevoEvento";
		$this->load->view('plantilla',$datos);
	}
	public function guardarNuevoEvento(){
		$titulo=mb_strtoupper($this->input->post('titulo'),'utf-8');
		$descripcion=$this->input->post('descripcion');
		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen) {
			$ext=explode('.', $_FILES['imagen']['name']);
			$img=round(microtime(true)).'.'.end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'],"assets/imagenes_evento/eve_".$img);
			$imagen="eve_".$img;
		}else{
			$imagen='';
		}
		$objeto=array(
			'imagen'=>$imagen,
			'titulo'=>$titulo,
			'descripcion'=>$descripcion,
			'imagen'=>$imagen,
			'estado'=>'activo',
			'fecha_evento'=>date('Y-m-d')
		);
		$this->Model_aviso->insertar_tabla_sys('eventos',$objeto);
	}
	public function cambiar_estado_evento(){
		$ideventos=$this->input->post('ideventos');
		$estado=$this->input->post('estado');
		if ($estado=='1') {
			$valor_estado='inactivo';
		}else{
			$valor_estado='activo';
		}
		$obj=array('estado'=>$valor_estado);
		$this->Model_aviso->editar_tabla_sys('eventos',$obj,'ideventos',$ideventos);
	}
	public function eliminar_evento(){
		$ideventos=$this->input->post('ideventos');
		$obj=array('estado'=>'eliminar');
		$this->Model_aviso->editar_tabla_sys('eventos',$obj,'ideventos',$ideventos);
	}
	//fin evento

	//inicio 
	
	public function programacion(){
		$datos['contenido']="file_programacion/adminProgramacion_index";
		
		// array asociativo horario


		// cargar modelo aviso 
		
		// echo "Llega hasta aqui";
		// echo var_dump($this->Model_aviso->listar_programacion());
		// exit;

		// $datos['horarios'] = array('04:30','05:00', '05:30','06:00','06:30','07:00','07:30','08:00','08:30')
		$datos['horarios'] = $this->Model_aviso->obtener_horas();
		$this->load->view('plantilla',$datos);



	}
	public function programa_lunes(){
		$this->load->database();
        $count = $this->db->get('posts')->num_rows();

        if(!empty($this->input->get("page"))){
            $start = $this->input->get("page") * $this->perPage;
            $query = $this->db->limit($start, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $result = $this->load->view('ajax_post', $data);
            echo json_encode($result);
        }else{
            $query = $this->db->limit($this->perPage,0)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $this->load->view('post', $data);
        }
		
	}
	public function programa_martes(){
		$this->load->database();
        $count = $this->db->get('posts')->num_rows();

        if(!empty($this->input->get("page"))){
            $start = $this->input->get("page") * $this->perPage;
            $query = $this->db->limit($start, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $result = $this->load->view('ajax_post', $data);
            echo json_encode($result);
        }else{
            $query = $this->db->limit($this->perPage,0)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $this->load->view('post', $data);
        }
		
	}
	public function programa_miercoles(){
		$this->load->database();
        $count = $this->db->get('posts')->num_rows();

        if(!empty($this->input->get("page"))){
            $start = $this->input->get("page") * $this->perPage;
            $query = $this->db->limit($start, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $result = $this->load->view('ajax_post', $data);
            echo json_encode($result);
        }else{
            $query = $this->db->limit($this->perPage,0)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $this->load->view('post', $data);
        }
		
	}
	public function programa_jueves(){
		$this->load->database();
        $count = $this->db->get('posts')->num_rows();

        if(!empty($this->input->get("page"))){
            $start = $this->input->get("page") * $this->perPage;
            $query = $this->db->limit($start, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $result = $this->load->view('ajax_post', $data);
            echo json_encode($result);
        }else{
            $query = $this->db->limit($this->perPage,0)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $this->load->view('post', $data);
        }
		
	}
	public function programa_viernes(){
		$this->load->database();
        $count = $this->db->get('posts')->num_rows();

        if(!empty($this->input->get("page"))){
            $start = $this->input->get("page") * $this->perPage;
            $query = $this->db->limit($start, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $result = $this->load->view('ajax_post', $data);
            echo json_encode($result);
        }else{
            $query = $this->db->limit($this->perPage,0)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $this->load->view('post', $data);
        }
		
	}
	public function programa_sabado(){
		$this->load->database();
        $count = $this->db->get('posts')->num_rows();

        if(!empty($this->input->get("page"))){
            $start = $this->input->get("page") * $this->perPage;
            $query = $this->db->limit($start, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $result = $this->load->view('ajax_post', $data);
            echo json_encode($result);
        }else{
            $query = $this->db->limit($this->perPage,0)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $this->load->view('post', $data);
        }
		
	}
	public function programa_domingo(){
		$this->load->database();
        $count = $this->db->get('posts')->num_rows();

        if(!empty($this->input->get("page"))){
            $start = $this->input->get("page") * $this->perPage;
            $query = $this->db->limit($start, $this->perPage)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $result = $this->load->view('ajax_post', $data);
            echo json_encode($result);
        }else{
            $query = $this->db->limit($this->perPage,0)->get("posts");
            $data['posts'] = $query->result();
            $data['count']=$count;
            $this->load->view('post', $data);
        }
		
	}

	//fin

}
?>