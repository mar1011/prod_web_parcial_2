@extends("panel.template")

@section("contenido")

    <div class="row nov">
        <div class="container-fluid">
            <h4 class="titulo text-center display-4">Cargar Nuevo</h4>
            @if($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row">


            <div class="col-6 offset-3">
                @if(isset($merch))
                <form action="{{route("merch.update",$merch->id)}}" enctype="multipart/form-data" method="POST" class=" p-3">
                    @method("PUT")
                    @else
                        <form action="{{ route("merch.store") }}" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                    @endif
                    @csrf
                    <div class="form-group">
                        <label  for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del producto" value="{{isset($merch)? $merch->nombre : old('nombre')}}">
                    </div>

                    <div class="form-group">
                        <label  for="descripcion">Descripción</label>
                        <textarea type="text" name="descripcion" id="descripcion" class="form-control" aria-describedby="help_descripcion" >{{isset($merch) ? $merch->descripcion : old('descripcion')}}</textarea>
                        <small id="help_descripcion" class="text-muted">Descripción breve del producto.</small>
                    </div>

                        <div  class="form-group">
                            <label  for="precio">Precio</label>
                            <input type="number" name="precio" id="precio" class="form-control" placeholder="Ingrese el precio del producto" value="{{isset($merch)? $merch->precio : old('precio')}}">
                        </div>

                            <div  class="form-group">
                                <label  for="precio">Stock</label>
                                <input type="number" name="stock" id="stock" class="form-control" placeholder="Cantidad de Stock" value="{{isset($merch)? $merch->stock : old('stock')}}">
                            </div>

                    @isset($merch)
                    <div class="form-group">
                        <label  for="imagen">Imagen</label>
                        <img src="{{ $merch->imagen }}" alt="" width="120">
                    </div>
                    @endif
                    <div>
                        <input type="file" accept="image/jpeg" class="form-control-file frase2" name="imagen" id="imagen" placeholder="" aria-describedby="help_imagen">
                        <small id="help_imagen" class="form-text text-muted">La imágen del producto debe ser en formato jpg</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Cargar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
