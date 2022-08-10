<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <style type="text/css">
        footer{padding: 10px;background: #1536ab;color:white; position:relative;width: 100%;margin-top:10px; }
         .formu{width:40%;}
     </style>
</head>
<body>
<header><?php include "vistaHeader.php";?></header>
<h2 style="margin-left: 40%" class="text-primary  mt-3">Alta Empleado</h2>

<?php echo form_open('empleadoPersistente/altaEmpleado'); ?>

<div class=" jumbotron formu  mt-2" style="margin-left: 26%">

<form >
 <div class="form-group">
  
    </div>
 <div class="form-group">
    <label for="ape"  class="control-label">Cargo</label>
    <select class="form-control" name="cargo">
    <option value="administrativo">administrativo</option>
    <option value="operario">operario</option>
    <option value="jefe">jefe</option>
    <option value="subjefe">subjefe</option>
    </select>
    </div>
      <label for="anti"  class=" control-label font-weight-bold">Antiguedad</label>
    <input class="form-control " type="number" name="antiguedad"  value="<?php echo set_value('antiguedad'); ?>">
     <?php if (form_error('antiguedad')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('antiguedad');echo"</div>";} ?>
 <div class="form-group">
    <label for="sal"  class=" control-label font-weight-bold">Salario</label>
    <input type="number"  class="form-control " name="salario" value="<?php echo set_value('salario'); ?>">
     <?php if (form_error('salario')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('salario');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="alta"  class=" control-label font-weight-bold">Nombre y apellido</label>
   <select name="id" class="form-control " name="id">
   <?php foreach ($registros as $value) {
     echo"<option value='$value[idpersona]'>$value[nombre] $value[apellido]</option>";}?>
   </select>
</div>
 <div class="form-group"><input type="submit" value="guardar" class="btn btn-primary">
</form>
<a href="<?php echo base_url();?>index.php/empleadoPersistente" class='btn btn-danger'  onclick="return confirm('esta seguro?')">cancelar</a></div>
</div>
<footer id="footer">
 <div class="container-fluid">
        <p style="text-align: center;">Alan Arregui &copy; 2017</p>
        </div>
    </footer>
</body>

</html>