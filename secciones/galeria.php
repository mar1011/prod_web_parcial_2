<?php 
include_once('config/funcion.php');
?>
<!doctype html>

<!--TÍTULO -->
<div class="row nov">
  <div class="container-fluid"> 
<h2 class="titulo text-center display-4">Galería de Fotos</h2>
  </div>

</div>

  <!--IMÁGENES -->
<section>
  <div class="container">
      <div class="card-columns">
  <?php
 /* $carpeta ="galeria";
  $dir = opendir($carpeta);

  while ($galeria = readdir($dir)):
    if($galeria != "." && $galeria != ".."):
      $foto = count(glob("$carpeta/$galeria/$galeria.*")) >0 ? glob("$carpeta/$galeria/$galeria.*") [0] : "img/sin_imagen.png";
 */
    $imagenes = \Clases\FileSystem::getAll("galeria");
    foreach($imagenes as $img):
        $imagenGaleria = new \Clases\Imagen($img);
    foreach (\Clases\Galeria::armarGaleria($imagenes) as $imagen):
 ?>

        <div class="card">
          <a href="#" data-toggle="modal" data-target="#modal <?= $imagen->imagen ?>">
            <img  src="<?= $imagen->imagen; ?>" alt="<?= $img; ?>" class="card-img-top">
          </a>
        </div>


        <!-- MODAL -->
          <div class="modal fade" id="modal <?= $$imagen->imagen ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
               <img src="<?= $imagen->imagen; ?>" alt="<?= imprimir_detalle("$carpeta/$galeria/descripcion.txt", "descripcion"); ?>" class="img-fluid rounded">
             </div>
          </div>
      
    <?php
    //endif;
  endforeach;
  endforeach;
  //endwhile;
    ?>
    </div>
  </div>
  
</section>


      
