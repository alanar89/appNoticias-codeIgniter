<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  	 
</head>
<body>
<header><?php include "vistaHeader.php";?></header>
<h2 style="text-align: center;" class="text-primary  mt-3">Productos disponibles</h2>
<?php 
echo"<table  class='table  table-striped  mt-2'><tr><th>Nombre</th><th>Descripcion</th><th>Precio</th><th><a href='articulos/verCarro'>";?>
<img src="<?php echo base_url();?>assets/img/carro.png"></a></th></tr>
<?php foreach($articulos as $valor){
	echo"<tr><td>$valor[nombre]</td><td>$valor[descripcion]</td><td>$ $valor[precio]</td><td><a href='articulos/agregar/$valor[idarticulo]' class='btn btn-primary btn-sm'>agregar</a></td></tr>
	";}echo"</table>";
?>
<p><?php echo $this->session->flashdata('agregado') ?></p>
<a href="<?php echo base_url();?>index.php/articulos/cerrar">salir</a>
</body>
</html>
</form>
<footer>  <?php include "vistaPie.php";?></footer>
</body>

</html>
