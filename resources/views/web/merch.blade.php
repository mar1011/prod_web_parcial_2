@extends("web.template")

@section("contenido")
<!-- ASIDE -->
<div class="container">
    <aside class="info col d-none d-lg-block">
        <span class="badge badge-dark"> <a href="#"><img src="{{asset("img/shopping-cart (1).png")}}" alt="Comprar" width="30" ></a> Carrito (0)</span></aside>
</div>

<!--TÍTULO -->
<div class="row nov">
    <div class="container-fluid">
        <h2 class="titulo text-center display-4">Merch</h2>
    </div>
</div>

<!--IMÁGENES -->
<section>

    <div class="container">

        <div class="card-columns">

            @foreach($merchs as $m => $listamerch)

            <div class="card bg-dark mb-3 ">
                <img class="card-img-top" src="{{$listamerch->imagen}}" alt="{{$listamerch->nombre}}" class="card-img-top">
                <div class="card-body frase2">
                <h6 class="card-title">{{$listamerch->nombre}}</h6>
                <p class="card-text">Precio: ${{$listamerch->precio}}</p>
                    @if($listamerch->stock)
                    <a href="#" class="btn btn-success">Comprar</a>
                    @else
                        <button type="button" class="btn btn-danger">No disponible</button>
                    @endif
                </div>
            </div>




            @endforeach
        </div>
        </div>
    </div>

</section>

@endsection