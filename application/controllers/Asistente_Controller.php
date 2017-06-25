<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistente_Controller extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
		$this->load->model('Usuario_model','usuario',true);
	}
	public function index()
	{
		$this->layout->view('/Asesor/index.php','datos',false);
	}

	public function verAlumnos(){
		$this->layout->view('/Asesor/VerAlumno.php');
	}
	public function verTutorias(){
		$this->layout->view('/Asesor/tutorias.php');
	}
	public function verReforzamientos(){
		$this->layout->view('/Asesor/reforzamiento.php');
	}
	public function verAyudantia(){
		$this->layout->view('/Asesor/ayudantia.php');
	}
	public function Importar(){
		$this->layout->view('/Asesor/importar.php');
	}
	public function Exportar(){
		$this->layout->view('/Asesor/exportar.php');
	}
	public function verProfesor(){
		$datitos['profesores'] = null;
		$this->layout->view('/Asesor/VerProfesores.php',$datitos,false);
	}
}

/* End of file Asistente_Controller.php */
/* Location: ./application/controllers/Asistente_Controller.php */