<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
   <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
     <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <script type="text/javascript">
       function detalle(){
          p = document.getElementById("ver"); 
        p.style.display = "inline"; 
       }
     </script>
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
            <li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> noticias</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
     <h2 style="text-align: center;"  class="text-primary  mt-3"> Validar Noticias</h2>
       
    <?php if(count($registros)!=0){
    foreach($registros as $valor){ $f=$valor['fecha'];$fecha=date("d-m-Y",strtotime($f));$usuario=$this->session->userdata('usuario');?>
     <h2 style="text-align: center;"  class="text-primary  mt-3"><?php echo $valor['titulo'] ?></h2>
     <div class='container'>
     <div class="row align-items-center justify-content-center">
       <div class="col-8 mt-2"><?php echo $fecha ?></div>
    <div class="col-8 mt-2"><img class='card-img-top img-fluid' <?php if($valor['imagen']==NULL){ ?> src="<?php echo base_url();?>assets/img/nofoto.png"> <?php } else{?>   src="<?php echo base_url();?>assets/img/<?php echo $valor['imagen']  ?>"><?php } ?></div>
      <div class="col-8 mt-2"><?php echo $valor['descripcion'] ?></div> 
     <div class="col-8 mt-2 mb-2">  <a href='<?php echo base_url();?>index.php/noticias/activar/<?php echo $valor["idnoticia"];?>' class='btn btn-primary'  onclick="return confirm('esta seguro?')">Publicar</a>
    <input type="button" value="correcion" class="btn btn-primary" onclick="detalle()"> </div>
     <div id="ver" class="col-8 mt-2 mb-2" style="display: none;"><form method="post" action="<?php echo base_url();?>index.php/noticias/corregir"><textarea class="col-12 mt-2 mb-2" name="detalle"></textarea>
     <input type="hidden" name="id" value="<?php echo $valor['idnoticia'];?>">
     <input type="hidden" name="user" value="<?php echo $usuario;?>">
     
     <input type="submit" value="guardar" class="btn btn-primary col-2 mt-2 mb-2"></form></div>
     </div>
    
     </div>
     

<?php }echo"</div>";} else{echo"<h4>no hay noticas disponibles<h4>";}

    }else{ redirect('usuarios/login');} ?>
  
    

</body>
</html>