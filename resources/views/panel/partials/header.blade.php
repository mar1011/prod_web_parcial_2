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

                            <a class=" nav-link" href="{{route("merch.index")}}">Merch</a>
                            <a class=" nav-link" href="#">Usuarios</a>
                        </li>
                    </ul>
                    <!-- desplegable-->
                    <ul class="navbar-nav mr-0">

                        <li class="nav-item dropleft">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Usuario
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Perfil</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>
    </div>
    </div>
</header>