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
<h2 style="text-align: center;"  class="text-primary  mt-3">No docentes de la universidad</h2>
<?php if(count($registros)!=0){
echo"<table  class='table  table-striped  mt-2'><tr><th>Nombre y apellido</th><th>Departamento</th><th>Categoria</th><th>Cuil/cuit</th><th></tr>";
foreach($registros as $valor){
	echo"<tr><td>$valor[nombreApellido]</td><td>$valor[departamento]</td><td>$valor[categoria]</td><td>$valor[cuil_cuit]</td></tr>
	";}echo"</table>";}
else{echo"<h4>no hay personas registradas<h4>";}?>
<a href="<?php echo base_url();?>index.php/universidad" class="btn btn-primary">Volver</a>

</body>
</html>
</form>
<footer>  <?php include "vistaPie.php";?></footer>
</body>
</html>