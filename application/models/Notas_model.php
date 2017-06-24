<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notas_model extends CI_Model {

	private $columns = array(
     'not_id' =>0,
     'not_nota' =>0,
     'not_asig_id' =>0
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
	$res = $this->db->get('notas');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('notas',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }
function insert(){
		$this->db->insert('notas',$this->columns);

	}

    public function save(){
		try {
			$this->load->database();
		if($this->columns['not_id'] == 0){
			$this->db->insert("notas",$this->columns);
			$this->columns['not_id'] = $this->db->insert_id();
		}else{
			$this->db->where('not_id',$this->columns['not_id']);
			$this->db->update('notas',$this->columns);
		}
			
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}
	}
	
	public function setColumns ($row = null){
		foreach ($row as $key => $value) {
			$this->columns[$key] = $value;
			}
    }

    public function findById($id = null){
		$id = intval($id);
		$this->load->database();
		$res = $this->db->get_where('notas',array('not_id' =>$id));
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			return $result;
	}

	public function create($row){
		$prod =  new Contacto_model();
		$prod->setColumns($row);
		return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('not_id',$id);
		return $this->db->delete('notas');
	}

}

/* End of file Notas_model.php */
/* Location: ./application/models/Notas_model.php */