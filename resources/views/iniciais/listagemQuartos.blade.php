@extends('../base/padrao')

@section('content')
    <div class="row p-5 justify-content-center col-12">
        @foreach($quartos as $quarto)
            <div class="row col-10 bg-white shadow p-3 px-5 rounded mt-4">
                <div class="d-flex col-10">
                    <div class="border">
                        <img src="{{asset("$quarto->foto")}}" style="height: 300px; width: 400px">
                    </div>

                    <div class="d-flex flex-column justify-content-center col-8">
                        <div class="text-center font-weight-bold h3">
                            {{$quarto->tipo->nome}}
                        </div>
                        <div class="d-inline mt-3 ml-4">
                            <p class="h5">
                                <i class="fa-solid fa-bed mr-2"></i>{{$quarto->tipo->cama_extra ? 'cama extra' : 'sem cama extra'}}
                            </p>

                            <p class="h5">
                                <i class="fas fa-concierge-bell mr-2"></i>Serviços disponíveis
                            </p>

                            <p class="h5">
                                <i class="fa-solid fa-hotel mr-2"></i> {{$quarto->hotel->nome}}
                            </p>

                            <p class="h5">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                {{$quarto->hotel->endereco->cidade}}
                            </p>

                            <p class="h5">
                                <i class="fa-solid fa-money-check-dollar mr-2"></i> {{number_format($quarto->tipo->preco->valor, 2, ',', '')}}
                            </p>
                        </div>
                        <button class="btn btn-outline-primary mt-2 mr-5" type="button" data-toggle="collapse"
                                data-target="#collapseExample{{$loop->index}}" aria-expanded="false"
                                aria-controls="collapseExample"><i class="fa-solid fa-book-open"></i> RESERVAR
                        </button>
                    </div>
                </div>
                <div class="collapse mt-2 col-12" id="collapseExample{{$loop->index}}">
                    <div class="card card-body">
                        <form action="{{route('reservar')}}" method="post">
                            @csrf
                            <div class="d-flex">
                                <div class="col-5">
                                    <label for="cep">Data Entrada:</label>
                                    <input type="date" class="form-control" id="cep"
                                           placeholder="Insira a data de entrada"
                                           name="data_check_in"
                                           required>
                                </div>
                                <div class="col-5">
                                    <label for="rua">Data saida:</label>
                                    <input type="date" class="form-control" id="rua"
                                           placeholder="Insira a data de saída"
                                           name="data_check_out">
                                </div>

                                <div class="form-control text-left mt-4 ">

                                    <input class="form-check-input ml-1" type="checkbox" name="pago">
                                    <label class="form-check-label ml-4">
                                        Deixar pago ?
                                    </label>

                                    <input type="hidden" value="{{$quarto->id}}" name="id_quarto">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-outline-primary mt-3 col-12">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
