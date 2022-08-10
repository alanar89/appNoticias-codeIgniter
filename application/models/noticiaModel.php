<?php
class NoticiaModel extends CI_Model {
function __construct(){
  parent::__construct ();
}
	function mostrar(){

        $this->db->select('*'); 
		$this->db->from("noticia");
		$this->db->where('activa','si');
		$res = $this->db->get();
       return $res->result_array();
		}

	function dame_noticia($id){
	
        $this->db->select('*'); 
		$this->db->from("noticia");
		$this->db->where('idnoticia',$id);
        $this->db->join('usuario','usuario.idusuario = noticia.idusuario');
		$rs = $this->db->get();
		return $rs->result_array();}

		function validar(){
	
        $this->db->select('*'); 
		$this->db->from("noticia");
        $this->db->where('estado','validar'); 
		$rs = $this->db->get();
		return $rs->result_array();}


		function editar(){
	
        $this->db->select('*'); 
		$this->db->from("noticia");
        $this->db->where('estado','borrador'); 
		$rs = $this->db->get();
		return $rs->result_array();}


function guardar($datos){
		$noticia= array('titulo' =>$datos['titulo'],'descripcion'=>$datos['descripcion'],'fecha'=>$datos['fecha'],'imagen'=>$datos['imagen'],'estado'=>'borrador','activa'=>'no','idusuario'=>$datos['id']  );
		$this->db->insert('noticia', $noticia);
	}
	function detalle($detalle){
		$idnoticia=$detalle['idnoticia'];
		$dato= array('detalle' => $detalle['detalle'],'estado'=>'borrador');
		$this->db->where('idnoticia',$idnoticia);
		$this->db->update('noticia',$dato);
	}
	function cambio($idnoticia){
		$dato=array('estado'=>'validar');
		$this->db->where('idnoticia',$idnoticia);
		$this->db->update('noticia',$dato);
	}
	function cambio2($idnoticia){
		$dato=array('estado'=>'publicada','activa'=>'si');
		$this->db->where('idnoticia',$idnoticia);
		$this->db->update('noticia',$dato);
	}

	function actualizar($datos){
		$id=$datos['idnoticia'];
	$noticia= array('titulo' =>$datos['titulo'],'descripcion'=>$datos['descripcion'],'idusuario'=>$datos['id']  );
	$this->db->where('idnoticia', $id);
	$this->db->update('noticia',$noticia);
	
}
    
}
?>