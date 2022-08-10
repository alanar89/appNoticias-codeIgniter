<?php

 class Usuarios extends CI_controller{

 	function index(){

 	}

 	function registro(){

$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('usuario', 'usuario', 'required|min_length[4]|max_length[20]|callback_validar');
$this->form_validation->set_rules('contrasena', 'contraseña', 'required|min_length[6]|max_length[16]');
$this->form_validation->set_rules('rol', 'rol', 'required');

if ($this->form_validation->run() == FALSE)
{
$this->load->view('vistaRegistro');
}
else
{
		$this->load->model("usuarioModel");
		$datos['usuario']=$this->input->post('usuario');
		$datos['contrasena']=$this->input->post('contrasena');
		$datos['rol']=$this->input->post('rol');
		
		$this->usuarioModel->insertar($datos);
	
		$this->load->view('formok');

}
}
			 function validar(){
			$str=$this->input->post('usuario');
			$this->load->model("usuarioModel");
			$res=$this->usuarioModel->dame_usuario($str);
			
		if ($res==TRUE)
		{
			$this->form_validation->set_message('validar', 'el usuario ya existe');
			return FALSE;
		}
		else
			{
			return TRUE;}
				}


 	

 	function login(){
 		$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('usuario','usuario','required|callback_validar_us');
$this->form_validation->set_rules('contrasena','contraseña','required|callback_validar_pw');

	if ($this->form_validation->run() == FALSE)
	{
		$this->load->view('vistaLogin');
		}
		else
		{ 
		$this->load->model("usuarioModel");
		$this->load->model('noticiaModel');
		$registros = $this->noticiaModel->mostrar();
		$d= array('registros' => $registros);
		
		$r=$this->usuarioModel->user($this->input->post('usuario'));
		$datos['usuario']=$this->input->post('usuario');
		$datos['contrasena']=$this->input->post('contrasena');
		foreach ($r as $value) {
		$datos['rol']=$value['rol'];
		$datos['id']=$value['idusuario'];
		$datos['usuario']=$value['usuario'];}
		$this->session->set_userdata($datos);
		$this->load->view('vistaIndex',$d);

	}
}
			
		 function validar_us(){
		 	$r=FALSE;
			$us=$this->input->post('usuario');
			$this->load->model("usuarioModel");
			$res=$this->usuarioModel->dame_usuario($us);
			if ($res==FALSE)
		{
			$this->form_validation->set_message('validar_us', 'usuario incorrecto');
			return FALSE;
		}
		else
			{
			return TRUE;}
				}

		 function validar_pw(){
		 	$s=FALSE;
			$pw=$this->input->post('contrasena');
			$this->load->model("usuarioModel");
			$res=$this->usuarioModel->dame_pw($pw);
			if ($res==FALSE)
		{
			$this->form_validation->set_message('validar_pw', 'contraseña incorrecta');
			return FALSE;
		}
		else
			{
			return TRUE;}
				}
	
				

				function salir(){
					$this->session->sess_destroy();
					redirect('noticias');

				}
 	
 }
?>