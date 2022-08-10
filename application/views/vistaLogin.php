<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</head>
<body>
<header> <?php include "vistaNav.php"; ?></header>
<h2 style="margin-left: 21%" class="text-primary">Iniciar Sesion</h2>

<?php echo form_open('usuarios/login'); ?>


<div class="col-sm-8" style="margin-left: 20%">
<form >
 <div class="form-group">
    <label for="nom"  class="col-sm-3 control-label">Usuario</label>
    <input class="form-control col-sm-6" type="text" name="usuario" id="nom" value="<?php echo set_value('usuario'); ?>">
     <?php if (form_error('usuario')){ echo"<div  class='alert alert-danger col-sm-7'role='alert'>";echo form_error('usuario');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="pass"  class="col-sm-3 control-label">Contraseña</label>
    <input  class="form-control col-sm-6" type="password" name="contrasena" id="pass"  value="<?php echo set_value('contrasena'); ?>">
       <?php if (form_error('contrasena')){ echo"<div  class='alert alert-danger col-sm-7'role='alert'>";echo form_error('contrasena');echo"</div>";} ?>
    </div>
    
 <div class="form-group"><input type="submit" value="Ingresar" class="btn btn-primary">
</form>
<a href="<?php echo base_url();?>index.php/noticias" class='btn btn-danger'  onclick="return confirm('esta seguro?')">cancelar</a></div>
</div>
</body>
</html>
