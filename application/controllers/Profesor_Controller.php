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
		$this->load->model('Disponibilidad_model','disponibilidad',true);

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
	public function SolicitudReforzamiento(){
     $user = $this->session->userdata('logged_in');
     //$hor=$this->horario->findHorarioByProfesor($user['id']);
		if((!empty($_POST['dia']))||(!empty($_POST['inicio']))||(!empty($_POST['termino']))||
		      (!empty($_POST['sala']))||(!empty($_POST['fecha']))||(!empty($_POST['elegirAsig']))){
			$dia=$_POST['dia'];
			$inicio=$_POST['inicio'];
			$termino=$_POST['termino'];
			$sala=$_POST["sala"];
			$fecha=$_POST["fecha"];
			$asig=$_POST["elegirAsig"];

			//foreach ($hor as $value) {
				$row=array(
				'hor_id' =>'',
                'hor_dia' =>$dia,
                'hor_inicio' =>$inicio,
                'hor_termino' =>$termino,
			    'hor_fechasis' =>$fecha,
			    'hor_usu_id' =>$user['id'],
			    'hor_sala' =>$sala,
			    'hor_asig_id' =>$asig,
			    'hor_estado' =>0,
			    'hor_tipo' =>2
			    );
			//}

			$horario=$this->horario->create($row);
			$horario->save();
			redirect('Profesor_Controller/refor');
			

		}
	}
  
      public function refor()
	{ $datitos["asignatura"]=$this->asignatura->findAll();
		$this->layout->view('/Profesor/reforzamiento.php',$datitos,false);
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
		 $datos = $this->usuario->cambiarcontra($usuid,$newcon);
		redirect('Profesor_Controller/miPerfil');
	}

	public function createdispo()
    {
	$this->layout->view('/Profesor/CrearDisponibilidad.php',"cscs",false);
    }
public function test()
    {
    	$user = $this->session->userdata('logged_in');
    	$datosDis = $this->disponibilidad->findByIdUsu($user['id']);
    	echo json_encode($datosDis);
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

      $this->layout->view('/Profesor/CrearDisponibilidad.php',$data,false);
        }else {
        $data["error"] = "Porfavor seleccione un horario de disponibilidad";
    }
    }

    function deleteevento($id = null)
    { if(!is_null($id)){
            $route = $this->disponibilidad->findById($id);
            if($route){
                $route->delete();
            }
        }
        $this->layout->view('/Profesor/CrearDisponibilidad');
    }
    

}?>