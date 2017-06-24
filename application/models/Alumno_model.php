<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_model extends CI_Model {
private $columns = array(
'alu_id' => 0, 
'alu_usu_id' => 0,
'alu_inst' => '',
'alu_cod_pe' => '',
'alu_programa_estudio' => '',
'alu_cod_mencion' => '',
'alu_mencion' => '',
'alu_jornada' => 0 ,
'alu_peec' => '',
'alu_cant_ex_competencias' => 0,
'alu_cant_homologaciones' => 0,
'alu_correo_personal' => '',
'alu_telefono' => 0,
'alu_celular' => 0,
'alu_fecha_nacimiento' => '', 
'alu_edad' => 0,
'alu_sexo' => '',
'alu_pais' => '',
'alu_comuna' => '',
'alu_ciudad_familia' => '',
'alu_region_familia' => '',
'alu_ingreso_familiar' => '',
'alu_direccion' => '',
'alu_ciudad' => '',
'alu_region' => '',
'alu_plan' => '',
'alu_fechamatricula' => '',
'alu_comunacolegio' => '',
'alu_rolrbd' => '',
'alu_colegio' => '',
'alu_tipo_colegio' => '',
'alu_otro_colegio' => '',
'alu_egreso_media' => '',
'alu_puntaje_psu' => 0,
'alu_ins_anterior' => '',
'alu_carrera_anterior' => '',
'alu_nuevo_antiguo' => 0,
'alu_semestre_ingreso' => '',
'alu_reincorporado' => 0,
'alu_num_asignatura' => 0,
'alu_semestre' => 0,
'alu_pagare' => 0,
'alu_cupones' => ''
	);
	

public function get($key){
		return $this->columns[$key];
	}	

	public function findAll(){
	$this->load->database();
	$res = $this->db->get('alumno');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('alumno',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }
	function insert(){
		$this->db->insert('alumno',$this->columns);

	}

    public function save(){
		try {
			$this->load->database();
		if($this->columns['alu_id'] == 0){
			$this->db->insert("alumno",$this->columns);
			$this->columns['alu_id'] = $this->db->insert_id();
		}else{
			$this->db->where('alu_id',$this->columns['alu_id']);
			$this->db->update('alumno',$this->columns);
		}
			
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}
	}

	public function findByName($column = null, $value = ''){
		$this->load->database();
		$res = $this->db->get_where('alumno',array($column =>$value));
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			return $result;
	}
	
	public function setColumns ($row = null){
		foreach ($row as $key => $value) {
			$this->columns[$key] = $value;
			}
    }

    public function findById($id = null){
		$id = intval($id);
		$this->load->database();
		$res = $this->db->get_where('alumno',array('alu_id' =>$id));
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			return $result;
	}

	public function create($row){
		$prod =  new Alumno_model();
		$prod->setColumns($row);
		return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('alu_id',$id);
		return $this->db->delete('alumno');
	}



}

/* End of file Alumno_model.php */
/* Location: ./application/models/Alumno_model.php */