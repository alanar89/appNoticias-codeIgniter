<?php
class Articulos extends CI_Controller {
	function index(){
	
	$this->load->model('articuloModel');
	$articulos = $this->articuloModel->mostrar();
	$datos= array('articulos' => $articulos);
	$this->load->view('vistaArticulos',$datos);
}  
   function agregar(){
      $this->load->model('articuloModel');
        $id=$this->uri->segment(3);
        $productos = $this->articuloModel->dame_articulo($id);
       foreach ($productos as $value) {
         $nombre=$value['nombre'];
         $precio=$value['precio'];}
       $cantidad = 1;
        $carrito = $this->cart->contents();
 
        foreach ($carrito as $item) {
            if ($item['id'] == $id) {
                $cantidad =+ 1 ;
            }
        }
        $insert = array(
            'id' => $id,
            'qty' => $cantidad,
            'price' => $precio,
            'name' => $nombre
        );
        $this->cart->insert($insert);
        $this->session->set_flashdata('agregado', 'El producto fue agregado correctamente');
        redirect('articulos');
    }


    function quitar($rowid){

      {
       $producto = array(
         'rowid' => $rowid,
          'qty' => 0
        );
        $this->cart->update($producto);
        $this->session->set_flashdata('eliminado', 'El producto fue eliminado correctamente');
        redirect('articulos/verCarro');
    }
    }

    function actualizar(){
      $cant=$this->input->post('cantidad');
      $rowid=$this->input->post('col');
       $producto = array(
         'rowid' => $rowid,
          'qty' => $cant
        );
       $this->cart->update($producto);
        $this->session->set_flashdata('actualizado', 'El producto fue actualizado correctamente');
        redirect('articulos/verCarro');
    }

    function verCarro(){
        $this->load->helper('form');
     $this->load->view('vistaCarro');
    }

       function cerrar(){
      $this->cart->destroy();
       redirect('articulos/verCarro');
    }
}
?>