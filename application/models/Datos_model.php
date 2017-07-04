<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	
	}

	private $columns= array('car_id' => 0 ,
				'car_nombre'=>'');

	function insert(){
		$this->db->insert('carreras',$this->columns);

	}
	public function create($row){
		$carrera =  new Datos_model();
		$carrera->setColumns($row);
		return $carrera;
    }
	public function get($key){
		return $this->columns[$key];
	}
	public function setColumns ($row = null){
		foreach ($row as $key => $value) {
			$this->columns[$key] = $value;
	}
}

	public function save(){
		try {
		$this->load->database();
		$query=$this->db->get_where('carrera',array('car_nombre'=>$this->columns['car_nombre']));
		$aux='';	
		$auxDos='';
			if($query->num_rows() > 0){
				$row = $query->row_object();
				$carrera=$this->create($row);
				$aux=$carrera->get('car_nombre');
				$auxDos=$carrera->get('car_id');
			
			}
			if ($this->columns['car_nombre']!=$aux) {
			$this->db->insert("carrera",$this->columns);
			$this->columns['carrera'] = $this->db->insert_id();
			return $this->db->insert_id();
			}else{
			$this->columns['car_id']=$auxDos;
			$this->db->where('car_id',$this->columns['car_id']);
			$this->db->update('carrera',$this->columns);
			return $auxDos;
		}
			
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}

	}

	public function findAll(){
	$this->load->database();
	$res = $this->db->get('carrera');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$result[] = $this->create($value);
		}
	}
	return $result;
    }


	public function Miareaacademica($dato)
	{
		$IDAR=0;
			if ($dato=="Agropecuaria y Agroindustrial") {
					$IDAR=1 ;
					}else if ($dato=="Construcción") {
					$IDAR=2;
					}else if ($dato=="Electricidad y Electrónica") {
					$IDAR=3;
					}else if ($dato=="Informática y Telecomunicaciones") {
					$IDAR=4;
					}else if ($dato=="Mecánica") {
					$IDAR=5;
					}else if ($dato=="Minería y Metalurgia") {
					$IDAR=6;
					}else if ($dato=="Procesos Industriales") {
					$IDAR=7;
					}
					return $IDAR;
	}

}


/* End of file Datos_model.php */
/* Location: ./application/models/Datos_model.php */


