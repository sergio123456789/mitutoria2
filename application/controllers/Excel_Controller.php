<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('Usuario_model','usuario',true);
		$this->load->model('Alumno_model','alum',true);
		$this->load->model('Datos_model','datos',true);
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
                	if ($coun==10) {
                        break;
                    }
                	if ($coun!=0) {
                		
                	
                	$arid = $this->datos->Miareaacademica($datos['2']);
                	$dato = explode('-',$datos['12']);
                	$rut = $dato['0'];
                    $dv = $dato['1'];
                	$usu = array(
					'usu_nombre' => $datos['13'],
					'usu_correo' => $datos['15'],
					'usu_pass' => '123456',
					'usu_estado' => '1',
					'usu_are_id' => $arid,
					'usu_rut' => $rut,
					'usu_dv' => $dv
                	 );

                   

               $usuario = $this->usuario->create($usu);
             $id = $usuario->save();

                  $usualum = array(
                        'alu_usu_id' => $id,
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
                        'alu_fecha_nacimiento' => $datos['18'], 
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
                        'alu_fechamatricula' => $datos['31'],
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
                        'alu_semestre' => $datos['47'],
                        'alu_pagare' => $datos['49'],
                        'alu_cupones' => $datos['48'],
                            );
                 $alumno = $this->alum->create($usualum);
                $alumno->save();
                var_dump($usualum);
                var_dump($coun);
               
                }
                 $coun = $coun + 1 ;
            }

                fclose($gestor);

            }
        }

 
	}




}

/* End of file Excel_Controller.php */
/* Location: ./application/controllers/Excel_Controller.php */