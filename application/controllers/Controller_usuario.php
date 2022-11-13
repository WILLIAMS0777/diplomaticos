<?php
class Controller_usuario extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_usuario');
		$this->menu=$this->backend_lib->listar_menus_sys();
	}
	public function index(){
		if ($this->session->userdata('session')) {
			redirect(base_url().'adminInicio');
		}else{
			$this->load->view('login');
		}
	}
	public function login(){
		$user=$this->input->post('user');
		$pass=sha1($this->input->post('pass'));
		$obj=$this->Model_usuario->login($user,$pass);
		/*print_r($obj);
		die;*/
		if ($obj) {
			$datos=array(
				'session'	=>true,
				'id'		=>$obj->idusuario,
				'idrol'		=>$obj->idrol,
				'nombres'	=>$obj->nombre.' '.$obj->paterno.' '.$obj->materno,
				'roles'		=>$obj->roles
			);
			$this->session->set_userdata($datos);
			echo json_encode(array(0=>1));
		}else{

			// Este codigo retorna un json como respuesta a la peticion
			echo json_encode(array(0=>0));
			
		}
	}

	public function salir(){
		$this->session->sess_destroy();
		$this->index();
	}

	public function adminInicio(){
		$datos['contenido']="inicio/contenido_index";
		$this->load->view('plantilla',$datos);
	}

	//inicio institucion
	public function adminInstitucion(){
		$datos['contenido']="file_institucion/admin_institucion";
		$datos['obj']=$this->Model_usuario->admin_institucion();
		$this->load->view('plantilla',$datos);
	}
	public function editarInstitucion($idinstitucion){
		$datos['obj']=$this->Model_usuario->editarInstitucion($idinstitucion);
		$datos['contenido']='file_institucion/form_editarInstitucion';
		$this->load->view('plantilla',$datos);
	}
	public function guardarEditarInstitucion(){
		$idinstitucion=$this->input->post('idinstitucion');
		$in_logo_a=$this->input->post('in_logo_a');
		$in_imagen_strio_general_a=$this->input->post('in_imagen_strio_general_a');
		$in_descripcion=$this->input->post('in_descripcion');
		$in_mision=$this->input->post('in_mision');
		$in_vision=$this->input->post('in_vision');
		$in_objetivo=$this->input->post('in_objetivo');
		$in_correo=$this->input->post('in_correo');
		$in_celular=$this->input->post('in_celular');
		$in_facebook=$this->input->post('in_facebook');
		$in_google_maps=$this->input->post('in_google_maps');
		$in_nombre_strio_general=$this->input->post('in_nombre_strio_general');

		$in_logo=$_FILES['in_logo']['tmp_name'];
		echo $in_logo;
		die;
		if ($in_logo) {
			if ($in_logo_a) {
				unlink("./assets/imagenes_institucion/".$in_logo_a);
			}
			$ext=explode('.', $_FILES['in_logo']['name']);
			$log=round(microtime(true)).'.'.end($ext);
			move_uploaded_file($_FILES['in_logo']['tmp_name'],"assets/imagenes/log_".$log);
			$in_logo="log_".$log;
		}else{
			$in_logo=$in_logo_a;
		}
//
		$in_imagen_strio_general=$_FILES['in_imagen_strio_general']['tmp_name'];
		echo $in_imagen_strio_general;
		die;
		if ($in_imagen_strio_general) {
			if ($in_imagen_strio_general_a) {
				unlink("./assets/imagenes_institucion/".$in_imagen_strio_general_a);
			}
			$ext=explode('.', $_FILES['in_imagen_strio_general']['name']);
			$log=round(microtime(true)).'.'.end($ext);
			move_uploaded_file($_FILES['in_imagen_strio_general']['tmp_name'],"assets/imagenes/gen_".$gen);
			$in_imagen_strio_general="gen_".$gen;
		}else{
			$in_imagen_strio_general=$in_imagen_strio_general_a;
		}

		$objeto=array(
			'in_logo'=>$in_logo,
			'in_imagen_strio_general'=>$in_imagen_strio_general,
			'in_descripcion'=>$in_descripcion,
			'in_mision'=>$in_mision,
			'in_vision'=>$in_vision,
			'in_objetivo'=>$in_objetivo,
			'in_correo'=>$in_correo,
			'in_celular'=>$in_celular,
			'in_facebook'=>$in_facebook,
			'in_google_maps'=>$in_google_maps,
			'in_nombre_strio_general'=>$in_nombre_strio_general
		);
		$this->Model_usuario->editar_tabla_sys('institucion',$objeto,'idinstitucion',$idinstitucion);

	}




	
	//fin institucion
	public function adminUsuario(){
		//print_r($this->menu);die();
		$datos['menus']=$this->menu;
		$datos['contenido']="file_usuario/adminUsuario_index";
		$this->load->view('plantilla',$datos);
	}

	public function nuevoUsuario(){
		$datos['contenido']="file_usuario/form_nuevoUsuario";
		$this->load->view('plantilla',$datos);
	}
	public function verificar_usuarios(){
		$user=$this->input->post('user');
		$obj=$this->Model_usuario->verificar_usuarios($user);
		if ($obj) {
			echo json_encode(array(0=>1));
		}else{
			echo json_encode(array(0=>0));
		}
	}
	public function validar_ci(){
		$ci=$this->input->post('ci');
		$obj=$this->Model_usuario->validar_ci($ci);
		if($obj){
			$obj1=$this->Model_usuario->verificar_usuarios_activos($obj->idpersona);
			if($obj1){
				$data=array(
					0=>$obj1->ci,
					1=>$obj1->expedido,
					2=>$obj1->nombre,
					3=>$obj1->paterno,
					4=>$obj1->materno,
					5=>$obj1->celular,
					6=>$obj1->idpersona,
					7=>'usuario',
					8=>$obj1->idrol
				);
			}else{
				$data=array(
					0=>$obj->ci,
					1=>$obj->expedido,
					2=>$obj->nombre,
					3=>$obj->paterno,
					4=>$obj->materno,
					5=>$obj->celular,
					6=>$obj->idpersona,
					7=>'persona'
				);
			}
			echo json_encode($data);
		}else{
			echo json_encode(array(0=>0));
		}
	}
	public function guardarNuevoUsuario(){
		$ci=$this->input->post('ci');
		$expedido=$this->input->post('expedido');
		$nombre=mb_strtoupper($this->input->post('nombre'),'utf-8');
		$paterno=mb_strtoupper($this->input->post('paterno'),'utf-8');
		$materno=mb_strtoupper($this->input->post('materno'),'utf-8');
		$celular=$this->input->post('celular');
		$idpersona=$this->input->post('idpersona');
		$idrol=$this->input->post('idrol');
		$usuario=$this->input->post('usuario');
		$password=sha1($this->input->post('password'));

		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen) {
			$ext=explode('.', $_FILES['imagen']['name']);
			$img=round(microtime(true)).'.'.end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'],"assets/imagenes/user_".$img);
			$imagen="user_".$img;
		}else{
			$imagen='';
		}
		if ($idpersona==0) {
			$objeto=array(
				'ci'=>$ci,
				'expedido'=>$expedido,
				'nombre'=>$nombre,
				'paterno'=>$paterno,
				'materno'=>$materno,
				'celular'=>$celular
			);
			$idpersona=$this->Model_usuario->insertar_tabla_sys('persona',$objeto);
		}
		$objeto1=array(
			'imagen'=>$imagen,
			'name'=>$usuario,
			'pass'=>$password,
			'estado'=>'activo',
			'fecha_registro'=>date('Y-m-d'),
			'idpersona'=>$idpersona,
			'idrol'=>$idrol
		);
		$this->Model_usuario->insertar_tabla_sys('usuario',$objeto1);
	}
	public function cambiar_estado_usuario(){
		$idusuario=$this->input->post('idusuario');
		$estado=$this->input->post('estado');
		if ($estado=='1') {
			$valor_estado='inactivo';
		}else{
			$valor_estado='activo';
		}
		$obj=array('estado'=>$valor_estado);
		$this->Model_usuario->editar_tabla_sys('usuario',$obj,'idusuario',$idusuario);
	}
	public function eliminar_usuario(){
		$idusuario=$this->input->post('idusuario');
		$obj=array('estado'=>'eliminar');
		$this->Model_usuario->editar_tabla_sys('usuario',$obj,'idusuario',$idusuario);
	}
	public function editarUsuario($idusuario){
		$datos['obj']=$this->Model_usuario->editarUsuario($idusuario);
		$datos['contenido']='file_usuario/form_editarUsuario';
		$this->load->view('plantilla',$datos);
	}
	public function guardarEditarUsuario(){
		$idpersona=$this->input->post('idpersona');
		$idusuario=$this->input->post('idusuario');
		$imagen_a=$this->input->post('imagen_a');

		$expedido=$this->input->post('expedido');
		$nombre=mb_strtoupper($this->input->post('nombre'),'utf-8');
		$paterno=mb_strtoupper($this->input->post('paterno'),'utf-8');
		$materno=mb_strtoupper($this->input->post('materno'),'utf-8');
		$celular=$this->input->post('celular');

		$idrol=$this->input->post('idrol');

		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen) {

			if ($imagen_a) {
				unlink("./assets/imagenes/".$imagen_a);
			}

			$ext=explode('.', $_FILES['imagen']['name']);
			$img=round(microtime(true)).'.'.end($ext);
			move_uploaded_file($_FILES['imagen']['tmp_name'],"assets/imagenes/user_".$img);
			$imagen="user_".$img;

		}else{
			$imagen=$imagen_a;
		}

		$objeto=array(
			'expedido'=>$expedido,
			'nombre'=>$nombre,
			'paterno'=>$paterno,
			'materno'=>$materno,
			'celular'=>$celular
		);
		$this->Model_usuario->editar_tabla_sys('persona',$objeto,'idpersona',$idpersona);

		$objeto1=array(
			'imagen'=>$imagen,
			'idrol'=>$idrol
		);
		$this->Model_usuario->editar_tabla_sys('usuario',$objeto1,'idusuario',$idusuario);
	}
	
	//inicio menus
	public function menus(){
		$datos['contenido']="file_menus/adminMenus_index";
		$this->load->view('plantilla',$datos);
	}
	
	public function nuevoMenu(){
		$datos['contenido']="file_menus/form_nuevoMenu";
		$this->load->view('plantilla',$datos);
	}
	public function guardarNuevoMenu(){
		$menus=$this->input->post('menus');
		$objeto=array(
			'menus'=>$menus,
			'm_estado'=>'activo'
		);
		$this->Model_usuario->insertar_tabla_sys('menus',$objeto);
	}
	public function cambiar_estado_menus(){
		$idmenus=$this->input->post('idmenus');
		$m_estado=$this->input->post('m_estado');
		if ($m_estado=='1') {
			$valor_estado='inactivo';
		}else{
			$valor_estado='activo';
		}
		$obj=array('m_estado'=>$valor_estado);
		$this->Model_usuario->editar_tabla_sys('menus',$obj,'idmenus',$idmenus);
	}
	public function eliminar_menus(){
		$idmenus=$this->input->post('idmenus');
		$obj=array('m_estado'=>'eliminar');
		$this->Model_usuario->editar_tabla_sys('menus',$obj,'idmenus',$idmenus);
	}
	//fin menus
	// inicio privilegios
	public function privilegios(){
		$datos['contenido']="file_privilegios/adminPrivilegios_index";
		$this->load->view('plantilla',$datos);
	}
	public function nuevoPrivilegio(){
		$datos['contenido']="file_privilegios/form_nuevoPrivilegio";
		$this->load->view('plantilla',$datos);
	}
	public function guardarNuevoPrivilegio(){
		
		$idrol=$this->input->post('idrol');
		$idmenus=$this->input->post('idmenus');
		$objeto=array(
			
			'p_estado'=>'activo',
			'idrol'=>$idrol,
			'idmenus'=>$idmenus
		);
		$this->Model_usuario->insertar_tabla_sys('privilegios',$objeto);
	}
	public function cambiar_estado_privilegio(){
		$idprivilegios=$this->input->post('idprivilegios');
		$p_estado=$this->input->post('p_estado');
		if ($p_estado=='1') {
			$valor_estado='inactivo';
		}else{
			$valor_estado='activo';
		}
		$obj=array('p_estado'=>$valor_estado);
		$this->Model_usuario->editar_tabla_sys('privilegios',$obj,'idprivilegios',$idprivilegios);
	}
	public function eliminar_privilegios(){
		$idprivilegios=$this->input->post('idprivilegios');
		$obj=array('p_estado'=>'eliminar');
		$this->Model_usuario->editar_tabla_sys('privilegios',$obj,'idprivilegios',$idprivilegios);
	}
	
	// fin privelegios


}
?>