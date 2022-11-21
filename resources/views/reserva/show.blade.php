@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">Reserva de {{$reserva->cliente->nome}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">CLIENTE</th>
                        <th scope="col">QUARTO</th>
                        <th scope="col">HOTEL</th>
                        <th scope="col">DATA ENTRADA</th>
                        <th scope="col">DATA SAIDA</th>
                        <th scope="col">DATA RESERVA</th>
                        <th scope="col">ESTÁ PAGO ?</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$reserva->id}}</td>
                        <td>{{$reserva->cliente->nome}}</td>
                        <td>{{$reserva->quarto->tipo->nome}}</td>
                        <td>{{$reserva->quarto->hotel->nome}}</td>
                        <td>{{$reserva->data_check_in}}</td>
                        <td>{{$reserva->data_check_out}}</td>
                        <td>{{$reserva->data_reserva}}</td>
                        <td>{{$reserva->pago ? 'Sim' : 'Não'}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("reserva.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
