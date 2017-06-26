<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
		$this->layout->setLayout('/MasterPage',false);
		$this->load->model('Usuario_model','usuario',true);
		$this->load->model('alumno_model','alumno',true);
		$this->load->model('Horario_model','horario',true);
		$this->load->model('Asignatura_model','asignatura',true);
		$this->load->model('Lista_model','lista',true);
		$this->load->model('Notas_model','notas',true);
		$this->load->model('Tutoria_model','tutoria',true);
		$this->load->library('session');

		}else{
			redirect('login');
		}
	}
	public function index()
	{
		$user=$this->session->userdata('logged_in');
       	$tutorias= $this->horario->mistutoriasporestadolista($user['id'],"1");
       	$asignatura= $this->asignatura->findAllBy('asig_estado',"1");
       	$datos["tutoria"]=$tutorias;
       	$datos["asignaturas"]=$asignatura;
 		$this->layout->view('/Alumnos/index.php',$datos,false);
	}

	public function Cargarprofesjson()
	{
	$id_asig = $_POST["id"];
   	$profesasig= $this->asignatura->misProxAsig($id_asig);
   	$newJSON = array();
   	foreach ($profesasig as $key => $value) {
   		$newJSON [] = json_encode($profesasig[$key]);
   	}
   	header('Content-Type: application/json');
    echo json_encode(array("estado" =>true,"mensaje"=>"Se ha actualizado correctamente","equipo" => $newJSON ),true);
	}

	public function solicitar($id_hor)
	{
	$user=$this->session->userdata('logged_in');
	//ESTA MIERDA GUARDA UNA NUEVA LISTA A CADA RATO 
	  $row = array( 
	 'lis_id' => 0,
     'lis_fecha' =>'',
     'lis_usu_id' =>$user["id"],
     'lis_usu_asistido' =>1,
     'lis_estado' =>1,
     'lis_comentario' =>''
     );

	  $lista = $this->lista->create($row);
      $lista->save();

	 $rowTuto = array(
	 'tuto_id' => 0,
     'tuto_hor_id' =>$id_hor,
     'tuto_lis_id' => $lista->get("lis_id")
	 	);
	$horario = $this->horario->findById($id_hor);
	 $horario->set('hor_estado' , 0);
	 $horario->save();
	 $tuto = $this->tutoria->create($rowTuto);
	 $tuto->save();
      redirect('Alumno_Controller/index');
	}

    public function cancelar(){
    	$user=$this->session->userdata('logged_in');
    	$id = $_POST["id"];
    	$motivo = $_POST["motivo"];
    	$row = array(
		 'lis_id' =>$id,
	     'lis_fecha' =>'',
	     'lis_usu_id' =>$user["id"],
	     'lis_usu_asistido' =>0,
	     'lis_estado' =>3,
	     'lis_comentario' =>$motivo
	     );
     $id_lista = $this->lista->findhorarioByIdLista($id);	
	 $horario = $this->horario->findById($id_lista->get("hor_id"));
	 $horario->set('hor_estado' , 1);
	 $horario->save();

    	$lista = $this->lista->create($row);
      	$lista->save();
      	redirect('Alumno_Controller/index');
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

		$this->layout->view('/Alumnos/user.php',$datos,false);
	}
	public function cambiarContra()
	{
		if ((!empty($_POST['pass']))|| (!empty($_POST['pass'])) ) {
		
			if ($_POST['pass'] == $_POST['cpass']) {
				$pass = $_POST['pass'];
				$user=$this->session->userdata('logged_in');
				$this->usuario->cambiarcontra($user['id'],$pass);

				echo "contraseña actualizada";
				$this->session->set_flashdata('notice', 'contraseña actualizada');
				redirect('/Alumno_Controller/miPerfil','refresh');
			}
			$this->session->set_flashdata('alert', 'contraseña no coinciden');
			redirect('/Alumno_Controller/miPerfil','refresh');
		}
		$this->session->set_flashdata('alert', 'Los campos están vacíos');
		redirect('/Alumno_Controller/miPerfil','refresh');
	}

	public function misRamos()
    {
        $this->layout->view('/Alumnos/misramos.php','datos',false);
    }
	public function historialTutorias()
    {
		$user=$this->session->userdata('logged_in');
       	$tutorias= $this->horario->mistutoriasporestadohorario($user['id'],"3");
       	$datos["tutoria"]=$tutorias;
 		$this->layout->view('/Alumnos/historialtutorias.php',$datos,false);
    }
 
}
/* End of file Alumno_Controller.php */
/* Location: ./application/controllers/Alumno_Controller.php */