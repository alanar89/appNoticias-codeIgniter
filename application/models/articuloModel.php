<?php
class ArticuloModel extends CI_Model {
function __construct(){
  parent::__construct ();
}
	function mostrar(){

        $this->db->select('*'); 
		$this->db->from("articulo");
		$res = $this->db->get();
       return $res->result_array();
		}

	function dame_articulo($id){
	
        $this->db->select('*'); 
		$this->db->from("articulo");
        $this->db->where('idarticulo',$id); 
		$rs = $this->db->get();
		return $rs->result_array();}


    
}
?>
