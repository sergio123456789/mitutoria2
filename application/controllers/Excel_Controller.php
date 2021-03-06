<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model','usuario',true);
        $this->load->model('Alumno_model','alum',true);
        $this->load->model('Datos_model','datos',true);
        $this->load->model('Asignatura_model','asignatura',true);
    }
    function index()
    {
$this->load->view('prueba');
    }
public function UsuarioUploader(){
         
        if (isset($_FILES['file'])) {
            if (($gestor = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
                $coun = 0 ;
                

                while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
               
                    if ($coun!=0) {

                    $arid = $this->datos->Miareaacademica($datos['2']);
                    $dato = explode('-',$datos['12']);
                    $rut = $dato['0'];
                    $dv = $dato['1'];
                    $usu = array(
                    'usu_nombre' => $datos['13'],
                    'usu_correo' => $datos['15'],
                    'usu_pass' => sha1('123456'),
                    'usu_estado' => '1',
                    'usu_are_id' => $arid,
                    'usu_rut' => $rut,
                    'usu_dv' => $dv
                     );
               $usuario = $this->usuario->create($usu);
               $ret=$usuario->saveusu(); 

               if ($ret=='perfil') {
               $usuario->setPermisos(array(
                'per_usu_id' => $usuario->get('usu_id'),
                'perf_id' => 5
                ));  
               $usuario->insertperusu();
               $ret=$usuario->get('usu_id');
               }
                

                 date_default_timezone_set("America/Santiago");
                 $fechaMatri = date('y-m-d', strtotime($datos['31']));
                 $fechaNacim = date('y-m-d', strtotime($datos['18']));

                  $usualum = array(
                        'alu_usu_id' => $ret,
                        'alu_inst' => $datos['1'],
                        'alu_cod_pe' => $datos['3'],
                        'alu_programa_estudio' => $datos['4'],
                        'alu_cod_mencion' => $datos['5'],
                        'alu_mencion' => $datos['6'],
                        'alu_jornada' => $datos['7'],
                        'alu_peec' => $datos['8'],
                        'alu_cant_ex_competencias' => $datos['10'],
                        'alu_cant_homologaciones' => $datos['11'],
                        'alu_correo_personal' => $datos['15'],
                        'alu_telefono' => $datos['16'],
                        'alu_celular' => $datos['17'],
                        'alu_fecha_nacimiento' => $fechaNacim, 
                        'alu_edad' => $datos['19'],
                        'alu_sexo' => $datos['20'],
                        'alu_pais' => $datos['21'],
                        'alu_comuna' => $datos['27'],
                        'alu_ciudad_familia' => $datos['22'],
                        'alu_region_familia' => $datos['23'],
                        'alu_ingreso_familiar' => $datos['24'],
                        'alu_direccion' => $datos['25'],
                        'alu_ciudad' => $datos['28'],
                        'alu_region' => $datos['29'],
                        'alu_plan' => $datos['30'],
                        'alu_fechamatricula' => $fechaMatri,
                        'alu_comunacolegio' => $datos['32'],
                        'alu_rolrbd' => $datos['33'],
                        'alu_colegio' => $datos['34'],
                        'alu_tipo_colegio' => $datos['35'],
                        'alu_otro_colegio' => $datos['36'],
                        'alu_egreso_media' => $datos['37'],
                        'alu_puntaje_psu' => $datos['38'],
                        'alu_ins_anterior' => $datos['39'],
                        'alu_carrera_anterior' => $datos['40'],
                        'alu_nuevo_antiguo' => $datos['41'],
                        'alu_semestre_ingreso' => $datos['42'],
                        'alu_reincorporado' => $datos['44'],
                        'alu_num_asignatura' => $datos['50'],
                        'alu_semestre' => $datos['51'],
                        'alu_pagare' => $datos['49'],
                        'alu_cupones' => $datos['48'],
                            );
                
                 $alumno = $this->alum->create($usualum);
                 $alumno->saveAlu();
                
                }
                 $coun = $coun + 1 ;
            }

                $user = $this->session->userdata('logged_in');
                if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }
                fclose($gestor);

            }
        }

 }
   public function UsuarioTutoriaPermanente(){
         
        if (isset($_FILES['file'])) {
            if (($gestor = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
                $coun = 0 ;
                // alumnos de cada tutor progresion Excel

                while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
               
                    if ($coun!=0) {


                    $dato = explode('-',$datos['1']);
                    $rut = $dato['0'];
                    $dv = $dato['1'];
                    $nombre=$datos['0'];
                    $mail=$datos['2'];
                    $arid = $this->datos->Miareaacademica($datos['3']);

                    $tutor=array(
                        'usu_nombre' => $nombre,
                        'usu_correo' => $mail,
                        'usu_pass' => '123456',
                        'usu_estado' => 1,
                        'usu_are_id' => $arid,
                        'usu_rut' => $rut,
                        'usu_dv' => $dv
                        );

                    $usuario = $this->usuario->create($tutor);
                    $ret=$usuario->saveusu(); 
                    

                     if ($ret=='perfil') {
                       $usuario->setPermisos(array(
                        'per_usu_id' => $usuario->get('usu_id'),
                        'perf_id' => 7
                        ));  
                       $usuario->insertperusu();
                       $ret=$usuario->get('usu_id');
                       }

                    }
                    $coun= $coun + 1;

            }
                fclose($gestor);
        
        }
        $user = $this->session->userdata('logged_in');
                if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }
    }
}


 public function UsuarioTutoria(){
        if (isset($_FILES['file'])) {
            if (($gestor = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
                $coun = 0 ;
                while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
                    if ($coun!=0) {
                    $dato = explode('-',$datos['0']);
                    $rut = $dato['0'];
                    $dv = $dato['1'];
                    $nombre=$datos['1'];
                    $asig=$datos['2'];
                    $mail='';
                    //$arid = $this->datos->Miareaacademica($datos['2']);
                    $tutor=array(
                        'usu_nombre' => $nombre,
                        'usu_correo' => $mail,
                        'usu_pass' => '123456',
                        'usu_estado' => 1,
                        'usu_are_id' => 8,
                        'usu_rut' => $rut,
                        'usu_dv' => $dv
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
                       $asig=array('asig_nombre' =>$asig,
                                'asig_car_id'=>1);   
                        $asigna=$this->asignatura->create($asig);
                        $idAsi=$asigna->save();
                        $prof=array(
                            'prof_asig_id'=>$idAsi,
                            'prof_usu_id'=>$ret
                            );
                        $profe=$this->usuario->createAsig($prof);
                        $profe->saveProfAsig();
                       }
                    
                    }
                    $coun= $coun + 1;

            }
                fclose($gestor);
        
        }
        $user = $this->session->userdata('logged_in');
                if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }
    }
}


    public function TutoresPermanentes(){
         //listado de tutores progresion
        if (isset($_FILES['file'])) {
            if (($gestor = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
                $coun = 0 ;
                

                while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
               
                    if ($coun!=0) {
                    $dato = explode('-',$datos['1']);
                    $nombre=$datos['0'];
                    $rut = $dato['0'];
                    $dv = $dato['1'];
                    $email=$datos['2'];
                    $area=$datos['3']; 
                    }
                    $coun= $coun + 1;
                fclose($gestor);
                }
                $user = $this->session->userdata('logged_in');
                if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }
            }
        }

    }
    public function Tutores(){
         //listado de tutores sede salas y sus datos
        if (isset($_FILES['file'])) {
            if (($gestor = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
                $coun = 0 ;

                while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
                    if ($coun!=0) {                   
                    $dato = explode('-',$datos['9']);
                    $rut = $dato['0'];
                    $dv = $dato['1'];
                    $tutor=$datos['10'];
                    $asignatura=$datos['11']; 
                    }
                    $coun= $coun + 1;
                fclose($gestor);

                }
                $user = $this->session->userdata('logged_in');
                if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }
            }
        }
    }

    public function downloadAlum(){
        $this->usuario->downloadAlum('usuarios');
        if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }    
            }

    public function downloadTutorias(){
        $this->usuario->downloadTutorias('tutorias_realizadas');
        if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }    
            }
    public function downloadTutores(){
        $this->usuario->downloadTutorias('tutores');
        if(count($user['permisos']) > 0){
                    if (in_array(1, $user['permisos'])) {
                        redirect('Asesor_Controller/importar','refresh');
                    }elseif (in_array(2, $user['permisos'])) {
                        redirect('Asistente_Controller/importar','refresh');
                    }
                }    
            }
}

/* End of file Excel_Controller.php */
/* Location: ./application/controllers/Excel_Controller.php */