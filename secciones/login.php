<?php

?>
<!--TÍTULO-->
<div class="row">
    <div class="container-fluid">
        <h1 class="text-center nov display-4">Login</h1>

    </div>
</div>

<div class="container">

    <?php


    \Clases\Session::getError();
    ?>
    <?php
    if(isset($_SESSION["error"])):

    ?>
    <div class="container">
        <div class=" mt-5 alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <p><b><?= $_SESSION["error"] ?></b> </p>
        </div>
        <?php
        endif;
        \Clases\Session::getMessage();
        ?>
    </div>

</div>

<div class="container">
    <div class="row">

        <div class="col-6 offset-3">
            <form action="procesar_login.php" method="POST" class="formulario">
                <div class="form-group">

                    <span class="etiqueta frase2">Mail:</span> <br>
                    <input type="email" name="email" placeholder="ejemplo@ejemplo.com" class="form-control"> <br>
                </div>
                <div class="form-group">
                    <label class="etiqueta frase2">Password</label>
                    <input type="password" class="form-control" placeholder="**********" require name="password"/>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>