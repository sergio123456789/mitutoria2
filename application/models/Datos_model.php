<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	
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