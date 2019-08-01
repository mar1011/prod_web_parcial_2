@extends("panel.template")

@section("contenido")

    <div class="container">
        <div class="row nov">
            <div class="col-12">
                <h2 class="titulo text-center display-4">Lista de Merch</h2>

                <a href="{{ route("user.create") }}" class="btn btn-lg btn-primary">Cargar Nuevo</a>
            </div>
        </div>

        <div class="row mt-2 mb-5">

            <div class="col-12">
                <div class="table-responsive">
                    <table class="table mt-5 nov table-dark">
                        <thead class="thead-light text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Mail</th>
                            <th>Password</th>
                            <th>User</th>
                            <th>Perfil</th>


                        </tr>
                        </thead>


@endsection