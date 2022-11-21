@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">servico Estadia de {{$servicoEstadia->estadia->cliente->nome}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">SERVICO</th>
                        <th scope="col">CLIENTE</th>
                        <th scope="col">QUARTO</th>
                        <th scope="col">HOTEL</th>
                        <th scope="col">DATA E HORA</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$servicoEstadia->id}}</td>
                        <td>{{$servicoEstadia->servico->nome}}</td>
                        <td>{{$servicoEstadia->estadia->cliente->nome}}</td>
                        <td>{{$servicoEstadia->estadia->quarto->numero}}</td>
                        <td>{{$servicoEstadia->estadia->quarto->hotel->nome}}</td>
                        <td>{{$servicoEstadia->data_hora}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("servico-estadia.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
