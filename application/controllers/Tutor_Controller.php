<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('Alumnos/index.php','datos',false);
		
	}

}

/* End of file Tutor_Controller.php */
/* Location: ./application/controllers/Tutor_Controller.php */