<?php
class Model_pagina extends CI_Model{
  function __construct(){
      parent::__construct();
  }
  //inicio institucion
  public function listar_institucion(){
		return $this->db->query("SELECT * FROM institucion ")->row();
	}
  //fin institucion
  //inicio comunicado
  public function listar_comunicado(){
		$query = $this->db->query("SELECT * FROM comunicado where estado = 'activo' ORDER by fecha_registro DESC LIMIT 1;");
		return $query->row();
	}
  //fin comunicado
  //inicio evento
  public function listar_evento(){
		$query = $this->db->query("SELECT * FROM eventos where estado = 'activo' ORDER by fecha_evento DESC LIMIT 1;");
		return $query->row();
	}
  //fin evento
}
?>