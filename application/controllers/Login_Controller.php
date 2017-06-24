<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model','usuario',true);
	}
	public function index()
	{
		   	$this->load->view('login');
	}
	
	public function login()
	{
	 	$this->load->helper('form');
		$this->load->library('form_validation');
		$data =array();
		$data;	 
		if(isset($_REQUEST['user']) && isset($_REQUEST['password']))
		{
			$user     =  $_REQUEST['user'];
			$password =	 $_REQUEST['password'];
		   //se fijan las rreglas de validación 	   
		   $this->form_validation->set_rules('user', 'user', 'trim|required|xss_clean');
		   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
		    //valida el form y checkea la bd
		   //var_dump($this->form_validation->_error_array); exit();
		   if($this->form_validation->run()) //si la validación falla se envía al form de nuevo
		   {
		   		$user = $this->session->userdata('logged_in');
	   			if(count($user['permisos']) > 0){
					if (in_array(5, $user['permisos'])) {
	   					redirect('Alumno_Controller/index','refresh');
   					}elseif (in_array(3, $user['permisos'])) {
	   					redirect('Tutor_Controller/index','refresh');
	   				}elseif (in_array(2, $user['permisos'])) {	
	   					redirect('Asistente_Controller/index','refresh');	   			
	   				}elseif (in_array(1, $user['permisos'])) {	
	   					redirect('Asesor_Controller/index','refresh');	
	   				}elseif (in_array(4, $user['permisos'])) {
	   					redirect("Profesor_Controller/index","refresh");
	   				}	   				
	   			}else{
	   				session_start();
   					session_destroy();
  					$this->session->unset_userdata('logged_in');
	   				$data['error'] = 'Usted no tiene privilegios suficientes para ingresar al sistema';
	   			}
		   		
		   } else {
		   	   $data['error'] = "Usuario y/o contraseña incorrecta";
		   }
		   
		}
		$this->load->view('login',$data);
	}   				
	   	

	
	function logout(){
	   //session_start();
	   session_destroy();
	   $this->session->unset_userdata('logged_in');
	   //session_destroy(); //destruye la sesión, o sea el arreglo de sesión logged_in
	   redirect('login', 'refresh');
	}

 	function check_database($pass)
 	{
	   //Field validation succeeded.&nbsp; Validate against database
	   $user = $this->input->post('user'); //extrae el dato post que viene del formulario y la guarda en una variable
	   //query the database
	   if($this->valida_rut($user)){
		   	$rut = explode("-",$user);
		   	$user = $this->usuario->login($rut[0], $pass); // trae verdadero si encuentra los datos user y pass en la bd
	   }else{
	   		$user = null;
	   }
	   $existe = false;
	   if(!is_null($user)){ //si hay resultado de la consulta en la bd
	     	$sess_array = array();
	       	$sess_array = array( //guarda los datos traidos de la bd en un array
	         'id' => $user->get('usu_id'),
	         'correo' => $user->get('usu_correo'),    
	         'nombre' => $user->get('usu_nombre'),
	         'permisos' =>$user->getPermisos(),//retorna array
	         'area' => $user->getArea()
	       );
	       $this->session->set_userdata('logged_in', $sess_array); //almacena el array $sess_array en array de sesión logged_in
	       $existe = true;
	   }
	   return $existe;
	}
	

	function valida_rut($rut)
	{
	    $rut = preg_replace('/[^k0-9]/i', '', $rut);
	    $dv  = substr($rut, -1);
	    $numero = substr($rut, 0, strlen($rut)-1);
	    $i = 2;
	    $suma = 0;
	    foreach(array_reverse(str_split($numero)) as $v)
	    {
	        if($i==8)
	            $i = 2;
	        $suma += $v * $i;
	        ++$i;
	    }
	    $dvr = 11 - ($suma % 11);
	    
	    if($dvr == 11)
	        $dvr = 0;
	    if($dvr == 10)
	        $dvr = 'K';
	    if($dvr == strtoupper($dv))
	        return true;
	    else
	        return false;
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */