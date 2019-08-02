@extends("panel.template")

@section("contenido")

    <div class="row nov">
        <div class="container-fluid">
            <h4 class="titulo text-center display-4">Cargar Nuevo y Editar</h4>
        </div>
    </div>

    <div class="container">
        @if(count($errors))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-6 offset-3">
                    @if(isset($user))
                    <form action="{{route("user.update",$user->id)}}" enctype="multipart/form-data" method="POST" class=" p-3">
                        @method("PUT")
                        @else
                            <form action="{{ route("user.store") }}" enctype="multipart/form-data" method="POST" class="bg-light p-3">
                        @endif
                        @csrf
                                <div class="form-group">
                                    <label class="text-white" for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del Usuario" value="{{isset($user)? $user->name : old('name')}}">
                                </div>

                                <div class="form-group">
                                    <label class="text-white"  for="mail">E-mail</label>
                                    <input type="text" name="mail" id="mail" class="form-control" placeholder="Ingrese el E-mail" value="{{isset($user)? $user->email : old('email')}}">
                                </div>

                             <!--
                                <div class="form-group">
                                    <label class= "text-white" for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>*/
                                  -->
                                <div  class="form-group">
                                    <label class="text-white" for="user">User</label>
                                    <input type="text" name="user" id="user" class="form-control" placeholder="Ingrese el User" value="{{isset($user)? $user->user : old('user')}}">
                                </div>
                             <!--
                               <div class="form-group">
                                    <label class="text-white">Perfil</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                    <label class="form-check-label text-white" for="inlineRadio1">1</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                    <label class="form-check-label text-white" for="inlineRadio2">2</label>
                                </div>*/
                               -->

                                <button type="submit" class="btn btn-primary">Cargar</button>
                            </form>
            </div>
        </div>

    </div>


@endsection