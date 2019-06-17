@extends("web.template")
@section("contenido")

    <!--TÍTULO-->
    <div class="row">
        <div class="container">
            <h1 class="text-center nov display-4">Contacto</h1>
        </div>
    </div>
    <!--<div id="bloque"></div>-->
    <section>
        <!--INFO-->
        <div class="container seccion" >
            <div class="row">
                <div class="frase2 col-md-6">
          <span>
          <h2><b>Contrataciones</b></h2>
          <h4>Pablo Ferrando</h4>
          <p>ahijunarecords@gmail.com <br> +54 911 67667466</p>
        </span><br>
        <span class="contacto">
          <h2><b>Contacto de la Banda</b> </h2>
          <h4>Martín Bobrik</h4>
          <p>angrybullys@gmail.com <br> +54 911 3146 0592 <br> FB: Angry Zeta</p>
        </span>

                </div>
                <!--FORMULARIO-->

                <div class=" col-md-6 ">

        <form class="formulario" action="#" method="post">
            <div class="form-group">
                <span class="etiqueta">Nombre:</span> <br>
                <input type="text" name="nombre" class="form-control" > <br>


                <span class="etiqueta">Apellido:</span> <br>
                <input type="text" name="apellido" class="form-control"> <br>


                <span class="etiqueta">Mail:</span> <br>
                <input type="email" name="correo" placeholder="ejemplo@ejemplo.com" class="form-control"> <br>

                <span class="etiqueta">Mensaje:</span> <br>
                <textarea name="mensaje"  rows="3"  class="form-control" ></textarea> <br>

                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="opcion[]" type="checkbox" value="Europa"> Deseo recibir novedades de la Gira por Europa
                    </label>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="opcion[]" type="checkbox" value="Buenos Aires"> Deseo recibir novedades de fechas en Buenos Aires
                    </label>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="opcion[]" type="checkbox" value="Merch"> Deseo recibir novedades de merchandising
                    </label>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="opcion[]" type="checkbox" value="Newsletter"> Deseo suscribirme al  Newsletter de Angry Zeta
                    </label>
                </div>
                <button class="etiqueta btn btn-light">Enviar</button>

            </div>
        </form>
    </div>
</div>
</div>
</section>

@endsection
