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
	public function perfil()
	{
		$this->layout->view('/Profesor/perfil.php','datos',false);
	}
	public function horario()
	{
		$this->layout->view('/Profesor/horario.php','datos',false);
	}

}?>