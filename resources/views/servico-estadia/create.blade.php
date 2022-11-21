@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVO SERVIÇO ESTADIA:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('servico-estadia.store')}}" method="post">
            @csrf
            <div class="form-group bg-light p-2 rounded row col-12 d-flex justify-content-start">
                <label for="bairro">Serviço:</label>
                <select class="form-control" id="tipo" name="id_servico">
                    @foreach($servicos as $servico)
                        <option id="op1" value="{{$servico->id}}"> {{$servico->nome}}</option>
                    @endforeach
                </select>

                <label for="numero">Estadia:</label>
                <select class="form-control" id="tipo" name="id_estadia">
                    @foreach($estadias as $estadia)
                        <option id="op1" value="{{$estadia->id}}"> {{$estadia->cliente->nome}} no quarto {{$estadia->quarto->numero}}, hospedado em {{$estadia->quarto->hotel->nome}}</option>
                    @endforeach
                </select>

                <label for="cep">Data e hora:</label>
                <input type="datetime-local" class="form-control" id="cep" placeholder="Insira a data de entrada" name="data_hora"
                       required>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("servico-estadia.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
