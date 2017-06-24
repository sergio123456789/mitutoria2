<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
	}
	public function index()
	{
		$this->layout->view('/Alumnos/index.php','datos',false);
	}

}

/* End of file Alumno_Controller.php */
/* Location: ./application/controllers/Alumno_Controller.php */