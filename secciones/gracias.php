
<?php


if(empty($_GET["nombre"]) || empty($_GET["apellido"]) || empty($_GET["mail"])){
    header("Location:error.php?error=404");
    die();
}

$nombre = $_GET['nombre'];
$mail = $_GET['mail'];
$apellido = $_GET['apellido'];
$mensaje = $_GET['mensaje'];

?>

<div class="row nov">
  <div class="container-fluid"> 
       <h2 class="titulo text-center display-4">E-mail Enviado</h2>
   </div>
</div>


<div class="container">
    <div class= "row">
        <div class="cards">
            <div class="card" style="width: 70rem;">
            <img class="card-img-top" src="img/gracias.jpg" alt="Gracias">
                <div class="card-body">
                <h5 class="card-title">Muchas gracias <?= $nombre;?> este fue tu e-mail:</h5>
                    <p class="card-text">Nombre: <?= $nombre;?> <br> Apellido: <?=$apellido; ?> <br> E-mail: <?=$mail; ?> <br> Mensaje: <?=$mensaje;?> </p>
                </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $_GET["opcion1"] ?></li>
                        <li class="list-group-item"><?= $_GET["opcion2"] ?></li>
                        <li class="list-group-item"><?= $_GET["opcion3"] ?></li>
                        <li class="list-group-item"><?= $_GET["opcion4"] ?></li>
                    </ul>
                </div>
        </div>
    </div>
</div>
  
 
    
 
