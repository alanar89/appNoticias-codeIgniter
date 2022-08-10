<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  	 	<script type="text/javascript">
	function cambio(){
		var r=document.getElementById("elegir").value;
		if(r!=""){document.forms["formu"].submit();}
	}
	</script>
</head>
<header><?php include "vistaHeader.php";?></header>
<body>
<h2 style="text-align: center;"  class="text-primary  mt-3">Registro de personas de la Universidad</h2>
<div class="container col-sm-6  mt-2" style="margin-left:35%; ">

<form name="formu" action="<?php echo base_url();?>index.php/universidad/listar" method="post">
<select  name="elegir" id="elegir" class="form-control col-sm-5" onchange="cambio()">
	<option value="" selected>seleccione registro</option>
	<option value="a">Alumnos</option>
	<option value="d">Docentes</option>
	<option value="nd">No docentes</option>
</select>
</form>
</div>

</body>
</html>
</form>
<footer>  <?php include "vistaPie.php";?></footer>
</body>
</html>
