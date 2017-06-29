<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Disponibilidad_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	private  $_columns  =  array(
			'dis_id' => 0,
			'dis_sala' => '',
			'dis_dia' => '',
			'dis_hi' => '',
			'dis_ht' => '',
			'dis_usu_id' => 0,
			'dis_estado' => 0
			);

	public function get($attr){
			return $this->_columns[$attr];
	}

	public function create($row){
		$prod =  new Disponibilidad_model();
		$prod->setColumns($row);
		return $prod;
    }

	public function setColumns ($row = null){
		foreach ($row as $key => $value) {
			$this->_columns[$key] = $value;
		}
    }

    function insert(){
		$this->db->insert('disponibilidad',$this->_columns);
		$this->_columns['dis_id'] = $this->db->insert_id();
	}

	 function update($id,$data) {
        $this->db->where('dis_id', $id);
        return $this->db->update('disponibilidad', $data);
    }

    function delete(){
    	$this->db->where('dis_id', $this->_columns["dis_id"]);
    	 $this->db->delete('disponibilidad');
    }

    function findById($id){
		$result = null;
		$this->db->where('dis_id',$id);
		$consulta = $this->db->get('disponibilidad');
		foreach ($consulta->result() as $row) {
			$result = $this->create($row);
		}
		return $result;
	}
	

    function findByIdUsu($id_usu){
		$result = null;
		try {
		$this->db->where('dis_usu_id',$id_usu);
		$this->db->select('dis_id id,dis_sala title, dis_hi start, dis_ht end');
		$this->db->from('disponibilidad');
		return $this->db->get()->result(); 
		} catch (Exception $e) {
			return $result;
		}
	}
	public function toArray()
	{
		return get_object_vars($this);
	}

	
}