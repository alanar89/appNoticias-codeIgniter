<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <style type="text/css">
        #footer{padding: 10px;background: #1536ab;color:white; position:relative; bottom:0px;width: 100%;margin-top:10px; }
         .formu{width:40%;}
     </style>
</head>
<body>
<header><?php include "vistaHeader.php";?></header>
<h2 style="margin-left: 40%" class="text-primary  mt-3">Alta persona</h2>

<?php echo form_open('personapersistente/alta'); ?>

<div class=" jumbotron formu  mt-2" style="margin-left: 26%">
<form >
 <div class="form-group">
    <label for="nom"  class=" control-label font-weight-bold">Nombre</label>
    <input class="form-control " type="text" name="nombre" id="nom" value="<?php echo set_value('nombre'); ?>">
     <?php if (form_error('nombre')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('nombre');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="ape"  class=" control-label font-weight-bold">Apellido</label>
    <input  class="form-control " type="text" name="apellido" id="ape" value="<?php echo set_value('apellido'); ?>">
       <?php if (form_error('apellido')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('apellido');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="doc"  class=" control-label font-weight-bold">Dni</label>
    <input type="number"  class="form-control " name="dni" id="doc" value="<?php echo set_value('dni'); ?>">
     <?php if (form_error('dni')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('dni');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="mail"  class=" control-label font-weight-bold">Mail</label>
    <input class="form-control " type="email" name="mail" id="mail" value="<?php echo set_value('mail'); ?>">
       <?php if (form_error('mail')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('mail');echo"</div>";} ?>
</div>
 <div class="form-group">
    <label for="fc"  class=" control-label font-weight-bold">Fecha de nacimiento</label>
    <input class="form-control " type="date" name="fecha" id="fc" value="<?php echo set_value('fecha'); ?>">
      <?php if (form_error('fecha')){ echo"<div  class='alert alert-danger'role='alert'>";echo form_error('fecha');echo"</div>";} ?>
 </div>
 <div class="form-group">
    <label for="est"  class="control-label font-weight-bold">Estatura</label>
    <input class="form-control " type="number" name="estatura" id="est" value="<?php echo set_value('estatura'); ?>">
        <?php if (form_error('estatura')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('estatura');echo"</div>";} ?>
    </div>
 <div class="form-group"><input type="submit" value="guardar" class="btn btn-primary">
</form>
<a href="<?php echo base_url();?>index.php/personapersistente" class='btn btn-danger'  onclick="return confirm('esta seguro?')">cancelar</a></div>
</div>
<footer id="footer">
 <div class="container-fluid">
        <p style="text-align: center;">Alan Arregui &copy; 2017</p>
        </div>
    </footer>
</body>

</html>
