<?php 
class Universidad extends CI_controller{

 function index(){

		$this->load->view('vistaUniversidad');
	}


	function listar(){
	$dato=$this->input->post('elegir');
	if($dato=="a"){
		$this->load->model('alumnoModel');
		$registros = $this->alumnoModel->datos();
		$datos = array('registros' => $registros);
		$this->load->view('vistaAlumnos',$datos);}
			elseif ($dato=="d") {
				$this->load->model('docenteModel');
				$registros = $this->docenteModel->datos();
				$datos = array('registros' => $registros);
				$this->load->view('vistaDocentes',$datos);
			}else{
					$this->load->model('nodocenteModel');
					$registros = $this->nodocenteModel->datos();
					$datos = array('registros' => $registros);
					$this->load->view('vistaNodocentes',$datos);}
		}
	
}
?>