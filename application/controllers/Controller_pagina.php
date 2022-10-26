<?php
class Controller_pagina extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_pagina');
    }
    public function index(){
		// redirect(base_url().'home');
        // 
        $this->portada(); 
	}
    
    public function portada(){
		$data['contenido'] = 'vista_frontend/file_inicio';
		$this->load->view('plantilla_f', $data);
	}
    public function comunicados(){
		$data['contenido'] = 'vista_frontend/comunicados';
		$this->load->view('plantilla_f', $data);
	}
    public function eventos(){
		$data['contenido'] = 'vista_frontend/eventos';
		$this->load->view('plantilla_f', $data);
	}


    //aparte
    public function quienes_somos(){
		$data['contenido'] = 'vista_frontend/quienes_somos';
		$data['institucion'] = $this->Model_pagina->listar_institucion();
		$this->load->view('plantilla_f', $data);
	}
    //aparte
}

?>