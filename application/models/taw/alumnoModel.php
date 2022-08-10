<?php
class AlumnoModel extends CI_model{
	function __construct(){
  parent::__construct ();
}
 
 function datos(){	

        $this->db->select('*'); 
		$this->db->from("alumno");
		$res = $this->db->get();
       return $res->result_array();
 }
}
?>