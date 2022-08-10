<?php
class PersonaPersistente extends CI_controller{
	

	 function index(){

	 	$this->load->model('personaModel');
		$registros = $this->personaModel->mostrar();
		$datos = array('registros' => $registros);
		$this->load->view('vistaPersonas',$datos);
	}

	function alta(){
		
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[3]');
$this->form_validation->set_rules('apellido', 'apellido', 'required|min_length[2]|max_length[20]');
$this->form_validation->set_rules('dni', 'dni', 'required|min_length[8]|max_length[8]');
$this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
$this->form_validation->set_rules('fecha', 'fecha nacimiento', 'required');
$this->form_validation->set_rules('estatura', 'estatura', 'required|min_length[2]|max_length[3]');

if ($this->form_validation->run() == FALSE)
{
$this->load->view('vistaAlta');
}
else
{
		$this->load->model("personaModel");
		$datos['nombre']=$this->input->post('nombre');
		$datos['apellido']=$this->input->post('apellido');
		$datos['dni']=$this->input->post('dni');
		$datos['mail']=$this->input->post('mail');
		$datos['fechaNacimiento']=$this->input->post('fecha');
		$datos['estatura']=$this->input->post('estatura');
		$this->personaModel->guardar($datos);
		$r=array('r'=>1);
		$this->load->view('formsuccess',$r);

}
	}
	function baja(){
		$this->load->model('personaModel');
		$id=$this->uri->segment(3);
		$this->personaModel->eliminar($id);

	}
	
	function modificar(){

	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[3]');
	$this->form_validation->set_rules('apellido', 'apellido', 'required|min_length[2]|max_length[20]');
	$this->form_validation->set_rules('dni', 'dni', 'required|min_length[8]|max_length[8]');
	$this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('fecha', 'fecha nacimiento', 'required');
	$this->form_validation->set_rules('estatura', 'estatura', 'required|min_length[2]|max_length[3]');

if ($this->form_validation->run() == FALSE )
{		
	if (is_null($this->input->post('re'))) {
		
		$id=$this->uri->segment(3);
		$this->load->model('personaModel');
		$reg=$this->personaModel->dame_registro($id);
		foreach ($reg as $value) {

			$nombre=$value['nombre'];
			$apellido=$value['apellido'];
			$dni=$value['dni'];
			$mail=$value['mail'];
			$fecha=$value['fechaNacimiento'];
			$estatura=$value['estatura'];}

		
		$datos=array('nombre'=>$nombre,'apellido'=>$apellido,'dni'=>$dni,'mail'=>$mail,'fecha'=>$fecha,'estatura'=>$estatura,'id'=>$id, 'r'=>1,'re'=>1);
		$this->load->view('vistaModificar',$datos);}else{$datos=array('r'=>0,'re'=>0);$this->load->view('vistaModificar',$datos);}
}
else{
		$this->load->model('personaModel');
		$datos['nombre']=$this->input->post('nombre');
		$datos['apellido']=$this->input->post('apellido');
		$datos['dni']=$this->input->post('dni');
		$datos['mail']=$this->input->post('mail');
		$datos['fechaNacimiento']=$this->input->post('fecha');
		$datos['estatura']=$this->input->post('estatura');
		$id=$this->input->post('id');
		$this->personaModel->actualizar($id,$datos);
		$r=array('r'=>1);
		$this->load->view('formsuccess',$r);
		}
		
}


 	

 }


?>