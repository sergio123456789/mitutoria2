<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
		$this->load->model('Horario_model','horario',true);
		$this->load->model("Asignatura_model","asignatura",true);
		$this->load->model('Usuario_model','usuario',true);
		$this->load->model('Area_model','area',true);
		$this->load->model('Profesor_model','profesor',true);

	}
	public function index()
	{   $datitos['horario']=$this->horario->findAll();
	   $datitos["asignatura"]=$this->asignatura->findAll();
	   $datitos["user"]=$this->session->userdata('logged_in');
		$this->layout->view('/Profesor/index.php',$datitos,false);
	}
    public function miPerfil()
	{  $datitos["profesor"]=$this->profesor->findAll();
	   $datitos['horario']=$this->horario->findAll();
	   $datitos["asignatura"]=$this->asignatura->findAll();
	   $datitos["usuario"]=$this->usuario->findAll();
	   $datitos["area"]=$this->area->findAll();
	   $datitos["user"]=$this->session->userdata('logged_in');
		$this->layout->view('/Profesor/perfil.php',$datitos,false);
	}
    public function historial()
	{  $datitos['horario']=$this->horario->findAll();
	   $datitos["asignatura"]=$this->asignatura->findAll();
	   $datitos["user"]=$this->session->userdata('logged_in');
		$this->layout->view('/Profesor/historial.php',$datitos,false);
	}
  
      public function solReforzamientos()
	{
		$this->layout->view('/Profesor/solreforzamiento.php',$datitos,false);
	}
	  public function hcancelar(){

		

		$idhor 	= $this->input->post('idhor');
		$horid  = intval($idhor);
		$datos = $this->horario->cancelar($horid);
		redirect('Profesor_Controller/index');
		
		

	}
	public function haceptar(){

		

		$idhor 	= $this->input->post('idhor');
		$horid  = intval($idhor);
		$datos = $this->horario->aceptar($horid);
		redirect('Profesor_Controller/index');
		
		

	}
	public function cambiarcon(){
		$idusu 	= $this->input->post('conid');
		$usuid  = intval($idusu);
		$newcon = $this->input->post('nuecon');
		 $datos = $this->usuario->update($usuid,$newcon);
		redirect('Profesor_Controller/miPerfil');

	}


}?>