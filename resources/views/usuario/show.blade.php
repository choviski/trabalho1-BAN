@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$usuario->login}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">LOGIN</th>
                        <th scope="col">SENHA</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TIPO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->login}}</td>
                        <td>{{$usuario->senha}}</td>
                        <td>{{$usuario->email}}</td>
                        @if($usuario->tipo == 1)
                            <td>Administrador</td>
                        @endif
                        @if($usuario->tipo == 2)
                            <td>Cliente</td>
                        @endif
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("usuario.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
