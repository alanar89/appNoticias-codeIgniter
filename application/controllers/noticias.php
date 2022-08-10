<?php

 class Noticias extends CI_controller{

 	function index(){
 	$this->load->model('noticiaModel');
		$registros = $this->noticiaModel->mostrar();
		$datos = array('registros' => $registros);
		$this->load->view('vistaIndex',$datos);
 	}

 	function crear(){
 		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'titulo', 'required|max_length[60]');
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required|max_length[500]');
			$this->form_validation->set_rules('fecha', 'fecha', 'required');


if ($this->form_validation->run() == FALSE)
{
	$this->load->model('noticiaModel');
	$registros = $this->noticiaModel->mostrar();
		$datos = array('registros' => $registros);
		$this->load->view('vistaCrearNoticia',$datos);
}
else	
{		$this->load->model('noticiaModel');
		 $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ( $this->upload->do_upload('imagen'))
                {
                       
               		$data = $this->upload->data();
                    
		$datos['titulo']=$this->input->post('titulo');
		$datos['descripcion']=$this->input->post('descripcion');
		$datos['fecha']=$this->input->post('fecha');
		$datos['imagen']= $data['file_name'];
		$datos['id']=$this->input->post('id');
		$this->noticiaModel->guardar($datos);
		
		$this->load->view('formok');}else{$datos['titulo']=$this->input->post('titulo');
		$datos['descripcion']=$this->input->post('descripcion');
		$datos['fecha']=$this->input->post('fecha');
		$datos['imagen']='noFoto.png';
		$datos['id']=$this->input->post('id');
		$this->noticiaModel->guardar($datos);
		
		$this->load->view('formok');}

}
	}


	function leer($id){
		$this->load->model('noticiaModel');
		$registros=$this->noticiaModel->dame_noticia($id);
		$datos = array('registros' => $registros);
		$this->load->view('vistaDetalle',$datos);

	}

	function publicar(){
		$this->load->model('noticiaModel');
		$registros = $this->noticiaModel->validar();
		$datos = array('registros' => $registros);
		$this->load->view('vistaValidar',$datos);

	}


	function modifcar(){
		$this->load->model('noticiaModel');
		$registros = $this->noticiaModel->editar();
		$datos = array('registros' => $registros);
		$this->load->view('vistaEditar',$datos);

	}

	function alta(){}
 

 function validar($noti){
 	$this->load->model('noticiaModel');
 	
	 $this->noticiaModel->cambio($noti);
	redirect('noticias/modifcar');}


 function activar($noti){
 	$this->load->model('noticiaModel');
 	
	 $this->noticiaModel->cambio2($noti);
	redirect('noticias/publicar');}

	function corregir(){
		$this->load->model('noticiaModel');
		$noti['idnoticia']=$this->input->post('id');
		$usuario=$this->input->post('user');
 		$noti['detalle']=$this->input->post('detalle')."|".$usuario;
	 $this->noticiaModel->detalle($noti);
	redirect('noticias/publicar');}



	function update(){
 		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'titulo', 'required|max_length[60]');
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required|max_length[500]');
		if ($this->form_validation->run() == FALSE)
{
		$id=$this->uri->segment(3);
		$this->load->model('noticiaModel');
		$reg=$this->noticiaModel->dame_noticia($id);
		foreach ($reg as $value) {

			$titulo=$value['titulo'];
			$des=$value['descripcion'];
			$id=$value['idusuario'];
			$idu=$value['idnoticia'];}

		$datos=array('titulo'=>$titulo,'descripcion'=>$des,'idu'=>$idu,'id'=>$id);

		$this->load->view('vistaActualizar',$datos);
}
else	
{		$this->load->model('noticiaModel');        
		$datos['titulo']=$this->input->post('titulo');
		$datos['descripcion']=$this->input->post('descripcion');
		$datos['fecha']=$this->input->post('fecha');
		$datos['idnoticia']=$this->input->post('idnoticia');
			$datos['id']=$this->input->post('id');
		$this->noticiaModel->actualizar($datos);
		$this->load->view('formok');}

}
	
	
 }
?>