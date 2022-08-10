<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <style type="text/css">
     </style>
</head>
<body>
<?php include "vistaNavlogin.php"; $id=$this->session->userdata('id');?>
<?php echo form_open_multipart('noticias/crear'); ?>
<h2 style="text-align: center;"  class="text-primary  mt-3">Nueva Noticias</h2>
<div class=" jumbotron formu  mt-2 col-sm-6" >
<form >
 <div class="form-group">
    <label for="titulo"  class=" control-label font-weight-bold">Titulo</label>
    <input class="form-control " type="text" name="titulo" id="titulo" value="<?php echo set_value('titulo'); ?>">
     <?php if (form_error('titulo')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('titulo');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="des"  class=" control-label font-weight-bold">Descripcion</label>
    <textarea class="form-control " type="text" name="descripcion" id="des" ><?php echo set_value('descripcion'); ?></textarea>
       <?php if (form_error('descripcion')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('descripcion');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="fecha"  class=" control-label font-weight-bold">Fecha</label>
    <input type="date"  class="form-control " name="fecha" id="fecha" value="<?php echo set_value('fecha'); ?>">
     <?php if (form_error('fecha')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('fecha');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="fc"  class=" control-label font-weight-bold">Imagen</label>
    <input class="form-control " type="file" name="imagen" id="fc" value="<?php echo set_value('imagen'); ?>">
      <?php if (form_error('imagen')){ echo"<div  class='alert alert-danger'role='alert'>";echo form_error('imagen');echo"</div>";} ?>
 </div>
 <input type="hidden" name="id" value="<?php echo $id ?>">
 <input type="submit" value="guardar" class="btn btn-primary">
</form>
<a href="<?php echo base_url();?>index.php/noticias" class='btn btn-danger'  onclick="return confirm('esta seguro?')">cancelar</a>
</div>
<footer id="footer">
 <div class="container-fluid">
        <p style="text-align: center;">Alan Arregui &copy; 2017</p>
        </div>
    </footer>
</body>

</html>
