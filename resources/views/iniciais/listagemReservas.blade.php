@extends('../base/padrao')

@section('content')
    <div class="row p-5 justify-content-center col-12">
        @foreach($reservas as $reserva)
            <div class="d-flex col-10 bg-white shadow p-3 px-5 rounded mt-4">
                <div class="border ">
                    <img src="{{asset($reserva->quarto->foto)}}" style="height: 300px; width: 400px">
                </div>

                <div class="d-flex flex-column justify-content-center col-8">
                    <div class="text-center font-weight-bold h3">
                        {{$reserva->quarto->tipo->nome}}
                    </div>
                    <div class="d-inline mt-3 ml-4">
                        <p class="h5">
                            <i class="fa-solid fa-bed mr-2"></i>{{$reserva->quarto->tipo->cama_extra ? 'cama extra' : 'sem cama extra'}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-hotel mr-2"></i> {{$reserva->quarto->hotel->nome}}
                        </p>

                        <p class="h5">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            {{$reserva->quarto->hotel->endereco->cidade}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-money-check-dollar mr-2"></i>  {{number_format($reserva->quarto->tipo->preco->valor, 2, ',', '')}} reais
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-calendar mr-2"></i>De {{$reserva->data_check_in}} à {{$reserva->data_check_out}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-check mr-2"></i>Reservado em {{$reserva->data_reserva}}
                        </p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
