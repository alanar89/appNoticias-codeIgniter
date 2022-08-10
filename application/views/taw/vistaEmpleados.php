<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  	 <style type="text/css">
        #footer{padding: 10px;background: #1536ab;color:white; position:relative; bottom:0px;width: 100%;margin-top:10px; }
     </style>
</head>
<body>
<header><?php include "vistaHeader.php";?></header>
<h2 style="text-align: center;"  class="text-primary  mt-3">Empleados</h2>
<?php if(count($registros)!=0){
echo"<table  class='table  table-striped  mt-2'><tr><th>Nombre</th><th>Apellido</th><th>Cargo</th><th>Antiguedad</th><th>Salario</th></tr>";
foreach($registros as $valor){
	echo"<tr><td>$valor[nombre]</td><td>$valor[apellido]</td><td>$valor[cargo]</td><td>$valor[antiguedad] años</td><td>$$valor[salario]</td></tr>
	";}echo"<tr><th>empleados: $total</th><td></td><td></td><td></td><th>total: $$neto</th><tr></table>";}
else{echo"<h4>no hay empleados registrados<h4>";}?>

<a href="<?php echo base_url();?>index.php/empleadoPersistente/altaEmpleado" class="btn btn-primary">registrar empleado</a>

</body>
</html>
</form>
<footer id="footer" class="mt-5">
 <div class="container-fluid">
        <p style="text-align: center;">Alan Arregui &copy; 2017</p>
        </div>
    </footer>
 
</body>
</html>