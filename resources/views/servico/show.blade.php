@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$servico->nome}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">VALOR</th>
                        <th scope="col">EMPREGADO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$servico->id}}</td>
                        <td>{{$servico->nome}}</td>
                        <td>{{$servico->valor}}</td>
                        <td>{{$servico->empregado->nome}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("servico.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
