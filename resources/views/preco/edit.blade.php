@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$preco->hotel->nome}} | R${{$preco->valor}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('preco.update',['preco'=> $preco->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group bg-light p-2 rounded row col-12 d-flex justify-content-start">
                <label for="cep">Valor:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o valor da diária" name="valor"
                       value="{{$preco->valor}}" required>

                <label for="bairro">Hotel:</label>
                <select class="form-control" id="tipo" name="id_hotel">
                    <option id="op1" value="{{$preco->hotel->id}}"> {{$preco->hotel->nome }} </option>
                    @foreach($hoteis as $hotel)
                        <option id="op1" value="{{$hotel->id}}"> {{$hotel->nome }}</option>
                    @endforeach
                </select>

                <label for="bairro">tipo de Quarto:</label>
                <select class="form-control" id="tipo" name="id_tipo">
                    <option id="op1" value="{{$preco->tipo->id}}"> {{$preco->tipo->nome}} </option>
                    @foreach($tipoQuartos as $tipo)
                        <option id="op1" value="{{$tipo->id}}"> {{$tipo->nome }}</option>
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
