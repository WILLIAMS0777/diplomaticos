<?php 
/**
* 
*/
class Model_usuario extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insertar_tabla_sys($tabla,$objeto){
		$this->db->insert($tabla,$objeto);
		return $this->db->insert_id();
	}
	public function editar_tabla_sys($tabla,$obj,$idtabla,$id){
		$this->db->where($idtabla,$id);
		$this->db->update($tabla,$obj);
	}
	
	public function login($user,$pass){
		return $this->db->query("SELECT
			usuario.idusuario,
			persona.nombre,
			persona.paterno,
			persona.materno,
			rol.roles,
			rol.idrol
			FROM usuario
			INNER JOIN persona USING(idpersona) 
			INNER JOIN rol USING(idrol)
			WHERE usuario.estado='activo' AND usuario.name='$user' AND usuario.pass='$pass'
		")->row();
	}
	public function listar_usuarios(){
		return $this->db->query("SELECT
		persona.ci,
		persona.expedido,
		persona.nombre,
		persona.paterno,
		persona.materno,
		persona.celular,
		usuario.idusuario,
		usuario.imagen,
		usuario.estado,
		usuario.fecha_registro,
		rol.roles
		FROM
		persona
		INNER JOIN usuario ON usuario.idpersona = persona.idpersona
		INNER JOIN rol ON usuario.idrol = rol.idrol
		WHERE usuario.estado!='eliminar'
		ORDER BY usuario.idusuario DESC
		")->result();
	}
	public function verificar_usuarios($user){
		return $this->db->query("SELECT * FROM usuario WHERE name='$user' ")->row();
	}
	public function validar_ci($ci){
		return $this->db->query("SELECT * FROM persona WHERE ci='$ci' ")->row();
	}
	public function verificar_usuarios_activos($idpersona){
		return $this->db->query("SELECT * FROM usuario
		INNER JOIN persona ON usuario.idpersona = persona.idpersona
		WHERE usuario.idpersona='$idpersona' AND usuario.estado='activo' ")->row();
	}
	public function editarUsuario($idusuario){
		return $this->db->query("SELECT * FROM usuario
		INNER JOIN persona ON usuario.idpersona = persona.idpersona
		WHERE usuario.idusuario='$idusuario' ")->row();
	}


	public function admin_institucion(){
		return $this->db->query("SELECT * FROM institucion ")->row();
	}

	public function editarInstitucion($idinstitucion){
		return $this->db->query("SELECT * FROM institucion
		WHERE institucion.idinstitucion='$idinstitucion' ")->row();
	}
	public function listar_menus(){
		return $this->db->query("SELECT * FROM `menus`
		WHERE menus.m_estado!='eliminar'
		")->result();
	}

}

?>