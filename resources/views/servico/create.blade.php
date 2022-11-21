@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVO SERVIÇO:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('servico.store')}}" method="post">
            @csrf
            <div class="form-group bg-light p-2 rounded">
                <label for="cep">Nome:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o nome do Serviço" name="nome"
                       required>

                <label for="rua">Valor:</label>
                <input type="number" step="0.01" class="form-control" id="rua" placeholder="Insira o valor do serviço" name="valor">

                <label for="bairro">Empregado:</label>
                <select class="form-control" id="tipo" name="id_empregado">
                    @foreach($empregados as $empregado)
                        <option id="op1" value="{{$empregado->id}}"> {{$empregado->nome}}</option>
                    @endforeach
                </select>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("servico.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
