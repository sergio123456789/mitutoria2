<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistente_Controller extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
		$this->load->model('Usuario_model','usuario',true);		
		$this->load->model('Usuario_model','usuario',true);
		$this->load->model('Alumno_model','alumno',true);
		$this->load->model('Calificacion_model','calificacion',true);
		$this->load->model('Tutoria_model','tutoria',true);
		$this->load->model('Disponibilidad_model','disponibilidad',true);
		$this->load->model('Horario_model','horario',true);
		$this->load->model('Asignatura_model','asignatura',true);
        $this->load->library('upload');

		$config['upload_path']          = './resources/images/profilephotos/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 20480;
        $config['overwrite']            = true;
        $this->upload->initialize($config);

	}
	public function index()
	{
		$tutoriarealizada = $this->horario->getCountTutorias(3);
		$tutoriacancelada = $this->horario->getCountTutorias(2);
		$counttutores     = $this->usuario->getCountPerfiles(4);
		$countalumnos     = $this->usuario->getCountPerfiles(6);
		$datitos['tutoriarealizada'] = $tutoriarealizada;
		$datitos['tutoriacancelada'] = $tutoriacancelada;
		$datitos['counttutores'] = $counttutores;
		$datitos['countalumnos'] = $countalumnos;
		$this->layout->view('/Asistente/index.php',$datitos,false);	}

	public function verAlumnos(){
		$this->layout->view('/Asistente/VerAlumno.php');
	}
	public function verTutorias(){
		$this->layout->view('/Asistente/tutorias.php');
	}
	
	public function verAyudantia(){
		$this->layout->view('/Asistente/ayudantia.php');
	}
	public function Importar(){
		$this->layout->view('/Asistente/importar.php');
	}
	public function Exportar(){
		$this->layout->view('/Asistente/exportar.php');
	}
public function verReforzamientos(){
		$reforzamiento =$this->tutoria->getReforzamiento();
		$datitos['reforzamientos'] = $reforzamiento;
		$this->layout->view('/Asistente/reforzamiento.php',$datitos,false);
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
		$this->layout->view('/Asistente/VerProfesores',$datitos,false);
	}

		public function verTutor(){
		$profe =$this->usuario->getUserByPerfil(3);
		$asignaturas = $this->asignatura->findAll();
		$datitos['asignaturas'] = $asignaturas;
		$datitos['profesores'] = $profe;
		$this->layout->view('/Asistente/VerTutor',$datitos,false);
	}
	
	
	public function verTutorProgresion(){
		$profe =$this->usuario->getUserByPerfil(7);
		$datitos['profesores'] = $profe;
		
		$this->layout->view('/Asistente/VerTutoresProgresion.php',$datitos,false);
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
	$this->load->view('/Asistente/CrearDisponibilidad.php',$datitos,false);
    }

    public function test($id)
    {
    	$datosDis = $this->disponibilidad->findByIdUsu($id);
    	echo json_encode($datosDis);
    }
    public function agregarTutor(){
    	$datos = $this->input->post();
    	$nombre=$datos['name'];
    	$correo=$datos['email'];
    	$rut=$datos['rut'];
    	$dv=$datos['dv'];
    	$asignaturas = $datos['asignaturas'];
    	$imagen='';

    	if (isset($nombre)&&isset($rut)&&isset($correo)&&isset($dv)) {

				if($_FILES["photo"]["type"] == 'image/png' || $_FILES["photo"]["type"] == 'image/jpeg' || $_FILES["photo"]["type"] == 'image/jpg'){

						$tmp_name  = $_FILES["photo"]["tmp_name"];
						$name = basename($_FILES["photo"]["name"]);
						$explode = explode('.', $name);
						$extension = $explode['1'];
						$punto = ".";
						$img =  $rut;
						$imagen = $img.$punto.$extension;
						$ruta = "./resources/images/profilephotos/{$imagen}";
						move_uploaded_file($tmp_name, $ruta);

					}else{
						$imagen = '';
					}

    			$tutor=array(
                        'usu_nombre' => $nombre,
                        'usu_correo' => $correo,
                        'usu_pass' => '123456',
                        'usu_estado' => 1,
                        'usu_are_id' => 8,
                        'usu_rut' => $rut,
                        'usu_dv' => $dv,
                        'usu_foto'=>$imagen
                        );
    			
                    $usuario = $this->usuario->create($tutor);
                    $ret=$usuario->saveusu(); 
                     if ($ret=='perfil') {
                       $usuario->setPermisos(array(
                        'per_usu_id' => $usuario->get('usu_id'),
                        'perf_id' => 3
                        ));  
                       $usuario->insertperusu();
                       $ret=$usuario->get('usu_id');
						
						if ($asignaturas!=NULL) {
					
						foreach ($asignaturas as $key => $value) {
                            $prof=array(
                            'prof_asig_id'=>$value,
                            'prof_usu_id'=>$ret
                            );
	                        $profe=$this->usuario->createAsig($prof);
	                        $profe->saveProfAsig();
							}
						}
                       
					}

                   
    		}

    	}

    	 public function editarTutor(){


    	 }

    	 public function detalleTutor(){

    	 	$idTuto=$this->input->post('idusu');


    	 	if(isset($idTuto)){
    	 	$arrayasignaturas = array();
			$idusu = $this->input->post('idusu');
			$confid  = intval($idusu);
			$user = $this->usuario->findById($confid);
			$asignaturas = $this->usuario->getAsigProfById($confid);
			//var_dump($asignaturas);

			foreach ($asignaturas as $val){
				$arrayasignaturas[]=$val->getAsig('prof_asig_id');
            };

			$data =  array(
			'email' => $user->get('usu_correo'),
			'rut' => $user->get('usu_rut'),
			'dv' =>	$user->get('usu_dv'),
			'asignaturas' => $arrayasignaturas,//$arrayasignaturas,
			'foto' => $user->get('usu_foto'));
			echo json_encode($data);
		
		 }else{
            return "existen campos vacíos";

        }

    	 }




    }



/* End of file Asistente_Controller.php */
/* Location: ./application/controllers/Asistente_Controller.php */