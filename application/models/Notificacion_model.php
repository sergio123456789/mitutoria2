<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notificacion_model extends CI_Model {
	private $columns = array(
     'noti_id' =>0,
     'noti_usu_id' =>0,
     'noti_usu_id_des' =>0,
     'noti_desc' =>"",
     'noti_fecha' =>'',
     'noti_estado' =>0
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
	$res = $this->db->get('notificacion');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('notificacion',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }
function insert(){
		$this->db->insert('notificacion',$this->columns);

	}

    public function save(){
		try {
			$this->load->database();
		if($this->columns['noti_id'] == 0){
			$this->db->insert("notificacion",$this->columns);
			$this->columns['noti_id'] = $this->db->insert_id();
		}else{
			$this->db->where('noti_id',$this->columns['noti_id']);
			$this->db->update('notificacion',$this->columns);
		}
			
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}
	}

	public function findByName($column = null, $value = ''){
		$this->load->database();
		$res = $this->db->get_where('notificacion',array($column =>$value));
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
		$res = $this->db->get_where('notificacion',array('noti_id' =>$id));
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
		$this->db->where('noti_id',$id);
		return $this->db->delete('notificacion');
	}
	

}

/* End of file Notificacion_model.php */
/* Location: ./application/models/Notificacion_model.php */