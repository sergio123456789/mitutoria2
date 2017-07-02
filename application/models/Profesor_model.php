<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor_model extends CI_Model {

	private $columns = array(
     'prof_asig_id' =>0,
     'prof_usu_id' =>0,
     
     
	);

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get($key){
		return $this->columns[$key];
	}	

	public function findAll(){
	$this->load->database();
	$res = $this->db->get('profesor');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }
    public function create($row){
		$prod =  new Profesor_model();
		$prod->setColumns($row);
		return $prod;
    }
    public function setColumns ($row = null){
		foreach ($row as $key => $value) {
			$this->columns[$key] = $value;
			}
    }

    public function findByIdUsu($id_usu){
    	$result = array();
    	$this->load->database();
    	$this->db->where('prof_usu_id',$id_usu);
		$res = $this->db->get('profesor');
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
	    }

}

/* End of file Profesor_model.php */
/* Location: ./application/models/Profesor_model.php */