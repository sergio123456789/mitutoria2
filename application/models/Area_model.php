<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area_model extends CI_Model {
	private $columns = array(
     'ar_id' =>0,
     'ar_nombre' =>"",
     'ar_carr_id' =>0
     
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
	$res = $this->db->get('area');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }
    public function create($row){
		$prod =  new Area_model();
		$prod->setColumns($row);
		return $prod;
    }
    public function setColumns ($row = null){
		foreach ($row as $key => $value) {
			$this->columns[$key] = $value;
			}
    }
	

}

/* End of file Area_model.php */
/* Location: ./application/models/Area_model.php */