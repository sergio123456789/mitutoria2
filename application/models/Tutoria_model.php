<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutoria_model extends CI_Model {
	private $columns = array(
     'tuto_id' =>0,
     'tuto_hor_id' =>0,
     'tuto_lis_id' =>0
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
	$res = $this->db->get('tutoria');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('tutoria',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }

	public function insert(){
		$this->db->insert('tutoria',$this->columns);

	}

    public function save(){
		try {
			$this->load->database();
		if($this->columns['tuto_id'] == 0){
			$this->db->insert("tutoria",$this->columns);
			$this->columns['tuto_id'] = $this->db->insert_id();
		}else{
			$this->db->where('tuto_id',$this->columns['tuto_id']);
			$this->db->update('tutoria',$this->columns);
		}
			
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}
	}

	public function findByName($column = null, $value = ''){
		$this->load->database();
		$res = $this->db->get_where('tutoria',array($column =>$value));
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
		$res = $this->db->get_where('tutoria',array('tuto_id' =>$id));
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			return $result;
	}

	public function create($row){
		$prod =  new Tutoria_model();
		$prod->setColumns($row);
		return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('tuto_id',$id);
		return $this->db->delete('tutoria');
	}
	public function misTutoiaDeasignatura($id_usu){
			$result = null;
			$this->load->database();
			$this->db->select('*');
			$this->db->from('asignatura a');
			$this->db->join('carrera c',  'a.asig_car_id = c.car_id');
			$this->db->join('area ar',  'ar.ar_carr_id = c.car_id');
			$this->db->join('usuario u ',  'u.usu_are_id = ar.ar_id');
			$this->db->where('u.usu_id', $id_usu);
			$res= $this->db->get();
				if ($res->num_rows() > 0) {
				foreach ($res->result() as $value) {
					$result[] = $this->create($value);
				}
			}
		return $result;
	}
	
}

/* End of file Tutoria_model.php */
/* Location: ./application/models/Tutoria_model.php */