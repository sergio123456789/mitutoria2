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
		private $_columnsAsigna= array(
			'prof_asig_id' => 0,
			'prof_usu_id' =>0
		);

	public function findAllBy($column = null, $value =""){
		$this->load->database();
		$res = $this->db->get_where('usuario',array($_column =>$value));
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }	
    public function ValidasionfindAllBy($rut,$dv,$correo){
    
    	$result = null ;
		$this->load->database();
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('usu_rut', $rut);
		$this->db->where('usu_dv', $dv);
		$this->db->where('usu_correo', $correo);
		$res=$this->db->get('');
		if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
			}
			
			return $result;
    }
	public function createper($row){
		$per =  new Usuario_model();
		foreach ($row as $key => $value) {
			$per->_columnspermiso[$key] = $value;
		}
		return $per;
    }

     public function createAsig($row){
    	$asig= new Usuario_model();
    	foreach ($row as $key => $value) {
    		$asig->_columnsAsigna[$key] = $value;
    	}
    	return $asig;
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
		function getAsig($attr){
			return $this->_columnsAsigna[$attr];
	}
	public function setAsigna($key,$value)
	{
		$this->_columnsAsigna[$key] = $value;
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

	function deleteAsig($id)
	{
		$this->db->where('prof_usu_id',$id);
		return $this->db->delete('profesor');
	}
	function deletePermiso($id)
	{
		$this->db->where('per_usu_id',$id);
		return $this->db->delete('permisos');
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
		$auxDos='';
			if($query->num_rows() > 0){
				$row = $query->row_object();
				$usuario=$this->create($row);
				$aux=$usuario->get('usu_rut');
				$auxDos=$usuario->get('usu_id');

			}
			if ($this->_columns['usu_rut']!=$aux) {
			$this->db->insert("usuario",$this->_columns);
			$this->_columns['usu_id'] = $this->db->insert_id();
			
			return 'perfil';
		}else{

			$this->_columns['usu_id']=$auxDos;
			$this->db->where('usu_id',$this->_columns['usu_id']);
			$this->db->update('usuario',$this->_columns);
			return $auxDos;

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

    public function findById($id = null){
		$id = intval($id);
		$this->load->database();
		$res = $this->db->get_where('usuario',array('usu_id' =>$id));
		$result = null;
			if ($res->num_rows() == 1) {
				$result = $this->create($res->row_object());
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

	public function getUserByPerfil($perfil=null){
		$result = null;
		$this->load->database();
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->join('permisos',  'usuario.usu_id = permisos.per_usu_id');

		$this->db->where_in('permisos.perf_id', $perfil);
		
		$consulta = $this->db->get();
		foreach ($consulta->result() as $row) {
			$result[] = $this->create($row);
		}
		return $result;
	}


	public function getAlumAyudantes(){
		$perfil = 6;
		$result = null;
		$this->load->database();
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->join('permisos',  'usuario.usu_id = permisos.per_usu_id');
		$this->db->join('ayudante',  'ayudante.ayu_usu_id = usuario.usu_id');
		$this->db->join('asignatura',  'asignatura.asig_id = ayudante.ayu_asig_id');
		$this->db->join('area',  'area.ar_id = usuario.usu_are_id');
		$this->db->where_in('permisos.perf_id', $perfil);
		
		$consulta = $this->db->get();
		foreach ($consulta->result() as $row) {
			$result[] = $this->create($row);
		}
		return $result;
	}



	


	 public function findByRut($rut){
    $query = $this ->db-> get_where('usuario',array('usu_rut'=>$rut));
   if($query -> num_rows() >= 1)
         {
            $row = $query->row_object();
            $user = $this->create($row);
            return $user; 
         }
    return false;
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
	public function getDisponibilidad()
	{
		$disponibilidades = null;
		try {
			$result = $this->db->order_by('dis_dia', 'ASC')->get_where('disponibilidad',array('dis_usu_id'=>$this->_columns['usu_id']));
			$CI =& get_instance();
			$CI->load->model('Disponibilidad_model');
			foreach ($result->result() as $key => $value) {
				$dis = $CI->Disponibilidad_model->create(get_object_vars($value));
				$disponibilidades[] =  $dis;
			}
		} catch (Exception $e) {
		
		}
		return $disponibilidades;
	}
	function downloadAlum($user){

		$this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = "|";
        $newline = "\r\n";
        $filename = $user.".csv";
        $query = "SELECT CONCAT(usu_rut,'-',usu_dv) AS RUT, usu_nombre AS NOMBRE, usu_correo AS CORREO, b.alu_programa_estudio AS CARRERA, b.alu_semestre AS SEMESTRE,b.alu_jornada AS JORNADA, DATE_FORMAT(b.alu_fechamatricula, '%d/%m/%Y') AS MATRICULA, b.alu_edad AS EDAD, b.alu_celular AS CELULAR FROM usuario a INNER JOIN alumno b ON a.usu_id = b.alu_usu_id ";
        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, "\xEF\xBB\xBF".$data);
	}

	function downloadTutorias($user){

		$this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = "|";
        $newline = "\r\n";
        $filename = $user.".csv";
        $query = "SELECT a.hor_dia AS DIA, a.hor_inicio AS INICIO, a.hor_termino AS TERMINO, a.hor_sala AS SALA, b.usu_nombre AS NOMBRE, CONCAT(b.usu_rut,'-',b.usu_dv) AS RUT, b.usu_correo AS CORREO FROM horario a INNER JOIN usuario b INNER JOIN asignatura c ON a.hor_usu_id=b.usu_id AND a.hor_asig_id=c.asig_id";
        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, "\xEF\xBB\xBF".$data);
	}

	public function getAsigProfByRut($id=null){
    $result = null;
    $this->load->database();
    $this->db->select('asig_id,asig_nombre, asig_cod');
    $this->db->from('profesor');
    $this->db->join('usuario',  'profesor.prof_usu_id = usuario.usu_id');
    $this->db->join('asignatura','profesor.prof_asig_id = asignatura.asig_id');
    $this->db->where('profesor.prof_usu_id', $id);
    $consulta = $this->db->get();
    return $consulta->result_array();
}
public function findByProfesor($id=null){
		$this->load->database();
		$this->db->join('area','area.ar_id=usuario.usu_are_id');
		$this->db->where('usuario.usu_id',$id);
		$res=$this->db->get('usuario');
		$result=null;
		if($res->num_rows()==1){
			foreach ($res->result() as $row) {
			$result=$this->create($row);
		}
		}
		return $result;
	}

	public function getAsigProfById($id=null){
    $result = null;
    $this->load->database();
    $this->db->select('*');
    $this->db->from('profesor');
    $this->db->where('prof_usu_id', $id);
    $consulta = $this->db->get();
    if ($consulta->num_rows()>0) {
    	foreach ($consulta->result() as $row) {
			$result[] = $this->createAsig($row);
		}
		return $result;
    }
    return false;
}

  public function getByRutAndPerf($perfil=null,$rut=null){
		$result = null;
		$this->load->database();
		$this->db->select('usu_id,usu_nombre,usu_correo,usu_pass,usu_are_id');
		$this->db->from('usuario');
		$this->db->join('permisos',  'usuario.usu_id = permisos.per_usu_id');
		$this->db->where('permisos.perf_id', $perfil);
		$this->db->where('usuario.usu_rut', $rut);		
		$consulta = $this->db->get();

		if($consulta -> num_rows() >= 1)
         {
         	$row = $consulta->row_object();
            $result = $this->create($row);
            return $result; 
		}
		return false;
	}



	public function getCountPerfiles($numero = null){
		$query = $this->db->query("SELECT * FROM permisos WHERE perf_id=".$numero);
        $numero = $query->num_rows();
        return $numero;
	}

	public function saveProfAsig(){

		$this->load->database();
		$this->db->insert("profesor",$this->_columnsAsigna);

	}

	function donwloadTutores($user){

		$this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = "|";
        $newline = "\r\n";
        $filename = $user.".csv";
        $query = "SELECT a.usu_nombre AS NOMBRE_TUTOR, CONCAT(a.usu_rut,'-',a.usu_dv) AS RUT , b.asig_nombre AS ASIGNATURA FROM usuario a INNER JOIN asignatura b INNER JOIN profesor c ON a.usu_id=c.prof_usu_id WHERE b.asig_id=c.prof_asig_id ORDER BY a.usu_rut ASC";
        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, "\xEF\xBB\xBF".$data);
	}


	 public function getAreaUser(){
		$result = null;
		$this->load->database();
		$this->db->select('ar_id, ar_nombre');
		$this->db->from('area');
		$consulta = $this->db->get();

		  if ($consulta->num_rows()>0) {
    	foreach ($consulta->result() as $row) {
			$result[] = $this->create($row);
		}
		return $result;
    }
    return false;
	}


	public function CountAreaUser($id =null){
		$result = null;
		$this->load->database();
		$query ="SELECT COUNT(*) as total, ar_nombre FROM usuario 
			INNER JOIN area ON usu_are_id = area.ar_id
			WHERE ar_id=".$id;
		$consulta = $this->db->query($query);
	 	if($consulta -> num_rows() >= 1)
         {
         	$row = $consulta->row_object();
            $result = $this->create($row);
            return $result; 
		}
		return false;
	}	
		
	public function cambiarDispo($estado){
		$this->db->query('update usuario set usu_dispo_estado ='.$estado);
	}

	public function cambiarDispoUsu($estado,$usu_id){
		$this->db->query('update usuario set usu_dispo_estado ='.$estado.' where usu_id='.$usu_id);
	}

		public function savePermiso($usuid,$perfid){
					$this->load->database();		
					$permisos = array(
					'per_usu_id' => $usuid,
					'perf_id'=> $perfid
					);
			$this->db->insert('permisos', $permisos);	
	}

		public function saveAyudante($asigid,$usuid){
					$this->load->database();		
					$ayudante = array(
					'ayu_asig_id' => $asigid,
					'ayu_usu_id'=> $usuid,
					'ayu_estado'=>1
					);
			$this->db->insert('ayudante', $ayudante);	
	}


		public function findAyudante($usuid){
		$result = null;
		$this->load->database();
		$query ="SELECT *  FROM ayudante 
			INNER JOIN usuario ON usuario.usu_id = ayudante.ayu_usu_id
			WHERE usuario.usu_id=".$usuid;
		$consulta = $this->db->query($query);
	 	if($consulta -> num_rows() >= 1)
         {
         	$row = $consulta->row_object();
            $result = $this->create($row);
            return $result; 
		}
		return false;
	}

	function deleteAyudante($id)
	{
		$this->db->where('ayu_usu_id',$id);
		return $this->db->delete('ayudante');
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