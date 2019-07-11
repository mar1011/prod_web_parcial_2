<header>
    <!--NAVBAR-->
    <div class="row">
        <div class="container">
            <nav id="navegador" class="navbar navbar-fixed-top navbar-expand-lg  navbar-dark ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav container">

                    <li class="nav-item active">
                    <a class=" nav-link" href="{{ route("web.index") }}">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class=" nav-link" href="{{ route("web.merch") }}">Merch</a>
                    </li>
                    <li class="nav-item active">
                        <a class=" nav-link" href="{{ route("web.contacto") }}">Contacto</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-0">

                    <li class="nav-item">
                         <a class="nav-link"href="{{route("panel.index")}}">Panel - {{ Auth::user()->user_name }}</a>
                    </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>