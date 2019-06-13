
<header>
    <!--NAVBAR-->
    <div class="row">
        <div class="container-fluid">
            <nav id="navegador" class="navbar navbar-fixed-top navbar-expand-lg  navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav container">
                        <li class="nav-item active">
                            <?php
                            foreach($nav as $ind => $boton):
                                ?>
                                <a class=" nav-link" href="<?= $boton["ruta"] ?>"><?= $boton["nombre"] ?></a>

                            <?php
                            endforeach;
                            ?>
                    </ul>
                    <ul class="navbar-nav mr-0">

                        <?php
                        if(\Clases\Session::check()):
                            ?>

                            <!--                    <li class="nav-item">-->
                            <!--                        <span class="nav-link">--><?//=\Clases\Session::get("usuario")->getUsuario(); ?><!--</span>-->
                            <!--                    </li>-->

                        <?php
                        endif;
                        ?>

                        <?php
                        if(\Clases\Session::check()):
                            ?>

                            <li class="nav-item">
                                <a class="nav-link"href="logout.php">Logout</a>
                            </li>

                        <?php
                        else:
                            ?>

                            <li class="nav-item <?= !empty($_GET["page"]) && $_GET["page"] == "login" ? "active" : ""; ?>">
                                <a class="nav-link"href="index.php?page=4">Registrarse</a>
                            </li>
                            <li class="nav-item <?= !empty($_GET["page"]) && $_GET["page"] == "registro" ? "active" : ""; ?>">
                                <a class="nav-link"href="index.php?page=5">Login</a>
                            </li>
                        <?php
                        endif;
                        ?>
                    </ul>
                </div>

        </div>
        </nav>
        <!-- incluir los modulos -->
        <?php
        if(isset($_SESSION["login"])):

            ?>
            <div class="container">
                <div class=" mt-5 alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <p> Hola! te logueaste correctamente: <b><?= $_SESSION["usuario"]["usuario"] ?></b> </p>
                </div>
            </div>


        <?php
        endif;

        // tengo que borrar el indice "login" de la sesion
        unset($_SESSION["login"]);


        ?>

    </div>
    </div>
</header>