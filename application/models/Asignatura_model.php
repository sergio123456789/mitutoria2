<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignatura_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	private $columns = array(
     'asig_id' =>0,
     'asig_cod' =>'',
     'asig_nombre' =>'',
     'asig_car_id' =>0,
     'asig_situacion'=>'',
     'asig_estado' =>0
	);

	public function findAll(){
	$this->load->database();
	$res = $this->db->get('asignatura');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }

    public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('asignatura',array($column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    } 
	function insert(){
		$this->db->insert('asignatura',$this->columns);

	}
	public function get($key){
		return $this->columns[$key];
	}
  
	public function findByName($column = null, $value = ''){
		$this->load->database();
		$res = $this->db->get_where('asignatura',array($column =>$value));
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
		$res = $this->db->get_where('asignatura',array('asig_id' =>$id));
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			return $result;
	}

	public function create($row){
		$prod =  new Asignatura_model();
		$prod->setColumns($row);
		return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('asig_id',$id);
		return $this->db->delete('asignatura');
	}

	public function misProxAsig($id_asi,$tipo = 1){
		$res = null;
		$this->load->database();
		$this->db->select('*');
		$this->db->from('horario');
		$this->db->join('usuario',  'horario.hor_usu_id = usuario.usu_id');
		$this->db->join('asignatura',  'horario.hor_asig_id = asignatura.asig_id');
		$this->db->where('asignatura.asig_id', $id_asi);
		$this->db->where('hor_estado', 0);
		$this->db->where('hor_tipo', $tipo);
		$res= $this->db->get();
		return $res->result_array();
	}

	public function miasignaturas($id_usu){
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
		public function miasignaturasproarea($id_usu,$id_area){
		$result = null;
		$this->load->database();
		$this->db->select('*');
		$this->db->from('asignatura a');
		$this->db->join('carrera c',  'a.asig_car_id = c.car_id');
		$this->db->join('area ar',  'ar.ar_carr_id = c.car_id');
		$this->db->join('usuario u ',  'u.usu_are_id = ar.ar_id');
		$this->db->where('u.usu_id', $id_usu);
		$this->db->where('ar.ar_id', $id_area);
		$this->db->where('a.asig_estado', "2" );
		$res= $this->db->get();
			if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
	return $result;
	}

	public function asignaturaProfe($usu_id){
		$result = array();
		$this->db->select('*');
		$this->db->from('asignatura');
		$this->db->join('profesor', 'profesor.prof_asig_id = asignatura.asig_id');
		$this->db->join('usuario', 'usuario.usu_id = prof_usu_id');
		$this->db->where('usu_id', $usu_id);
		$res= $this->db->get();
			if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
	return $result;

	}

	public function save()
	{
		$this->load->database();
		$query=$this->db->get_where('asignatura',array('asig_nombre'=>$this->columns['asig_nombre']));
		$aux='';	
		$auxDos='';
			if($query->num_rows() > 0){
				$row = $query->row_object();
				$usuario=$this->create($row);
				$aux=$usuario->get('asig_nombre');
				$auxDos=$usuario->get('asig_id');

			}
			if ($this->columns['asig_nombre']!=$aux) {
			$this->db->insert("asignatura",$this->columns);
			$this->columns['asig_id'] = $this->db->insert_id();
			
			return 'perfil';
		}else{

			$this->columns['asig_id']=$auxDos;
			$this->db->where('asig_id',$this->columns['asig_id']);
			$this->db->update('asignatura',$this->columns);
			return $auxDos;

		}
	}

}


/* End of file Asignatura_model.php */
/* Location: ./application/models/Asignatura_model.php */