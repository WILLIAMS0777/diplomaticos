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

	//inicio socioÑ
	public function listar_socios(){
		return $this->db->query("SELECT
		socio.ingreso,
		socio.imagen,
		persona.ci,
		persona.nombre,
		persona.paterno,
		persona.materno,
		persona.idpersona,
		placa.idplaca,
		placa.placa
		FROM socio
		INNER JOIN persona ON socio.idpersona = persona.idpersona
		INNER JOIN placa ON socio.idplaca = placa.idplaca
		")->result();
	}
	/*public function editarComunicado($idcomunicado){
		return $this->db->query("SELECT * FROM comunicado
		WHERE comunicado.idcomunicado='$idcomunicado' ")->row();
	}*/
	//fin socio

	//inicio comunicado
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
	//fin comunicado
	//inicio evento
	public function listar_evento(){
		return $this->db->query("SELECT
		eventos.titulo,
		eventos.descripcion,
		eventos.ideventos,
		eventos.imagen,
		eventos.estado,
		eventos.fecha_evento
		FROM
		eventos
		")->result();
	}
	public function editarEvento($idevento){
		return $this->db->query("SELECT * FROM comunicado
		WHERE comunicado.idcomunicado='$idcomunicado' ")->row();
	}
	//fin evento

	//programacion inicio
	public function listar_programacion(){
		return $this->db->query("SELECT
		placa.placa,
		persona.ci,
		persona.nombre,
		persona.paterno,
		persona.materno,
		socio.imagen,
        hora_salida.hora_salida,
        dias.dia
		FROM
		programacion 
		INNER JOIN placa ON programacion.idplaca = placa.idplaca
		INNER JOIN socio ON socio.idplaca = placa.idplaca
		INNER JOIN persona ON socio.idpersona = persona.idpersona
		INNER JOIN dias ON programacion.iddias = dias.iddias
        INNER JOIN hora_salida ON dias.iddias = hora_salida.iddias
		ORDER BY dias.dia asc, hora_salida.hora_salida asc
		")->result();
	}

	public function obtener_horas(){
		return $this->db->query("SELECT
		hora_salida 
        FROM hora_salida
		ORDER BY hora_salida asc
		")->result();
	}



	//programacion fin
	//  
	/*ALTER TABLE orders
	ADD CONSTRAINT fk_cat
	FOREIGN KEY (category_id)
	REFERENCES categories(id);*/



	

}
?>