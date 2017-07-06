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
		$this->load->model('Disponibilidad_model','disponibilidad',false);
		$this->load->model('Asignatura_model','asignatura',false);
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
	public function test()
    {
    	$user = $this->session->userdata('logged_in');
    	$datosDis = $this->disponibilidad->findByIdUsu($user['id']);
    	echo json_encode($datosDis);
    }
	 function deleteevento($id = null)
    { if(!is_null($id)){
            $route = $this->disponibilidad->findById($id);
            if($route){
                $route->delete();
            }
        }
        $this->load->view('/Tutor/mihorario');
    }
	 public function insertDispo(){
        $user = $this->session->userdata('logged_in');
        $data["error"] = "";
        if ((isset($_POST['inicio']) && isset($_POST['fin'])) || isset($_POST['dia'])) {
           if (!empty($_POST['inicio']) && !empty($_POST['fin'])) {
 
            if ($_POST['inicio'] >= '08:00' && $_POST['fin'] <= '23:00' && $_POST['inicio'] < $_POST['fin'] ) {
          $row = array(
            'dis_dia' =>  $_POST['dia'],
            'dis_hi' => '2018/01/'.$_POST['dia'].' '.$_POST['inicio'],
            'dis_ht' => '2018/01/'.$_POST['dia'].' '.$_POST['fin'],
            'dis_usu_id' => $user['id']
                );
               $datos = $this->disponibilidad->create($row);
               $datos->insert(); 

        }else{
            $data["error"] = "Horario no Admitido";
           }
        }

      $this->load->view('/Tutor/mihorario.php',$data,false);
        }else {
        $data["error"] = "Porfavor seleccione almenos un horario de disponibilidad";
    }
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
    	$alu=$this->alumno->findAlumnsBytutor($user['id']);
    	
    	$id = $_POST["id"];
    	$motivo = $_POST["motivo"];
//si el metodo entrega un array siempre manipular los datos con foreach dentro del controller
foreach ($alu as $value) {
	

    	$row = array(
		 'lis_id' =>$id,
	     'lis_fecha' =>$value->get('hor_fechasis'),
	     'lis_usu_id'=>$value->get('alu_id'),
	     'lis_usu_cancelado'=>$user['id'],
	     'lis_usu_asistido' =>0,
	     'lis_estado' =>3,
	     'lis_comentario' =>$motivo
	     );

}
     $id_lista = $this->lista->findhorarioByIdLista($id);	    	
	 $horario = $this->horario->findById($id_lista->get("hor_id"));
	 $horario->set('hor_estado' , 3);
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
		$user=$this->session->userdata('logged_in');
		$asignatura=$this->asignatura->misasignaturas2($user['id']);
        $datos['profesor']=$asignatura;
		$this->layout->view('/Tutor/misramos.php','datos',false);
	}
      public function solReforzamientos()
	{
		$this->layout->view('/Tutor/solreforzamiento.php','datos',false);
	}

	function lista(){
		$rutA = $_POST["rut"];
		$rut = substr($rutA, 0, 8);
		$usu = $this->tutor->findByRutJSON($rut);
		$newJSON = array();
	   	foreach ($usu as $key => $value) {
	   		$newJSON [] = json_encode($usu[$key]);
	   	}
	   	header('Content-Type: application/json');
	    echo json_encode(array("estado" =>true,"mensaje"=>"Se ha actualizado correctamente","equipo" => $newJSON ),true);
	}
	function createLista(){
		$datos=$_POST['alumnos'];
		$id=$_POST['id'];
		$alumnos=$datos;
		foreach ($alumnos as $key => $value) {

			$row = array(
			 'lis_id' =>$id,
		     'lis_fecha' =>'',
		     'lis_usu_id' =>$value,
		     'lis_usu_asistido' =>1,
		     'lis_estado' =>1,
		     'lis_comentario' =>'clase realizada'
		     );

			 $id_lista = $this->lista->findhorarioByIdLista($id);	    	
			 $horario = $this->horario->findById($id_lista->get("hor_id"));
			 $horario->set('hor_estado' , 1);
			 $horario->save();
			 redirect('Tutor_Controller/index');


		}
	}
}

/* End of file Tutor_Controller.php */
/* Location: ./application/controllers/Tutor_Controller.php */