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
	


	public function listar_programcion(){
		return $this->db->query("SELECT
		p.hora_salida,
		p.dia_programacion,
		placa.placa
		FROM
		programacion p INNER JOIN placa ON p.idplaca = placa.idplaca
		")->result();
	}




// select  DAYNAME(curdate());
// hola hola estamos aqui

// compartime tu terminal


}
?>