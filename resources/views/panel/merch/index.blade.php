
@extends("panel.template")

@section("contenido")



<div class="container">
    <div class="row nov">
        <div class="col-12">
            <h2 class="titulo text-center display-4">Lista de Merch</h2>

            <a href="{{ route("merch.create") }}" class="btn btn-lg btn-primary">Cargar Nuevo</a>
        </div>
    </div>

    <div class="row mt-2 mb-5">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table mt-5 nov table-dark">
                    <thead class="thead-light text-center">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Imagen</th>
                        <th>Elegir</th>

                    </tr>
                    </thead>
                    <tbody class="text-center">

                    @forelse($merchs as $merch)
                        <tr>
                            <td>{{ $merch->nombre }}</td>
                            <td>{{ $merch->descripcion }}</td>
                            <td>${{ $merch->precio }}</td>
                            <td> {{ $merch->stock }}</td>
                            <td><img src="{{ $merch->imagen }}" alt="{{ $merch->nombre }}" width="200"></td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-info dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Acciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item"
                                           href="{{ route("merch.edit",$merch->id) }}">Editar</a>
                                        <form action="{{ route("merch.destroy",$merch->id) }}" method="post">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="dropdown-item">Borrar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No hay productos cargados</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
