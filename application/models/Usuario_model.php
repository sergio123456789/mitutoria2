<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	private  $_columns  =  array(
			'usu_id' => 0,
			'usu_nombre' => '',
			'usu_correo' => '',
			'usu_pass' => '',
			'usu_estado' => 0,
			'usu_are_id' => 0,
			'usu_rut' => 0,
			'usu_dv' => 0
			);

	private  $_columnspermiso  =  array(
			'per_usu_id' => 0,
			'perf_id' => 0
			);

	public function createper($row){
		$per =  new Usuario_model();
		foreach ($row as $key => $value) {
			$per->_columnspermiso[$key] = $value;
		}
		return $per;
    }

	public function create($row){
		$usu =  new Usuario_model();
		foreach ($row as $key => $value) {
			$usu->_columns[$key] = $value;
		}
		return $usu;
    }

	function get($attr){
			return $this->_columns[$attr];
	}
	public function getNombre(){
		return $this->_columns['usu_nombre'];
	}
	function per($attr){
		return $this->_columnspermiso[$attr];
	}	
	public function setPermisos($array)
	{
		$this->_columnspermiso = $array;
	}
	public function set($key,$value)
	{
		$this->_columns[$key] = $value;
	}
	function insert(){
		$this->db->insert('usuario',$this->_columns);
		$this->_columns['usu_id'] = $this->db->insert_id();
	}


function insertperusu(){
		$this->db->insert('permisos',$this->_columnspermiso);
	}

    public function save(){
		try {
			$this->load->database();
		if($this->_columns['usu_id'] == 0){
			$this->db->insert("usuario",$this->_columns);
			$this->_columns['usu_id'] = $this->db->insert_id();
		//	$id = $this->db->insert_id();
		}else{
			$this->db->where('usu_id',$this->_columns['usu_id']);
			$this->db->update('usuario',$this->_columns);
		}
		//	return $id ;
		} catch (Exception $e) {
			echo"se produjo una excepcion del tipo".$e->getMessage() ;
		}
	}

    function delete($id)
	{
		$this->db->where('usu_id',$id);
		return $this->db->delete('usuario');
	}

	function findAll(){
		$datos=array();
		$bit = null;
		$consulta = $this->db->get('usuario');
		foreach ($consulta->result() as $row) {
			$result[] = $this->create($row);
		}
		return $result;
	}
	public function saveusu()
	{
		$this->load->database();
		
		$query=$this->db->get_where('usuario',array('usu_rut'=>$this->_columns['usu_rut']));
		$aux='';	
		
			if($query->num_rows() > 0){
				$row = $query->row_object();
				$usuario=$this->create($row);
				$aux=$usuario->get('usu_rut');

			}

			if ($this->_columns['usu_rut']!=$aux) {
			$this->db->insert("usuario",$this->_columns);
			$this->_columns['usu_id'] = $this->db->insert_id();
			
			return 1;
		}else{
			$this->db->where('usu_id',$this->_columns['usu_id']);
			$this->db->update('usuario',$this->_columns);

		}
	}
	function findByIdpermisos($id){
		$result=array();
		$bit = null;
		$this->db->where('per_usu_id',$id);
		$consulta = $this->db->get('permisos');
		foreach ($consulta->result() as $row) {
			$result[] = $this->createper($row);
		}
		return $result;
	}
	public function exist()
	{
		$user  = $this->db->get_where('usuario',array('usu_rut'=>$this->_columns['usu_rut']));
		
		return  $user->num_rows() == 1;
	}

	function findById($id){
		$result=array();
		$this->db->where('usu_id',$id);
		$consulta = $this->db->get('usuario');
		foreach ($consulta->result() as $row) {
			$result[] = $this->create($row);
		}
		return $result;
	}
	public function cambiarcontra($id,$usu_pass){
        $data  =  array(
			'usu_pass' => $usu_pass
			);
        $this->db->where('usu_id', $id);
        return $this->db->update('usuario', $data);
    
}

	public function getPermisos()
	{
		$result = $this->db->get_where("permisos",array('per_usu_id'=>$this->_columns['usu_id']));
		$permisos = array();
		if($result->num_rows() > 0){
			foreach ($result->result()  as $key => $value) {
				$permisos[] = $value->perf_id;
			}
		}
		return $permisos;
	}

	public function getArea()
	{
		$result = $this->db->query("select ar_id from area inner join usuario on usuario.usu_are_id = area.ar_id where 
			usuario.usu_id = ".$this->_columns['usu_id']);
		$area = 0;
		if($result->num_rows() > 0){
			foreach ($result->result()  as $key => $value) {
				$area = $value->ar_id;
			}
		}
		return $area;
	}

	public function getUserByPerfil($perfil = null,$area = null){
		$result = null;
		$this->load->database();
		$this->db->select('usu_id,usu_nombre,usu_correo,usu_pass,usu_are_id');
		$this->db->from('usuario');
		$this->db->join('permisos',  'usuario.usu_id = permisos.per_usu_id');
		$this->db->where_in('permisos.perf_id', $perfil);
		$this->db->where('usuario.usu_are_id', $area);
		
		$consulta = $this->db->get();
		foreach ($consulta->result() as $row) {
			$result[] = $this->create($row);
		}
		return $result;
	}



	function login($rut, $clave){
		$datos=array();
		$user = null;
		
		$result = $this->db->get_where('usuario',array('usu_rut'=>$rut));		
		if ($result->num_rows() > 0) {
			$row = $result->row_object();
			if($row->usu_pass == $clave){
				$user = $this->create($row);
			}
		}
		return $user;
	}
}
/*
	public function saveusu()
	{
		$this->load->database();
		$result = false;
		$this->db->where('usu_rut',$this->_columns['usu_rut'] );
		$consulta = $this->db->get('usuario');
			
			foreach ($consulta->result() as $row) {
			$usu= $this->create($row);
		}

			if($usu->get('usu_rut') == 0 || $usu->get('usu_rut') == null ){
			$this->db->insert("usuario",$this->_columns);
			$this->_columns['usu_id'] = $this->db->insert_id();
			
		}else{
			$this->db->where('usu_id',$this->_columns['usu_id']);
			$this->db->update('usuario',$this->_columns);
			
		
			
		}
		return $result;
	}*/