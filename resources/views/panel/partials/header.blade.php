<header>
    <!--NAVBAR-->
    <div class="row">
        <div class="container">

            <nav id="navegador" class="navbar navbar-fixed-top navbar-expand-lg  navbar-dark ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                    <ul class="nav justify-content-end">

                        <li class="nav-item active">

                            <a class=" nav-link" href="{{route("panel.index")}}">Panel</a>
                            <a class=" nav-link" href="{{route("merch.index")}}"> Lista Merch</a>
                            <a class=" nav-link" href="{{route("user.index")}}"> Lista Usuarios</a>


                        </li>
                        <ul class="navbar-nav mr-0">
                            <li class="nav-item">
                                <a class="nav-link"href="{{route("web.index")}}">Inicio</a>
                            </li>
                        </ul>
                    </ul>
                           <!-- <ul class="navbar-nav mr-0">
                                <li class="nav-item">
                            <a class=" nav-link" href="#">Perfil</a>
                            <a class=" nav-link" href="#">Logout</a>
                        </li>
                    </ul> -->
                </div>
        </div>
        </nav>
    </div>
    </div>
</header>