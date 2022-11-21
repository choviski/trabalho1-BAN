@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$hotel->nome}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('hotel.update',['hotel'=> $hotel->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group bg-light p-2 rounded">
                <label for="cep">Nome:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o nome" name="nome"
                       value="{{$hotel->nome}}" required>

                <label for="rua">Telefone:</label>
                <input type="text" class="form-control" id="rua" placeholder="Insira a telefone" name="fone"
                       value="{{$hotel->fone}}" required>

                <label for="bairro">Endereço:</label>
                <select class="form-control" id="tipo" name="id_endereco">
                    @if($hotel->endereco)
                        <option id="op1" value="{{$hotel->endereco->id}}"> {{$hotel->endereco->rua }}
                            | {{$hotel->endereco->bairro}}</option>
                    @endif
                    @foreach($enderecos as $endereco)
                        <option id="op1" value="{{$endereco->id}}"> {{$endereco->rua }} | {{$endereco->bairro}}</option>
                    @endforeach
                </select>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("hotel.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
