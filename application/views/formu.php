<html>
<head>
<title>Upload Form</title>
</head>
<body>



<?php echo form_open_multipart('upload/do_upload');?>

<form >
 <div class="form-group">
    <label for="titulo"  class=" control-label font-weight-bold">Titulo</label>
    <input class="form-control " type="text" name="titulo" id="titulo" value="<?php echo set_value('titulo'); ?>">
     <?php if (form_error('titulo')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('titulo');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="des"  class=" control-label font-weight-bold">Descripcion</label>
    <textarea class="form-control " type="text" name="descripcion" id="des" value="<?php echo set_value('descripcion'); ?>"></textarea>
       <?php if (form_error('descripcion')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('descripcion');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="fecha"  class=" control-label font-weight-bold">Fecha</label>
    <input type="date"  class="form-control " name="fecha" id="fecha" value="<?php echo set_value('fecha'); ?>">
     <?php if (form_error('fecha')){ echo"<div  class='alert alert-danger 'role='alert'>";echo form_error('fecha');echo"</div>";} ?>
    </div>
 <div class="form-group">
    <label for="fc"  class=" control-label font-weight-bold">Imagen</label>
    <input class="form-control " type="file" name="userfile" id="fc" value="<?php echo set_value('imagen'); ?>">
      <?php if (form_error('imagen')){ echo"<div  class='alert alert-danger'role='alert'>";echo form_error('imagen');echo"</div>";} ?>
 </div>

 <input type="submit" value="guardar" class="btn btn-primary">
</form>


</body>
</html>