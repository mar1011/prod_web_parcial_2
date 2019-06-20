@extends("web.template")

@section("contenido")

    <!--SLIDE-->
    <article id="slide">
        <div class="container-fluid">
            <div class="container">
                <img id="slide" class="img-fluid" src="{{asset("img/slide.jpg")}}" alt="Portada de Angry Zeta" width="100%" height="auto">
            </div>
        </div>
    </article>
    <!--INFO-->
    <article class="nov">
        <div class="container seccion">
            <div class= "row">
                <div class= "col-md-6">
                    <!--IZQ-->
                    <h1>¡Bienvenido a <br>nuestro sitio!</h1>
                    <p><span>Mantenete informado, sobre las novedades de "Angry Zeta & The Hillbullys". Pronto
                     subiremos información sobre nuestra primera Gira por Europa 2018. Podés aprovechar también para ver
                     todo nuestro merchandising que tenemos disponible.
                 </span></p>
                </div>
                <!--DER-->
                <div class= "col-md-6">
                    <h1>¡Escuchá nuestro<br>nuevo album!</h1>
                    <div class="row">
                        <div class="col-md-3 ">
                            <img id="cd" class="img-fluid" src="{{asset("img/cd_nuevo.jpg")}}" alt="Cd de Angry Zeta" width="200"  >
                        </div>
                        <div class="col-md-3">
                            <p class="texto">Escuchá el "Disco en Vivo", con rotura de cuerda y más. </p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </article>
    <article id="flyer" class="nov">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <img class="img-fluid" src="{{asset("img/gira3.jpg")}}" alt="Flyer de Gira" width="500" >
                </div>

                <div class="col-md-6">
                    <div class="container">

                        <img class="img-fluid" src="img/flyer.jpg" alt="Flyer de Gira" width="500" >
                    </div>
                </div>
            </div>
        </div>
        </div>
    </article>
@endsection