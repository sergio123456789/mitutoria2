<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_model extends CI_Model {
	private $columns = array(
     'lis_id' =>0,
     'lis_fecha' =>'',
     'lis_usu_id' =>0,
     'lis_usu_asistido' =>0,
     'lis_estado' =>0,
     'lis_comentario' =>''
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
	$res = $this->db->get('lista');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('lista',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }
function insert(){
		$this->db->insert('lista',$this->columns);

	}

    public function save(){
		try {
			$this->load->database();
		if($this->columns['lis_id'] == 0){
			$this->db->insert("lista",$this->columns);
			$this->columns['lis_id'] = $this->db->insert_id();
		}else{
			$this->db->where('lis_id',$this->columns['lis_id']);
			$this->db->update('lista',$this->columns);
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
		$res = $this->db->get_where('lista',array('lis_id' =>$id));
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			return $result;
	}

	public function create($row){
		$prod =  new Lista_model();
		$prod->setColumns($row);
		return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('lis_id',$id);
		return $this->db->delete('lista');
	}
	public function findhorarioByIdLista($lis_id)
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('horario');
		$this->db->join('tutoria',  'tutoria.tuto_hor_id = horario.hor_id');
		$this->db->join('lista',  'tutoria.tuto_lis_id = lista.lis_id');
		$this->db->where('lista.lis_id', $lis_id);
		$res= $this->db->get();
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			return $result;
	}
	
	

}

/* End of file Lista_model.php */
/* Location: ./application/models/Lista_model.php */