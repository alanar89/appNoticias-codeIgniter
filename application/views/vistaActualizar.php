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
<?php include "vistaNavlogin.php";?>
<?php echo form_open_multipart('noticias/update'); ?>
<h2 style="text-align: center;"  class="text-primary  mt-3">Modificar Noticias</h2>
<div class=" jumbotron formu  mt-2 col-sm-6" >
<form >
 <div class="form-group">
    <label for="titulo"  class=" control-label font-weight-bold">Titulo</label>
    <input class="form-control " type="text" name="titulo" id="titulo" value="<?php echo $titulo;?>">
     <?php if (form_error('titulo')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('titulo');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="des"  class=" control-label font-weight-bold">Descripcion</label>
    <textarea class="form-control " type="text" name="descripcion" id="des"> <?php echo $descripcion; ?></textarea>
       <?php if (form_error('descripcion')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('descripcion');echo"</div>";} ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $id ?>">
 <input type="hidden" name="idnoticia" value="<?php echo $idu ?>">
 <input type="submit" value="guardar" class="btn btn-primary">
</form>
<a href="<?php echo base_url();?>index.php/noticias/modifcar" class='btn btn-danger'  onclick="return confirm('esta seguro?')">cancelar</a>
</div>
<footer id="footer">
 <div class="container-fluid">
        <p style="text-align: center;">Alan Arregui &copy; 2017</p>
        </div>
    </footer>
</body>

</html>
