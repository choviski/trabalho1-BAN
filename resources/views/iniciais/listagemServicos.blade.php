@extends('../base/padrao')

@section('content')
    <div class="row p-5 justify-content-center col-12 ">
        @foreach($servicos as $servico)
            <div class="d-flex col-10 bg-white shadow p-3 px-5 rounded mt-4">
                <div class="rounded-full mt-5">
                    <img src="{{asset("imagens/servico.png")}}" style="width: 100px">
                </div>

                <div class="d-flex flex-column justify-content-center col-8">
                    <div class="text-center font-weight-bold h3">
                        {{$servico->servico->nome}}
                    </div>
                    <div class="d-inline mt-3 ml-5">
                        <p class="h5">
                            <i class="fa-solid fa-user mr-2"></i>Empregado: {{$servico->servico->empregado->nome}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-bed mr-2"></i>Quarto: {{$servico->estadia->quarto->tipo->nome}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-money-check-dollar mr-2"></i> {{number_format($servico->servico->valor, 2, ',', '')}}
                        </p>

                        <p class="h5">
                            <i class="fa-solid fa-calendar mr-2"></i>
                            Data e hora: {{$servico->data_hora}}
                        </p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
