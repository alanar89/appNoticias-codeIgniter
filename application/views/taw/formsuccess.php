<html>
<head>
<title></title>

	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</head>
<body>
<header><?php include "vistaHeader.php";?></header>
<h3 class="text-primary">Datos correctos</h3>
<?php if($r!=2){ ?>
<a href="<?php echo base_url();?>index.php/personapersistente">volver</a> <?php }else{ ?>
<a href="<?php echo base_url();?>index.php/empleadoPersistente">volver</a> <?php } ?>
<footer>  <?php include "vistaPie.php";?></footer>
</body>
</html>