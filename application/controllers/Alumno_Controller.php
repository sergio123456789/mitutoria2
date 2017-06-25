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
public function miPerfil()
	{
		$this->layout->view('/Alumnos/user.php','datos',false);
	}

public function misRamos()
    {
        $this->layout->view('/Alumnos/misramos.php','datos',false);
    }
public function historialTutorias()
    {
        $this->layout->view('/Alumnos/historialtutorias.php','datos',false);
    }
}
/* End of file Alumno_Controller.php */
/* Location: ./application/controllers/Alumno_Controller.php */