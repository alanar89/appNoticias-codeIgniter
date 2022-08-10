<?php
class DocenteModel extends CI_model{
	function __construct(){
  parent::__construct ();
}
 
 function datos(){	

        $this->db->select('*'); 
		$this->db->from("docente");
		$res = $this->db->get();
       return $res->result_array();
 }
}
?>