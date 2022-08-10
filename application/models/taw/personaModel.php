<?php
class PersonaModel extends CI_Model {
function __construct(){
  parent::__construct ();
}

function mostrar(){

        $this->db->select('*'); 
		$this->db->from("persona");
		$res = $this->db->get();
       return $res->result_array();
}

function guardar($datos){
		$persona= array('nombre' =>$datos['nombre'] ,'apellido' =>$datos['apellido'], 
		'dni' =>$datos['dni'] ,'mail' =>$datos['mail'] ,'fechaNacimiento' =>$datos['fechaNacimiento'],  
		'estatura' =>$datos['estatura'] );
		$this->db->insert('persona', $persona);
	}


function eliminar($id){
	$this->db->where('idpersona', $id);
	$this->db->delete('persona');
	redirect('personapersistente');
}

function dame_registro($id){
	
        $this->db->select('*'); 
		$this->db->from("persona");
        $this->db->where('idpersona',$id); 
		$res = $this->db->get();
		 return $res->result_array();}



function actualizar($id,$datos){
	$persona= array('nombre' =>$datos['nombre'] ,'apellido' =>$datos['apellido'],'dni' =>$datos['dni'] ,'mail' =>$datos['mail'] ,'fechaNacimiento' =>$datos['fechaNacimiento'],'estatura' =>$datos['estatura'] );
	$this->db->where('idpersona', $id);
	$this->db->update('persona',$persona);
	
}

}

class EmpleadoModel extends personaModel{
	function __construct(){
  parent::__construct ();
}
 
 function mostrar(){	

        $this->db->select('*'); 
		$this->db->from("empleado");
		$this->db->join('persona', 'persona.idpersona = empleado.idpersona');
		$res = $this->db->get();
       return $res->result_array();
 }
 	function cantidad(){
		
		$this->db->select(' count(*) as total'); 
		$this->db->from("empleado");
		$res = $this->db->get();
		return $res->result_array();

		 }

		 function insertar($datos){
		$empleado= array('cargo' =>$datos['cargo'] ,'antiguedad' =>$datos['antiguedad'], 'salario'=>$datos['salario'],
		'idpersona' =>$datos['idpersona']  );
		$this->db->insert('empleado', $empleado);
	}
 	
}