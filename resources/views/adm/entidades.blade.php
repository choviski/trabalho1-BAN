@extends('../base/adm')

@section('content')

    <style>
        #warpMoreOptions {
            position: fixed;
            bottom: 0%;
            width: 100%;
            height: 40px;
            padding: 0px;

        }

        .card:hover {
            cursor: pointer;
        }

        .options {
            display: none;
        }

        .pop-in {
            animation: pop-in 200ms ease;
        }

        @keyframes pop-in {
            0% {
                opacity: 0;
                transform: translateY(-110px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
                color: black;
            }
        }
    </style>
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">GERENCIAR ENTIDADES:</p>
    </div>

    <div class="container-fluid mb-3 mt-5">
        <div class="row text-center d-flex justify-content-between">
            <a href="{{route("endereco.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Endereços</h4>
                </div>
            </a>

            <a href="{{route("usuario.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-solid fa-user fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Usuários</h4>
                </div>

            </a>

            <a href="{{route("cliente.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-solid fa-user-tie fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Clientes</h4>
                </div>

            </a>

            <a href="{{route("quarto.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fas fa-bed fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Quartos</h4>
                </div>

            </a>

            <a href="{{route("tipo-quarto.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-sharp fa-solid fa-door-open fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Tipo Quartos</h4>
                </div>

            </a>

            <a href="{{route("preco.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-solid fa-money-check-dollar fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Preços</h4>
                </div>

            </a>

            <a href="{{route("reserva.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-solid fa-calendar fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Reservas</h4>
                </div>

            </a>

            <a href="{{route("estadia.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-solid fa-briefcase fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Estadias</h4>
                </div>

            </a>

            <a href="{{route("servico.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fas fa-concierge-bell fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Serviços</h4>
                </div>

            </a>

            <a href="{{route("empregado.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-sharp fa-solid fa-users fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Empregados</h4>
                </div>

            </a>

            <a href="{{route("hotel.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-solid fa-hotel fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Hoteis</h4>
                </div>

            </a>

            <a href="{{route("servico-estadia.index")}}" class="col-md-4 col-sm-12 mt-3 text-decoration-none">
                <div
                    class="col-10 rounded text-center shadow-md border-secondary card btn btn-outline-secondary rounded"
                    style="height: 100px">
                    <i class="fa-solid fa-cart-flatbed-suitcase fa-2x"></i>
                    <h4 class="mt-2 text-decoration-underline">Serviço / Estadia</h4>
                </div>

            </a>
        </div>

        <a style="text-decoration: none" href="{{route('welcome')}}">
            <button class="btn-block btn-outline-dark rounded mt-5">Voltar</button>
        </a>
    </div>

@endsection
