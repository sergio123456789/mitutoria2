<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('/MasterPage',false);
		$this->load->model('Alumno_model','alumno',false);
		$this->load->model('Usuario_model','tutor',false);
		$this->load->model('Lista_model','lista',false);
		$this->load->model('Horario_model','horario',false);
	}
	public function index()
	{
        $user=$this->session->userdata('logged_in');
		$alumno=$this->alumno->findAlumnsBytutor($user['id']);   		   
		$datos['alumnos']=$alumno;

 		$this->layout->view('/Tutor/index.php',$datos,false);

	}
    public function miPerfil()
	{
		$user=$this->session->userdata('logged_in');
		$tutor=$this->tutor->findByProfesor($user['id']);       
		$datos['tutores']=$tutor;
		
		$this->layout->view('/Tutor/user.php',$datos,false);
	}
	public function cambiarContra()
	{
		if ((!empty($_POST['pass']))|| (!empty($_POST['pass'])) ) {
		
			if ($_POST['pass'] == $_POST['cpass']) {
				$pass = $_POST['pass'];
				$user=$this->session->userdata('logged_in');
				$this->tutor->cambiarcontra($user['id'],$pass);

				echo "contraseña actualizada";
				$this->session->set_flashdata('notice', 'contraseña actualizada');
				redirect('/Tutor_Controller/miPerfil','refresh');
			}
			$this->session->set_flashdata('alert', 'contraseña no coinciden');
			redirect('/Tutor_Controller/miPerfil','refresh');
		}
		$this->session->set_flashdata('alert', 'Los campos están vacíos');
		redirect('/Tutor_Controller/miPerfil','refresh');
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
	 $horario->set('hor_estado' , 0);
	 $horario->save();

    	$lista = $this->lista->create($row);
      	$lista->save();
      	redirect('Tutor_Controller/index');
    }
   
    public function miHorario()
	{
		$this->load->view('/Tutor/mihorario.php','datos',false);
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