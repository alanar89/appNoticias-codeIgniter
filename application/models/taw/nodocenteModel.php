<?php
class NodocenteModel extends CI_model{
	function __construct(){
  parent::__construct ();
}
 
 function datos(){	

        $this->db->select('*'); 
		$this->db->from("no_docente");
		$res = $this->db->get();
       return $res->result_array();
 }
}
?>