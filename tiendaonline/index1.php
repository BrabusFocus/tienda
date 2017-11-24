<?php
include 'app/src/core.php';
/**
 * Created by PhpStorm.
 * User: Fany
 * Date: 22/08/2016
 * Time: 19:15
 */
if(isset($_GET['views'])){
    if(file_exists('pages/admon/'.strtolower($_GET['views'])).'.php'){

        header('location:pages/admon/');
    }

}
include 'template/estructura/header.php';
include 'template/estructura/navgeneral.php';
 include 'vendor/autoload.php';
 use Raccoon\goRSS\model\Productos as pro;





?>
    <article>


         <?php

         $obj = new pro();
         $rows = $obj->getAll();

         foreach($rows as $row){
             $filas = $obj->getImgProductById($row['idProducto']);
         foreach ($filas as $fila) {
          		# code...
          ?>
          <img src="template/imgprod/<?=$fila['imagen']?>" width="100px"  alt="">
          <?php		
          	} 	
         ?>

         <h3><?=$row['nombre']?></h3>
         <p>Descripcion: <?=$row['descripcion']?></p>
         <p>Precio:$ <?=$row['precio']?></p>
             <a href="./pages/productos.php?id=<?=$row['idProducto']?>"><button>Mas Informacion...</button></a>
         <button value="<?=$row['idProducto']?>" class="botoncompra">Comprar Ahora</button>


          <?php
         }
         ?>
    </article>


<?php
             include 'template/estructura/footer.php'
?>