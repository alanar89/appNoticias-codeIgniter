<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
   <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
     <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</head>
<body>

<?php if($this->session->userdata('usuario')){ $rol=$this->session->userdata('rol');?>
<header>
      <nav class="navbar  navbar-toggleable-md navbar-inverse  bg-inverse">
        <a class="navbar-brand" href="<?php echo base_url();?>index.php/noticias">
       <img src="<?php echo base_url();?>assets/img/noti.png">
      </a>
        <div class="collapse navbar-collapse " >
            <ul class="navbar-nav ml-auto mr-3">
            <?php if ($rol=='editor'){?>
            <li class="nav-item dropdown " ><a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> noticias</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                 <a class="dropdown-item" href="<?php echo base_url();?>index.php/noticias/crear" >Nueva</a>
                 <a class="dropdown-item" href="<?php echo base_url();?>index.php/noticias/modifcar" >Editar</a>
              </div>
             </li>
             <li class="nav-item" >
                <a class="nav-link" href="<?php echo base_url();?>index.php/usuarios/salir" >Salir</a>
             </li>
             <?php } else{ if ($rol=='validador'){ ?>
             <li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> noticias</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="<?php echo base_url();?>index.php/noticias/publicar" >Publicar</a>
              </div>
             </li>
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/usuarios/salir" >Salir</a>
             </li><?php }else{ ?>
                <li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> noticias</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="<?php echo base_url();?>index.php/noticias/crear" >Nueva</a>
                 <a class="dropdown-item" href="<?php echo base_url();?>index.php/noticias/publicar" >Publicar</a>
                 <a class="dropdown-item" href="<?php echo base_url();?>index.php/noticias/modifcar" >Editar</a>
              </div>
             </li>
               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/usuarios/salir" >Salir</a></li><?php }} ?>
          </ul>
        </div>
    </nav>
    </header> 
      <?php if(count($registros)!=0){
    foreach($registros as $valor){ $f=$valor['fecha'];$fecha=date("d-m-Y",strtotime($f));?>
     <h2 style="text-align: center;"  class="text-primary  mt-3"><?php echo $valor['titulo'] ?></h2>
     <div class='container'>
     <div class="row align-items-center justify-content-center">
       <div class="col-8 mt-2 text-muted"><?php echo"publicado el ". $fecha ?></div>
    <div class="col-8 mt-2"><img class='card-img-top img-fluid' <?php if($valor['imagen']==NULL){ ?> src="<?php echo base_url();?>assets/img/nofoto.png"> <?php } else{?>   src="<?php echo base_url();?>assets/img/<?php echo $valor['imagen']  ?>"><?php } ?></div>
      <div class="col-8 mt-2"><?php echo $valor['descripcion'] ?></div>  
       <div class="col-8 mt-2"><?php echo "<h6 class='text-info'>Por ". $valor['usuario']; ?></h6></div>
     </div>
     </div>
  

<?php }} else{echo"<h4>no hay noticas disponibles<h4>";}
    }else{ include"vistaNav.php";?>
    
      
       
    <?php if(count($registros)!=0){
    foreach($registros as $valor){ $f=$valor['fecha'];$fecha=date("d-m-Y",strtotime($f));?>
     <h2 style="text-align: center;"  class="text-primary  mt-3"><?php echo $valor['titulo'] ?></h2>
     <div class='container'>
     <div class="row align-items-center justify-content-center">
       <div class="col-8 mt-2 text-muted"><?php echo "publicado el ".$fecha ?></div>
    <div class="col-8 mt-2"><img class='card-img-top img-fluid' <?php if($valor['imagen']==NULL){ ?> src="<?php echo base_url();?>assets/img/nofoto.png"> <?php } else{?> src="<?php echo base_url();?>assets/img/<?php echo $valor['imagen']  ?>"><?php } ?></div>
      <div class="col-8 mt-2"><?php echo $valor['descripcion'] ?></div>  
       <div class="col-8 mt-2 "><?php echo "<h6 class='text-info'>Por ". $valor['usuario']; ?></h6></div>
     </div>
     </div>

<?php }} else{echo"<h4>no hay noticas disponibles<h4>";}}?>

</body>
</html>