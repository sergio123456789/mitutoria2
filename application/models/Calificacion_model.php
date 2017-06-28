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
		$prod =  new Calificacion_model();
		$prod->setColumns($row);
		return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('cal_id',$id);
		return $this->db->delete('calificacion');
	}
	
	function calificacionesDelProfe($usu_id,$asig_id){
		$result = array();
		$resultado = 0;
		$this->db->select('*');
		$this->db->from('calificacion');
		$this->db->join('horario', 'horario.hor_id = calificacion.cal_hor_id');
		$this->db->where('hor_asig_id', $asig_id);
		$this->db->where('hor_usu_id', $usu_id);
		$res = $this->db->get();
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
			$resultado = Calificacion_model::promedio($result);
		}

	return $resultado;
	}

	function promedio($array){
		$notas = 0;
		$cantidad = count($array);
		foreach ($array as $key => $value) {
			$notas = $notas + $value->get('cal_nota');
		}
		$resultado = $notas / $cantidad;
		return $resultado;
	}

	public function getDetalleNotaProf($id=null){
    $result = null;
    $this->load->database();
    $this->db->select('hor_fechasis,asig_nombre,cal_nota,cal_comentario');
    $this->db->from('calificacion');
    $this->db->join('usuario',  'calificacion.cal_usu_id = usuario.usu_id');
    $this->db->join('horario','calificacion.cal_hor_id = horario.hor_id');
    $this->db->join('asignatura','horario.hor_asig_id = asignatura.asig_id');
    $this->db->where('calificacion.cal_usu_id', $id);
    $consulta = $this->db->get();
    return $consulta->result_array();
}

}

/* End of file Calificacion_model.php */
/* Location: ./application/models/Calificacion_model.php */