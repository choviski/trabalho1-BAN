@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVO PREÇO:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('preco.store')}}" method="post">
            @csrf
            <div class="form-group bg-light p-2 row col-12 d-flex justify-content-start rounded">
                <label for="cep">Valor (R$):</label>
                <input type="number" step="0.01" min="0.00" class="form-control mb-3" id="cep" placeholder="Insira o valor" name="valor"
                       required>

                <label for="bairro">Hotel:</label>
                <select class="form-control mb-3" id="tipo" name="id_hotel">
                    @foreach($hoteis as $hotel)
                        <option id="op1" value="{{$hotel->id}}"> {{$hotel->nome }}</option>
                    @endforeach
                </select>

                <label for="numero">Tipo de Quarto:</label>
                <select class="form-control mb-3" id="tipo" name="id_tipo">
                    @foreach($tipoQuartos as $tipoQuarto)
                        <option id="op1" value="{{$tipoQuarto->id}}"> {{$tipoQuarto->nome}}</option>
                    @endforeach
                </select>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("preco.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
