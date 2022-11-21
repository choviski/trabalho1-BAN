<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/906fb26f32.js" crossorigin="anonymous"></script>

    <title>Hotel de Hilbert</title>
    <style>
        /* BACKGROUND */
        body {
            width: 100%;
            height: 100%;
            background-image: url({{asset('/imagens/background.png')}});
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        @media screen and (min-width: 250px) {
            #warp-body {
                margin-top: 200px;
            }
        }

        @media screen and (min-width: 1280px) {
            #warp-body {
                margin-top: 0px;
            }
        }
    </style>
</head>
<div
    style="width:100%;height:100%;background-color: rgba(255,255,255,0.8);position: fixed;left: 0px;display: none; z-index: 10000;background-repeat: no-repeat; background-size: cover"
    class="p-2" id="divFullscreen">
    <button id="exitFullscreen" class="btn btn-outline-primary mt-3" style="position: absolute;z-index: 20000"><i
            class="fas fa-times fa-2x"></i></button>
    <img id="imagemFullscreen" src="" class="rounded bg-shadow" height="100%" width="auto">
</div>

<body class="container-fluid">
<header class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white col-12 " id="header">
        <a class="navbar-brand ml-2" href="#">
            <img src="{{asset("imagens/logo.png")}}" width="100" class="d-inline-block align-top "
                 alt="  Hotel de Hilbert">
        </a>
        <button class="navbar-toggler text-center" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center ml-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active ml-5">
                    <a class="nav-link font-weight-light " id="nav_empresas" style="font-size: 20px"
                       href="{{route("paginaInicial")}}">Quartos<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active ml-5">
                    <a class="nav-link font-weight-light " id="nav_soldadores" style="font-size: 20px"
                       href="{{route('listarReservas')}}">Reservas</a>
                </li>
                <li class="nav-item active ml-5">
                    <a class="nav-link font-weight-light" id="nav_eps" style="font-size: 20px"
                       href="{{route('listarServicos')}}">Serviços</a>
                </li>
                <li class="nav-item active ml-5">
                    <a class="nav-link font-weight-light" id="nav_eps" style="font-size: 20px"
                       href="{{route('listarEstadias')}}">Estadias</a>
                </li>
                <li>

                </li>
            </ul>
            <div class="form-inline d-flex justify-content-center my-2 my-lg-0 mt-0">
                <a href="{{route("sair")}}" class="btn btn-outline-danger my-2 my-sm-0" style="width:50px"
                   type="submit">Sair</a>
            </div>
        </div>

    </nav>

</header>
<div class="row">
    @yield('content')
</div>
</body>

</html>
