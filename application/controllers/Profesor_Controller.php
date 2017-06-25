<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
	}
	public function index()
	{
		$this->layout->view('/Profesor/index.php','datos',false);
	}
    public function miPerfil()
	{
		$this->layout->view('/Profesor/user.php','datos',false);
	}
    public function miHorario()
	{
		$this->layout->view('/Profesor/mihorario.php','datos',false);
	}
     public function misRamos()
	{
		$this->layout->view('/Profesor/misramos.php','datos',false);
	}
      public function solReforzamientos()
	{
		$this->layout->view('/Profesor/solreforzamiento.php','datos',false);
	}

}?>