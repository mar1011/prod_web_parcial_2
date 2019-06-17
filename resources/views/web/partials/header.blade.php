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
                     @foreach($nav as $ind => $boton)
                    <li class="nav-item active">
                    <a class=" nav-link" href="{{ $boton }}">{{ $ind }}</a>
                    </li>
                    @endforeach
                    </ul>
                <ul class="navbar-nav mr-0">
                    <li class="nav-item">
                        <a class="nav-link"href="{{ route("panel.index") }}">Panel</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>