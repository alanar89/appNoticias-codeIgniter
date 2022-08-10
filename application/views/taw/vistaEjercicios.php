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
<h3 class="text-primary text-center mt-5">Ejercicios</h3>
<div class="container mt-3">
 <div class="row justify-content-center">  
<div class="list-group col-sm-2">
 <a class="list-group-item font-italic " href="<?php echo base_url();?>index.php/articulos">Carro de compras</a> 
 <a class="list-group-item font-italic " href="<?php echo base_url();?>index.php/personapersistente">Personas</a> 
 <a class="list-group-item font-italic " href="<?php echo base_url();?>index.php/empleadoPersistente">Empleados</a> 
<a class="list-group-item font-italic " href="<?php echo base_url();?>index.php/universidad">Universidad</a>
</div>
</div>
</div>
</body>
</html>
</form>
<footer >
 <?php include "vistaPie.php"; ?>
    </footer>
 
</body>
</html>