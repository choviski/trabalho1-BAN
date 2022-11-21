@extends('../base/padrao')

@section('content')
    <div class="row p-5 justify-content-center col-12">
        @foreach($estadias as $estadia)
            <div class="d-flex col-10 bg-white shadow p-3 px-5 rounded mt-4">
                <div class="border ">
                    <img src="{{asset($estadia->quarto->foto)}}" style="height: 300px; width: 400px">
                </div>

                <div class="d-flex flex-column justify-content-center col-8">
                    <div class="text-center font-weight-bold h3">
                        {{$estadia->quarto->tipo->nome}}
                    </div>
                    <div class="d-inline mt-3 ml-4">
                        <p class="h5">
                            <i class="fa-solid fa-bed mr-2"></i>{{$estadia->quarto->tipo->cama_extra ? 'cama extra' : 'sem cama extra'}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-hotel mr-2"></i> {{$estadia->quarto->hotel->nome}}
                        </p>

                        <p class="h5">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            {{$estadia->quarto->hotel->endereco->cidade}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-money-check-dollar mr-2"></i> {{number_format($estadia->quarto->tipo->preco->valor, 2, ',', '')}} reais
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-calendar mr-2"></i>De {{$estadia->data_check_in}} à {{$estadia->data_check_out}}
                        </p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
