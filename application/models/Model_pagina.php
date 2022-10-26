<?php
class Model_pagina extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function listar_institucion(){
		return $this->db->query("SELECT * FROM institucion ")->row();
	}
}
?>