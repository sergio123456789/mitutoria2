<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
	}
	public function index()
	{
		$this->layout->view('/Tutor/index.php','datos',false);
	}
    public function miPerfil()
	{
		$this->layout->view('/Tutor/user.php','datos',false);
	}
    public function miHorario()
	{
		$this->layout->view('/Tutor/mihorario.php','datos',false);
	}
     public function misRamos()
	{
		$this->layout->view('/Tutor/misramos.php','datos',false);
	}
      public function solReforzamientos()
	{
		$this->layout->view('/Tutor/solreforzamiento.php','datos',false);
	}
}

/* End of file Tutor_Controller.php */
/* Location: ./application/controllers/Tutor_Controller.php */