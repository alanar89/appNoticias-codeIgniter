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
<h2  style="text-align: center"; class="text-primary  mt-3">Registro de personas</h2>
<?php if(count($registros)!=0){
echo"<table  class='table  table-striped  mt-2'><tr><th>Nombre</th><th>Apellido</th><th>Dni</th><th>Email</th><th>Fecha de nacimiento</th><th>Estatura</th><th>Otros</th></tr>";
foreach($registros as $valor){
echo"<tr><td>$valor[nombre]</td><td>$valor[apellido]</td><td>$valor[dni]</td><td>$valor[mail]<td>$valor[fechaNacimiento]</td><td>$valor[estatura] cm</td><td><a href='personapersistente/baja/$valor[idpersona]' class='btn btn-danger btn-sm'  onclick=\"return confirm('eliminar registro?')\">eliminar</a> <a href='personapersistente/modificar/$valor[idpersona]' class='btn btn-warning btn-sm' >modificar</a></td></tr>";
}echo"</table>";}
else{echo"<h4>no hay personas registradas<h4>";}?>
<a href="personapersistente/alta" class="btn btn-primary">Registrar Persona</a>

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
