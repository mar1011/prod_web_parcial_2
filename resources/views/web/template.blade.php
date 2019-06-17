<!doctype html>

<html lang="es">
<head>
    <title>Sitio Angry Zeta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet"  href="css/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    @yield("css")
</head>
<body class="fondo">
    @php
    $nav = [
        "Inicio" => route("web.index"),
        "Merch" =>route("web.merch"),
        "Galeria" =>route("web.galeria"),
        "Contacto"=>route("web.contacto")
       ];
    @endphp

    @include("web.partials.header",$nav)

    {{--Contenido--}}

    @yield("contenido")

    @include("web.partials.footer")

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

@yield("js")
</body>
</html>