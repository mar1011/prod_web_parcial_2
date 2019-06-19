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

            <div class="card">
                <img  src="{{$listamerch->imagen}}" alt="{{$listamerch->nombre}}" class="card-img-top">

            </div>

            <div>
                <p class="frase">{{$listamerch->nombre}}</p>
                <p class="frase">Precio: ${{$listamerch->precio}}</p>
            </div>
                @if($listamerch->stock)
            <a href="#" class="book-room-btn btn bg-success-btn">Comprar</a>
            @else
            <span class="book-room-btn btn bg-danger palatin-btn">No disponible</span>            @endif


      @endforeach
        </div>
    </div>
</section>
@endsection