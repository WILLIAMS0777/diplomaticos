<?php defined('BASEPATH') or exit('No direct script access allowed');
class Controller_prueba extends CI_Controller
{
    public function hola()
    {
        $this->load->view('prueba');
    }
    public function getCountry()
    {
        $page = $_GET['page'];
        $this->load->model('Model_prueba');
        $registros = $this->model_prueba->getCountry($page);

        echo var_dump($registros);
        exit;
        foreach ($registros as $reg) {
            echo "<tr><td>" . $reg->data . "</td> </tr>";
        }
        exit;
    }
}