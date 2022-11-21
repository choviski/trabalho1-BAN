@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$preco->hotel->nome}} | R$ {{$preco->valor}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">VALOR</th>
                        <th scope="col">HOTEL</th>
                        <th scope="col">QUARTO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$preco->id}}</td>
                        <td>{{$preco->valor}}</td>
                        <td>{{$preco->hotel->nome}}</td>
                        <td>{{$preco->tipo->nome}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("preco.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
