@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$hotel->nome}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        @if($hotel->endereco)
                            <th scope="col">ENDEREÇO</th>
                        @endif
                        <th scope="col">TELEFONE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$hotel->id}}</td>
                        <td>{{$hotel->nome}}</td>
                        @if($hotel->endereco)
                            <td>{{$hotel->endereco->rua}} | {{$hotel->endereco->bairro}}</td>
                        @endif
                        <td>{{$hotel->fone}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("hotel.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
