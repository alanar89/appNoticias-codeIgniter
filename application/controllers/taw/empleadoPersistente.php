<?php
class EmpleadoPersistente extends CI_controller{
	function index(){
		$this->load->model('personaModel');
		$this->load->model('empleadoModel');
		$registros = $this->empleadoModel->mostrar();
		$cantidad = $this->empleadoModel->cantidad();
		$neto=0;
		foreach ($registros as  $value) {
			$neto+=$value['salario'];
		}
		foreach ($cantidad as  $value) {
		$total=$value['total'];}
		$cant = array('total' => $total);
		$datos = array('registros' => $registros,'total'=>$total,'neto'=>$neto);
		$this->load->view("vistaEmpleados",$datos);
	}



	/*function cantidadEmpleados(){
		$this->load->model('personaModel');
		$this->load->model('empleadoModel');
		$cantidad = $this->empleadoModel->cantidad();
		foreach ($cantidad as  $value) {
		return $total= $value['total'];}
		
	}-*/
	
	

	function totalSueldos(){
		$this->load->model('personaModel');
		$this->load->model('empleadoModel');
		$registros = $this->empleadoModel->mostrar();
		$total=0;
		foreach ($registros as  $value) {
			$total+=$value['salario'];
		}
		
		$dato= array('total' => $total,'r'=>2);
		$this->load->view("vistaConsultaEmpleados",$dato);
	}

	function altaEmpleado(){
		
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('salario', 'salario', 'required');
$this->form_validation->set_rules('antiguedad', 'antiguedad', 'required');


if ($this->form_validation->run() == FALSE)
{
	$this->load->model('personaModel');
	$registros = $this->personaModel->mostrar();
		$datos = array('registros' => $registros);
$this->load->view('vistaAltaEmpleado',$datos);
}
else
{		$this->load->model('personaModel');	
		$this->load->model("empleadoModel");
		$datos['cargo']=$this->input->post('cargo');
		$datos['antiguedad']=$this->input->post('antiguedad');
		$datos['salario']=$this->input->post('salario');
		$datos['idpersona']=$this->input->post('id');
		$this->empleadoModel->insertar($datos);
		$r=array('r'=>2);
		$this->load->view('formsuccess',$r);

}
	}

}
?>
