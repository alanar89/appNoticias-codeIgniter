<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
  	 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script> 
</head>
<body>
    <header>
     	<nav class="navbar  navbar-toggleable-md navbar-inverse  bg-inverse">
  			<a class="navbar-brand" href="<?php echo base_url();?>index.php/noticias">
   		 <img src="<?php echo base_url();?>assets/img/noti.png">
 		 	</a>
 		 		<div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto">
     				 <li class="nav-item">
       				 	<a class="nav-link" href="<?php echo base_url();?>index.php/usuarios/login"  >Ingresar</a>
     				 </li>
     				 <li class="nav-item">
       					 <a class="nav-link" href="<?php echo base_url();?>index.php/usuarios/registro" >Registrarse</a>
     				 </li>
    			</ul>
  			</div>
		</nav>
    </header>
</body>
</html>

