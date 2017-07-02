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
		$this->load->model('Disponibilidad_model','disponibilidad',true);
		$this->load->model('Calificacion_model','calificacion',true);
		$this->load->model('Area_model','area',true);
		$this->load->library('session');

		}else{
			redirect('login');
		}
	}
	public function index()
	{
		$user=$this->session->userdata('logged_in');
		$usuario = $this->usuario->findById($user['id']);
		$area = $this->area->findAll();
		$alumno = $this->alumno->findByName('alu_usu_id',$user['id']);	
		$datos['usuario'] = $usuario;
		$datos['alumno'] = $alumno;
		$datos['area'] = $area;
		$this->layout->view('/Alumnos/mannuevo.php',$datos,false);
	}
	public function eliminar($id_user)
	{
	$usuario = $this->usuario->findById($id_user);
	$usuario->set('usu_estado' , 0);
	      	redirect('Alumno_Controller/index');
	}
	public function editar()
	{
		$nombre =$_POST['nombre'];$rut =$_POST['rut'];
		$dv =$_POST['dv'];$edad =$_POST['edad'];
		$fechanacimiento =$_POST['fechanacimiento'];$pais =$_POST['pais'];
		$comuna =$_POST['comuna'];$direcion =$_POST['direcion'];
		$ciudad =$_POST['ciudad'];$region =$_POST['region'];
		$plan =$_POST['plan'];$fechamatricula =$_POST['fechamatricula'];
		$alumnonuevo =$_POST['alumnonuevo'];$telefono =$_POST['telefono'];
		$celular =$_POST['celular'];$correo =$_POST['correo'];
		$correo_personal =$_POST['correo_personal'];$ciudadfamilia =$_POST['ciudadfamilia'];
		$ingresofamiliar =$_POST['ingresofamiliar'];$comunacolegio =$_POST['comunacolegio'];
		$rolrbd =$_POST['rolrbd'];$colegio =$_POST['colegio'];
		$inst =$_POST['inst'];$tipocolegio =$_POST['tipocolegio'];
		$otrocolegio =$_POST['otrocolegio'];$egresomedia =$_POST['egresomedia'];
		$puntajepsu =$_POST['puntajepsu'];$insanterior =$_POST['insanterior'];
		$carreraanterior =$_POST['carreraanterior'];$semestreingreso =$_POST['semestreingreso'];
		$reincorporado =$_POST['reincorporado'];$numasignatura =$_POST['numasignatura'];
		$semestre =$_POST['semestre'];$pagare =$_POST['pagare'];
		$cupones =$_POST['cupones'];$codpe =$_POST['codpe'];
		$progamadeestudio =$_POST['progamadeestudio'];$codigomencion =$_POST['codigomencion'];
		$mencion =$_POST['mencion'];$jornada =$_POST['jornada'];
		$genero =$_POST['genero'];$cantidadexcompetencias =$_POST['cantidadexcompetencias'];
		$Peec =$_POST['Peec'];$cantidadhomologaciones =$_POST['cantidadhomologaciones'];
		$codpe =$_POST['codpe']; $area =$_POST['area'];

		$usu  =  array(
			'usu_id' => 0,
			'usu_nombre' => $nombre,
			'usu_correo' => $correo,
			'usu_estado' => 1,
			'usu_are_id' => $area,
			'usu_rut' => $rut,
			'usu_dv' => $dv
			);

  			 $usuario = $this->usuario->create($usu);
               $ret=$usuario->saveusu();
               
        $alu=$this->alumno->findAllBy("alu_usu_id",$usuario->get('usu_id'));
		$alumno = array(
		'alu_id' => $alu->get('alu_id'), 
		'alu_usu_id' => $usuario->get('usu_id'),
		'alu_inst' => $inst,
		'alu_cod_pe' => $codpe,
		'alu_programa_estudio' => $progamadeestudio,
		'alu_cod_mencion' => $codigomencion,
		'alu_mencion' => $mencion,
		'alu_jornada' => $jornada ,
		'alu_peec' => $Peec,
		'alu_cant_ex_competencias' => $cantidadexcompetencias,
		'alu_cant_homologaciones' => $cantidadhomologaciones,
		'alu_correo_personal' => $correo_personal,
		'alu_telefono' => $telefono,
		'alu_celular' => $celular,
		'alu_fecha_nacimiento' => $fechanacimiento, 
		'alu_edad' => $edad,
		'alu_sexo' => $genero,
		'alu_pais' => $pais,
		'alu_comuna' => $comuna, 
		'alu_ciudad_familia' => $ciudadfamilia,
		'alu_region_familia' => '',
		'alu_ingreso_familiar' => $ingresofamiliar,
		'alu_direccion' => $direcion,
		'alu_ciudad' => $ciudad,
		'alu_region' => $region,
		'alu_plan' => $plan,
		'alu_fechamatricula' => $fechamatricula,
		'alu_comunacolegio' => $comunacolegio,
		'alu_rolrbd' => $rolrbd,
		'alu_colegio' => $colegio,
		'alu_tipo_colegio' => $tipocolegio,
		'alu_otro_colegio' =>$otrocolegio,
		'alu_egreso_media' => $egresomedia,
		'alu_puntaje_psu' => $puntajepsu,
		'alu_ins_anterior' => $insanterior,
		'alu_carrera_anterior' => $carreraanterior,
		'alu_nuevo_antiguo' => $alumnonuevo,
		'alu_semestre_ingreso' => $semestreingreso,
		'alu_reincorporado' => $reincorporado,
		'alu_num_asignatura' => $numasignatura,
		'alu_semestre' => $semestre,
		'alu_pagare' => $pagare,
		'alu_cupones' => $cupones
			);

    $alumnocreate = $this->alumno->create($alumno);
	 $alumnocreate->save();
	       	redirect('Alumno_Controller/index');
	}
	public function nuevo()
	{
		$nombre =$_POST['nombre'];$rut =$_POST['rut'];
		$dv =$_POST['dv'];$edad =$_POST['edad'];
		$fechanacimiento =$_POST['fechanacimiento'];$pais =$_POST['pais'];
		$comuna =$_POST['comuna'];$direcion =$_POST['direcion'];
		$ciudad =$_POST['ciudad'];$region =$_POST['region'];
		$plan =$_POST['plan'];$fechamatricula =$_POST['fechamatricula'];
		$alumnonuevo =$_POST['alumnonuevo'];$telefono =$_POST['telefono'];
		$celular =$_POST['celular'];$correo =$_POST['correo'];
		$correo_personal =$_POST['correo_personal'];$ciudadfamilia =$_POST['ciudadfamilia'];
		$ingresofamiliar =$_POST['ingresofamiliar'];$comunacolegio =$_POST['comunacolegio'];
		$rolrbd =$_POST['rolrbd'];$colegio =$_POST['colegio'];
		$inst =$_POST['inst'];$tipocolegio =$_POST['tipocolegio'];
		$otrocolegio =$_POST['otrocolegio'];$egresomedia =$_POST['egresomedia'];
		$puntajepsu =$_POST['puntajepsu'];$insanterior =$_POST['insanterior'];
		$carreraanterior =$_POST['carreraanterior'];$semestreingreso =$_POST['semestreingreso'];
		$reincorporado =$_POST['reincorporado'];$numasignatura =$_POST['numasignatura'];
		$semestre =$_POST['semestre'];$pagare =$_POST['pagare'];
		$cupones =$_POST['cupones'];$codpe =$_POST['codpe'];
		$progamadeestudio =$_POST['progamadeestudio'];$codigomencion =$_POST['codigomencion'];
		$mencion =$_POST['mencion'];$jornada =$_POST['jornada'];
		$genero =$_POST['genero'];$cantidadexcompetencias =$_POST['cantidadexcompetencias'];
		$Peec =$_POST['Peec'];$cantidadhomologaciones =$_POST['cantidadhomologaciones'];
		$codpe =$_POST['codpe']; $area =$_POST['area'];

		$usu  =  array(
			'usu_id' => 0,
			'usu_nombre' => $nombre,
			'usu_correo' => $correo,
			'usu_estado' => 1,
			'usu_are_id' => $area,
			'usu_rut' => $rut,
			'usu_dv' => $dv
			);

  		   $usuario = $this->usuario->create($usu);
               $ret=$usuario->saveusu(); 

		$alumno = array(
		'alu_id' => 0, 
		'alu_usu_id' => $usuario->get('usu_id'),
		'alu_inst' => $inst,
		'alu_cod_pe' => $codpe,
		'alu_programa_estudio' => $progamadeestudio,
		'alu_cod_mencion' => $codigomencion,
		'alu_mencion' => $mencion,
		'alu_jornada' => $jornada ,
		'alu_peec' => $Peec,
		'alu_cant_ex_competencias' => $cantidadexcompetencias,
		'alu_cant_homologaciones' => $cantidadhomologaciones,
		'alu_correo_personal' => $correo_personal,
		'alu_telefono' => $telefono,
		'alu_celular' => $celular,
		'alu_fecha_nacimiento' => $fechanacimiento, 
		'alu_edad' => $edad,
		'alu_sexo' => $genero,
		'alu_pais' => $pais,
		'alu_comuna' => $comuna, 
		'alu_ciudad_familia' => $ciudadfamilia,
		'alu_region_familia' => '',
		'alu_ingreso_familiar' => $ingresofamiliar,
		'alu_direccion' => $direcion,
		'alu_ciudad' => $ciudad,
		'alu_region' => $region,
		'alu_plan' => $plan,
		'alu_fechamatricula' => $fechamatricula,
		'alu_comunacolegio' => $comunacolegio,
		'alu_rolrbd' => $rolrbd,
		'alu_colegio' => $colegio,
		'alu_tipo_colegio' => $tipocolegio,
		'alu_otro_colegio' =>$otrocolegio,
		'alu_egreso_media' => $egresomedia,
		'alu_puntaje_psu' => $puntajepsu,
		'alu_ins_anterior' => $insanterior,
		'alu_carrera_anterior' => $carreraanterior,
		'alu_nuevo_antiguo' => $alumnonuevo,
		'alu_semestre_ingreso' => $semestreingreso,
		'alu_reincorporado' => $reincorporado,
		'alu_num_asignatura' => $numasignatura,
		'alu_semestre' => $semestre,
		'alu_pagare' => $pagare,
		'alu_cupones' => $cupones
			);

          $alumno = $this->alum->create($usualum);
                 $alumno->save();
                  //var_dump($usualum);
  	redirect('Alumno_Controller/index');
    }
	/*public function index()
	{
		$user=$this->session->userdata('logged_in');
       	$tutorias= $this->horario->mistutoriasporestadolista($user['id'],"1");
       	$asignatura= $this->asignatura->findAllBy('asig_estado',"1");
       	$datos["asignaturas"]=$asignatura;
       	$datos["tutoria"]=$tutorias;
 		$this->layout->view('/Alumnos/index.php',$datos,false);
	}*/
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
	 $horario->set('hor_estado' , 1);
	 $horario->save();
	 $tuto = $this->tutoria->create($rowTuto);
	 $tuto->save();
      redirect('Tutor_Controller/index');
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
    		$user=$this->session->userdata('logged_in');
    	 	$asignaturas= $this->asignatura->miasignaturasproarea($user['id'],$user['area']);
    	 $datos['asignaturas']=$asignaturas;

        $this->layout->view('/Alumnos/misramos.php',$datos,false);
    }

    public function createdispo()
    {
	$this->load->view('/Alumnos/CrearDisponibilidad.php',"cscs",false);
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

      $this->load->view('/Alumnos/CrearDisponibilidad.php',$data,false);
        }else {
        $data["error"] = "Porfavor seleccione almenos un horario de disponibilidad";
    }
    }
    // intento full calendar

    function deleteevento($id = null)
    { if(!is_null($id)){
            $route = $this->disponibilidad->findById($id);
            if($route){
                $route->delete();
            }
        }
        $this->load->view('/Alumnos/CrearDisponibilidad');
    }
	public function Cargarprofesayudantiasjson()
	{
	$id_asig = $_POST["id"];
   	$profesasig= $this->asignatura->misProxAsig($id_asig,"3");
   	$newJSON = array();
   	foreach ($profesasig as $key => $value) {
   		$newJSON [] = json_encode($profesasig[$key]);
   	}
   	header('Content-Type: application/json');
    echo json_encode(array("estado" =>true,"mensaje"=>"Se ha actualizado correctamente","equipo" => $newJSON ),true);
	}

	public function historialTutorias()
    {
		$user=$this->session->userdata('logged_in');
       	$tutorias= $this->horario->mistutoriasporestadohorario($user['id'],"3");
       	$datos["tutoria"]=$tutorias;
 		$this->layout->view('/Alumnos/historialtutorias.php',$datos,false);
    }
   
    function mostrarProfe($usu_id){
		$usuario = $this->usuario->findById($usu_id);
		$asignaturas = $this->asignatura->asignaturaProfe($usu_id);
		$notas = array();
		foreach ($asignaturas as $key => $value) {
			$notas[$value->get('asig_id')] = $this->calificacion->calificacionesDelProfe($usu_id,$value->get('asig_id'));
		}
		$datos['notas'] = $notas;
		$datos["asig"] = $asignaturas;
		$datos['usuario'] = $usuario;

		$this->layout->view('/Alumnos/verProfe.php',$datos,false);
    }

     function claficarProfe($usu_id,$id_lis){
		$usuario = $this->usuario->findById($usu_id);
		$asignaturas = $this->asignatura->asignaturaProfe($usu_id);
		$notas = array();
		foreach ($asignaturas as $key => $value) {
			$notas[$value->get('asig_id')] = $this->calificacion->calificacionesDelProfe($usu_id,$value->get('asig_id'));
		}
		$user = $this->session->userdata('logged_in');
		$tutorias= $this->horario->mitutoriasporestadohorarioparacalificar($user['id'],$id_lis);
		$id_lista = $this->lista->findhorarioByIdLista($id_lis);	
		$horario = $this->horario->findById($id_lista->get("hor_id"));
		$calificacion = $this->calificacion->calificacion($user['id'],$horario->get('hor_id'));

       	$datos["tutoria"]=$tutorias;
       	$datos["calificacion"]=$calificacion;
  
		$datos['notas'] = $notas;
		$datos["asig"] = $asignaturas;
		$datos['usuario'] = $usuario;

		$this->layout->view('/Alumnos/verProfe.php',$datos,false);
    }
    function Puntuar ()
    {
    	$puntuacion = $_POST['estrellas'];
    	$opinion = $_POST['opinion'];
    	$id = $_POST['id'];
     	$id_lista = $this->lista->findhorarioByIdLista($id);	
		$horario = $this->horario->findById($id_lista->get("hor_id"));
		$user = $this->session->userdata('logged_in');
		$array = array(
			 'cal_id' =>0,
		     'cal_usu_id' =>$horario->get('hor_usu_id'),
		     'cal_hor_id' =>$horario->get('hor_id'),
		     'cal_nota' =>$puntuacion,
		     'cal_usu_id_alum' =>$user['id'],
		     'cal_comentario' =>$opinion
				);
		$calificacion = $this->calificacion->create($array);
		$calificacion->save();
		redirect('Alumno_Controller/mostrarProfe/'.$horario->get('hor_usu_id'));


    }

}
/* End of file Alumno_Controller.php */
/* Location: ./application/controllers/Alumno_Controller.php */