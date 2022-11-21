@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVA ESTADIA:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('estadia.store')}}" method="post">
            @csrf
            <div class="form-group bg-light p-2 rounded row col-12 d-flex justify-content-start">
                <label for="cep">Data Entrada:</label>
                <input type="date" class="form-control" id="cep" placeholder="Insira a data de entrada" name="data_check_in"
                       required>

                <label for="rua">Data saida:</label>
                <input type="date" class="form-control" id="rua" placeholder="Insira a data de saída" name="data_check_out">

                <label for="bairro">Quarto:</label>
                <select class="form-control" id="tipo" name="id_quarto">
                    @foreach($quartos as $quarto)
                        <option id="op1" value="{{$quarto->id}}"> {{$quarto->tipo->nome}} em {{$quarto->hotel->endereco->cidade}}</option>
                    @endforeach
                </select>

                <label for="numero">Cliente:</label>
                <select class="form-control" id="tipo" name="id_cliente">
                    @foreach($clientes as $cliente)
                        <option id="op1" value="{{$cliente->id}}"> {{$cliente->nome}}</option>
                    @endforeach
                </select>
                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("estadia.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
