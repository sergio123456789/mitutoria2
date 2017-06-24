<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistente_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('Asistente/index.php','datos',false);
		
	}

}

/* End of file Asistente_Controller.php */
/* Location: ./application/controllers/Asistente_Controller.php */