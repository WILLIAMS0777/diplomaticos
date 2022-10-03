<?php
class Model_aviso extends CI_Model{
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
	public function listar_comunicados(){
		return $this->db->query("SELECT
		comunicado.titulo,
		comunicado.descripcion,
		comunicado.imagen,
		comunicado.estado,
		comunicado.idcomunicado,
		comunicado.fecha_registro,
		tipo.tipos
		FROM
		comunicado INNER JOIN tipo ON comunicado.idtipo = tipo.idtipo
		")->result();
	}
	public function editarComunicado($idcomunicado){
		return $this->db->query("SELECT * FROM comunicado
		WHERE comunicado.idcomunicado='$idcomunicado' ")->row();
	}
}
?>