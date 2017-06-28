<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesor_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
		$this->load->model('Usuario_model','usuario',true);
		$this->load->model('Alumno_model','alumno',true);
		$this->load->model('Calificacion_model','calificacion',true);
		$this->load->model('Tutoria_model','tutoria',true);
	}
	public function index()
	{
		$this->layout->view('/Asesor/index.php','datos',false);
	}

	public function verAlumnos(){
		$this->layout->view('/Asesor/VerAlumno.php');
	}
	public function verTutorias(){

		$tutoria =$this->tutoria->getTutoria();
		$datitos['tutorias'] = $tutoria;
		$this->layout->view('/Asesor/tutorias.php',$datitos,false);
	}
	public function Importar(){
		$this->layout->view('/Asesor/importar.php');
	}
	public function Exportar(){
		$this->layout->view('/Asesor/exportar.php');
	}


	public function detalleAlumno(){

	 $rut =	$this->input->post('rut');
	 $usuario = $this->usuario->getByRutAndPerf(5,$rut);
	 $alum = $this->alumno->findByName('alu_usu_id',$usuario->get('usu_id'));
	 
	 if ($usuario==false) {
	 	$data=null;
	 }else{ 
		$data = array(	
	 	'nombre'  => $usuario->get('usu_nombre'),
	 	'correo'  => $usuario->get('usu_correo'),
	 	'carrera' => $alum->get('alu_programa_estudio'),
	 	'celular' => $alum->get('alu_celular'),
	 	'ingreso' => $alum->get('alu_semestre_ingreso')
	 	);
	}
	 echo json_encode($data);

	}

	public function detalleAsignaturaProfe(){

		$asigid = $this->input->post('idasig');
		$asignatura = $this->usuario->getAsigProfByRut($asigid);
		$newJSON=array();

		foreach ($asignatura as $key => $value) {
			$newJSON[]=json_encode($asignatura[$key]);
		}
		header('Content-Type: application/json');		
		 echo json_encode(array("estado"=>true,"mensaje"=>"Se ha actualizado correctamente","asignatura" => $newJSON), true);
	}


	public function verProfesor(){

		$profe =$this->usuario->getUserByPerfil(4);
		$datitos['profesores'] = $profe;
		$this->layout->view('/Asesor/VerProfesores.php',$datitos,false);
	}

	public function detalleProfeNota(){

		$usuid=$this->input->post('idusu');
		$notasDet=$this->calificacion->getDetalleNotaProf($usuid);
		$newJSON=array();

		foreach ($notasDet as $key => $value) {
			$newJSON[]=json_encode($notasDet[$key]);
		}
		header('Content-Type: application/json');		
		 echo json_encode(array("estado"=>true,"mensaje"=>"Se ha actualizado correctamente","notasDet" => $newJSON), true);


	}

}

/* End of file Asesor_controller.php */
/* Location: ./application/controllers/Asesor_controller.php */