@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$endereco->rua}} | {{$endereco->bairro}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">RUA</th>
                        <th scope="col">BAIRRO</th>
                        <th scope="col">NÚMERO</th>
                        @if($endereco->complemento)
                            <th scope="col">COMPLEMENTO</th>
                        @endif
                        <th scope="col">CEP</th>
                        <th scope="col">CIDADE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$endereco->id}}</td>
                        <td>{{$endereco->rua}}</td>
                        <td>{{$endereco->bairro}}</td>
                        <td>{{$endereco->numero}}</td>
                        @if($endereco->complemento)
                            <td>{{$endereco->complemento}}</td>
                        @endif
                        <td>{{$endereco->cep}}</td>
                        <td>{{$endereco->cidade}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("endereco.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
