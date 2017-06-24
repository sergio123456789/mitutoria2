<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horario_model extends CI_Model {
	private $columns = array(
     'hor_id' =>0,
     'hor_dia' =>'',
     'hor_inicio' =>'',
     'hor_termino' =>'',
     'hor_fechasis' =>'',
     'hor_usu_id' =>0,
     'hor_sala' =>'',
     'hor_asig_id' =>0,
     'hor_estado' =>0
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
	$res = $this->db->get('horario');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('horario',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }
function insert(){
		$this->db->insert('horario',$this->columns);

	}

    public function save(){
		try {
			$this->load->database();
		if($this->columns['hor_id'] == 0){
			$this->db->insert("horario",$this->columns);
			$this->columns['hor_id'] = $this->db->insert_id();
		}else{
			$this->db->where('hor_id',$this->columns['hor_id']);
			$this->db->update('horario',$this->columns);
		}
			
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}
	}

	public function findByName($column = null, $value = ''){
		$this->load->database();
		$res = $this->db->get_where('horario',array($column =>$value));
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
		$res = $this->db->get_where('horario',array('hor_id' =>$id));
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
		$this->db->where('hor_id',$id);
		return $this->db->delete('horario');
	}
	

}

/* End of file Horario_model.php */
/* Location: ./application/models/Horario_model.php */