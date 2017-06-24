<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificacion_model extends CI_Model {
	private $columns = array(
     'cal_id' =>0,
     'cal_usu_id' =>0,
     'cal_nota' =>0
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
	$res = $this->db->get('calificacion');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('calificacion',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }
function insert(){
		$this->db->insert('calificacion',$this->columns);

	}

    public function save(){
		try {
			$this->load->database();
		if($this->columns['cal_id'] == 0){
			$this->db->insert("calificacion",$this->columns);
			$this->columns['cal_id'] = $this->db->insert_id();
		}else{
			$this->db->where('cal_id',$this->columns['cal_id']);
			$this->db->update('calificacion',$this->columns);
		}
			
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}
	}

	public function findByName($column = null, $value = ''){
		$this->load->database();
		$res = $this->db->get_where('calificacion',array($column =>$value));
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
		$res = $this->db->get_where('calificacion',array('cal_id' =>$id));
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
		$this->db->where('cal_id',$id);
		return $this->db->delete('calificacion');
	}
	

}

/* End of file Calificacion_model.php */
/* Location: ./application/models/Calificacion_model.php */