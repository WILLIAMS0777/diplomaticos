<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_prueba extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}


	public function getCountry($page)
	{

		$this->load->database();

		$offset = 10 * $page;
		$limit = 10;
		$sql = "select * from registros limit $offset ,$limit";
		$result = $this->db->query($sql)->result();
		return $result;

	}
}