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
		$this->load->model('Disponibilidad_model','disponibilidad',true);
		$this->load->model('Horario_model','horario',true);
		$this->load->model('Asignatura_model','asignatura',true);
		$this->load->model('Profesor_model','profesor',true);
		$this->load->model('Datos_model','datos',true);
	}
	public function index()
	{
		$tutoriarealizada = $this->horario->getCountTutorias(3);
		$tutoriacancelada = $this->horario->getCountTutorias(2);
		$counttutores     = $this->usuario->getCountPerfiles(4);
		$countalumnos     = $this->usuario->getCountPerfiles(6);
		$countalumnos     = $this->usuario->getCountPerfiles(6);
		$countareauno     = $this->usuario->CountAreaUser(1);
		$countareados     = $this->usuario->CountAreaUser(2);
		$countareatres     = $this->usuario->CountAreaUser(3);
		$countareacuatro     = $this->usuario->CountAreaUser(4);
		$countareacinco     = $this->usuario->CountAreaUser(5);
		$countareaseis     = $this->usuario->CountAreaUser(6);
		$countareasiete     = $this->usuario->CountAreaUser(7);

		$datitos['tutoriarealizada'] = $tutoriarealizada;
		$datitos['tutoriacancelada'] = $tutoriacancelada;
		$datitos['counttutores'] = $counttutores;
		$datitos['countalumnos'] = $countalumnos;
		$datitos['areauno']=$countareauno;
		$datitos['areados']=$countareados;
		$datitos['areatres']=$countareatres;
		$datitos['areacuatro']=$countareacuatro;
		$datitos['areacinco']=$countareacinco;
		$datitos['areaseis']=$countareaseis;
		$datitos['areasiete']=$countareasiete;
		$datitos['tutoriarealizada'] = $tutoriarealizada;
		$datitos['tutoriacancelada'] = $tutoriacancelada;
		$datitos['counttutores'] = $counttutores;
		$datitos['countalumnos'] = $countalumnos;
		$this->layout->view('/Asesor/index.php',$datitos,false);
	}

		public function miPerfil()
	{
		$user=$this->session->userdata('logged_in');
		$usuario = $this->usuario->findById($user['id']);
		$alumno = $this->alumno->findByName('alu_usu_id',$user['id']);
		$asignaturas = $this->asignatura->miasignaturas($user['id']);
		
		$datos['usuario'] = $usuario;
		$datos['alumno'] = $alumno;
		$datos['asignaturas'] = $asignaturas;

		$this->layout->view('/Asesor/user.php',$datos,false);
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

public function verReforzamientos(){
		$reforzamiento =$this->tutoria->getReforzamiento();
		$datitos['reforzamientos'] = $reforzamiento;
		$this->layout->view('/Asesor/reforzamiento.php',$datitos,false);
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

		public function verTutor(){
		$profe =$this->usuario->getUserByPerfil(3);
		$datitos['profesores'] = $profe;
		$this->layout->view('/Asesor/VerTutores.php',$datitos,false);
	}
	
	  public function verAsignaturas(){

    	 	$asignaturas = $this->asignatura->findAll();
    	 	$carrera = $this->datos->findAll();
    	 	$datitos['carrera'] = $carrera;
    	 	$datitos['asignaturas'] = $asignaturas;
			$this->layout->view('/Asesor/verAsignaturas',$datitos,false);

    	 }
	
	public function verTutorProgresion(){
		$profe =$this->usuario->getUserByPerfil(7);
		$area = $this->usuario->getAreaUser();
		$datitos['profesores'] = $profe;
		$datitos['area'] = $area;
		
		$this->layout->view('/Asesor/VerTutoresProgresion.php',$datitos,false);
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


	 public function createdispo($id)
    {
    	$datitos['id'] = $id;
	$this->load->view('/Asesor/CrearDisponibilidad.php',$datitos,false);
    }

    public function test($id)
    {
    	$datosDis = $this->disponibilidad->findByIdUsu($id);
    	echo json_encode($datosDis);
    }


    	public function cambiarContra()
	{
		if ((!empty($_POST['pass']))|| (!empty($_POST['cpass'])) ) {
		
			if ($_POST['pass'] == $_POST['cpass']) {
				$pass = $_POST['pass'];
				$user=$this->session->userdata('logged_in');
				$this->usuario->cambiarcontra($user['id'],sha1($pass));

				$this->session->set_flashdata('notice', 'contraseña actualizada');
				redirect('/Asesor_Controller/miPerfil','refresh');
			}
			$this->session->set_flashdata('alert', 'contraseña no coinciden');
			redirect('/Asesor_Controller/miPerfil','refresh');
		}
		$this->session->set_flashdata('alert', 'Los campos están vacíos');
		redirect('/Asesor_Controller/miPerfil','refresh');
	}




}

/* End of file Asesor_controller.php */
/* Location: ./application/controllers/Asesor_controller.php */