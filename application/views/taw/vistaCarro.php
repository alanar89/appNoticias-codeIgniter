<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  	 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
	 <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"  type="text/javascript"></script>
	 <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>
  
</head>
<body>
 <header><?php include "vistaHeader.php";?></header>
<h2 style="text-align: center;" class="text-primary  mt-3">Carrito de compras</h2>
<?php 
            if ($carrito = $this->cart->contents()) {
                ?>
                <table  class='table  table-striped'><tr><th>Nombre</th><th>Precio</th><th>
                Cantidad</th><th>Borrar</th><th>Actualizar</th></tr>
              <?php
                   foreach ($carrito as $item) {
                        ?>
                        <form name="formu" action="<?php echo base_url();?>index.php/articulos/actualizar" method="post">
                        <tr>
                            <td><?=$item['name']?></td>
                            <td><?='$'.$item['price']?></td>
                            <td><?= $item['qty'] ?><input name="cantidad" type="number" id="cantidad" value="<?php echo $item['qty'] ?>"><input name="col" type="hidden"  value="<?php echo $item['rowid'] ?>"></td>
                           
                            <td><a class="btn-danger btn-sm" href="<?php echo base_url();?>index.php/articulos/quitar/<?php echo $item['rowid'];?>">quitar</a></td>
                             <td><input  class="btn btn-success btn-sm" type="submit" value="actualizar"></td>
                        </tr>
                        </form>
                        <?php
                    }
                    ?>
                    <tr id="total">
                        <td><strong>Total:</strong></td>  
                        <td><?='$'.$this->cart->total() ?></td>
                    </tr>
                </table>              
            <?php
            }else{echo "<h4 style= 'text-align:center'>no hay productos en el carrito</h4>";}
            
            ?>
           <p><?php echo $this->session->flashdata('eliminado') ?></p>
            <a href="<?php echo base_url();?>index.php/articulos">lista de productos</a>

</body>
</html>
</form>
<footer>  <?php include "vistaPie.php";?></footer>
</body>
</html>
