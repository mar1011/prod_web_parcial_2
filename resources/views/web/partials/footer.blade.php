<footer>
    <div class="row">
        <div class="container-fluid">
            <nav id="footer" class="navbar fixed-bottom col-lg-12 ">
                <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 d-none d-sm-block">
                        <p>©2018 Angry Zeta & The Hillbullys - Todos los derechos reservados</p>
                    </div>
                    <div id="redes" class="col-lg-6 col-md-6 col-sm-12">
                        <ul class="float-right">

                            @foreach($footer as $ind => $icono):

                            <li><a href="{{$icono["href"]}}
                                        " target="{{ $icono["target"]}}">
                                    <img src="{{$icono["img"]}}" alt="{{$icono["alt"]}}" width="{{$icono["width"]}}" title="{{$icono["title"]}}"></a>
                            </li>

                            @endforeach;

                        </ul>
                    </div>
                </div>
        </div>
    </div>
    </nav>
    </div>
    </div>
</footer>