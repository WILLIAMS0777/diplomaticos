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
    //inicio institucion
    public function portada(){
		$data['contenido'] = 'vista_frontend/file_inicio';
		$data['institucion'] = $this->Model_pagina->listar_institucion();
		$this->load->view('plantilla_f', $data);
	}
	//fin institucion
	//inicio comunicados
    public function comunicados(){
		$data['contenido'] = 'vista_frontend/comunicados';
		$data['comunicado'] = $this->Model_pagina->listar_comunicado();
		$this->load->view('plantilla_f', $data);
	}
	//fin comunicados
	//inicio eventos
    public function eventos(){
		$data['contenido'] = 'vista_frontend/eventos';
		$data['eventos'] = $this->Model_pagina->listar_evento();
		$this->load->view('plantilla_f', $data);
	}
	//fin eventos
    //inicio
    public function quienes_somos(){
		$data['contenido'] = 'vista_frontend/quienes_somos';
		$data['institucion'] = $this->Model_pagina->listar_institucion();
		$this->load->view('plantilla_f', $data);
	}
    //fin
}

?>