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
<h2  style="margin-left: 35%;" class="text-primary  mt-3">Actualizar registro</h2>

<?php echo form_open('personapersistente/modificar'); ?>

<div class=" jumbotron formu  mt-2" style="margin-left: 26%">
<form >
<?php if($r==1){
 echo"<div class='form-group'>
    <label for='nom'  class=' control-label font-weight-bold'>Nombre</label>
    <input class='form-control' type='text' name='nombre' id='nom'  value='$nombre' >
    </div>
 <div class='form-group'>
    <label for='ape'  class=' control-label font-weight-bold'>Apellido</label>
    <input  class='form-control ' type='text' name='apellido' id='ape' value='$apellido' >
    </div>
 <div class='form-group'>
    <label for='doc'  class=' control-label font-weight-bold'>Dni</label>
    <input type='number'  class='form-control ' name='dni' id='doc' value='$dni' >
    </div>
 <div class='form-group'>
    <label for='mail'  class=' control-label font-weight-bold'>Mail</label>
    <input class='form-control  type='email' name='mail' id='mail' value='$mail'>
</div>
 <div class='form-group'>
    <label for='fc'  class=' control-label font-weight-bold'>FechaNacimiento</label>
    <input class='form-control' type='date' name='fecha' id='fc' value='$fecha'>
 </div>
 <div class='form-group'>
    <label for='est'  class=' control-label font-weight-bold'>Estatura</label>
    <input class='form-control' type='number' name='estatura' id='est' value='$estatura'>
    <input class='form-control ' type='hidden' name='id' value='$id'>
      <input class='form-control ' type='hidden' name='re' value='$re'>
    </div>
<input type='submit' value='guardar'name='guardar' class='btn btn-primary'>
<a href='";?><?php echo base_url();?><?php echo"index.php/personapersistente' class='btn btn-danger'  onclick='return confirm('esta seguro?')'>cancelar</a>
</form>";?>
<?php 
}else{
 echo"<div class='form-group'>
    <label for='nom'  class='control-label font-weight-bold'>Nombre</label>
    <input class='form-control ' type='text' name='nombre' id='nom' value='";echo set_value('nombre');echo"'>";?>
     <?php if (form_error('nombre')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('nombre');echo"</div>";} ?>
   <?php echo"</div>
 <div class='form-group'>
    <label for='ape'  class=' control-label font-weight-bold'>Apellido</label>
    <input  class='form-control ' type='text' name='apellido' id='ape'  value='";echo set_value('apellido');echo"'>";?>
       <?php if (form_error('apellido')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('apellido');echo"</div>";} ?>
     <?php echo" </div>
 <div class='form-group'>
    <label for='doc'  class=' control-label font-weight-bold'>Dni</label>
    <input type='number'  class='form-control ' name='dni' id='doc'  value='";echo set_value('dni');echo"'>";?>
     <?php if (form_error('dni')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('dni');echo"</div>";} ?>
     <?php echo" </div>
 <div class='form-group'>
    <label for='mail'  class=' control-label font-weight-bold'>Mail</label>
    <input class='form-control ' type='email' name='mail' id='mail'  value='";echo set_value('mail');echo"'>";?>
       <?php if (form_error('mail')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('mail');echo"</div>";} ?>
  <?php echo"</div>
 <div class='form-group'>
    <label for='fc'  class=' control-label font-weight-bold'>Fecha de nacimiento</label>
    <input class='form-control ' type='date' name='fecha' id='fc'  value='";echo set_value('fecha');echo"'>";?>
      <?php if (form_error('fecha')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('fecha');echo"</div>";} ?>
   <?php echo"</div>
 <div class='form-group'>
    <label for='est'  class='control-label font-weight-bold'>Estatura</label>
    <input class='form-control ' type='number' name='estatura' id='est' value='";echo set_value('estatura');echo"'>";?>
        <?php if (form_error('estatura')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('estatura');echo"</div>";} ?>
     <?php echo" </div>
 <div class='form-group'><input type='submit' value='guardar' class='btn btn-primary'>   
 <a href='";?><?php echo base_url();?><?php echo"index.php/personapersistente' class='btn btn-danger'  onclick='return confirm('esta seguro?')'>cancelar</a></div>
 <input type='hidden' name='id' value='";echo set_value('id');echo"'>";?>
 <?php echo"<input class='form-control ' type='hidden' name='re' value='$re'>
</form>";}?>
</div>
<footer id="footer">
 <div class="container-fluid">
        <p style="text-align: center;">Alan Arregui &copy; 2017</p>
        </div>
    </footer>
</body>

</html>
