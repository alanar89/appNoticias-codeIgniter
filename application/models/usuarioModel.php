<?php
class usuarioModel extends CI_Model {
function __construct(){
  parent::__construct ();
}


function mostrar(){

        $this->db->select('*'); 
		$this->db->from("usuario");
		$res = $this->db->get();
       return $res->result_array();
}

function user($usuario){

        $this->db->select('*'); 
		$this->db->from("usuario");
		$this->db->where('usuario',$usuario); 
		$res = $this->db->get();
       return $res->result_array();
}

	function dame_pw($pw){
	
        $this->db->select('*'); 
		$this->db->from("usuario"); 
         $this->db->where('contrasena',$pw); 
		$rs = $this->db->get();
		return $rs->row();}

function insertar($datos){
		$usuario= array('usuario' =>$datos['usuario'] ,'contrasena' =>$datos['contrasena'], 
		'rol' =>$datos['rol'] );
		$this->db->insert('usuario', $usuario);
	}


	function dame_usuario($usuario){
	
        $this->db->select('*'); 
		$this->db->from("usuario");
        $this->db->where('usuario',$usuario); 
		$rs = $this->db->get();
		return $rs->row();}
}