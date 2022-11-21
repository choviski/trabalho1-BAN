@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$cliente->nome}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('cliente.update',['cliente'=> $cliente->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group bg-light p-2 rounded row col-12 d-flex justify-content-start">
                <label for="cep">Nome:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o nome" name="nome"
                       value="{{$cliente->nome}}" required>

                <label for="rua">Telefone:</label>
                <input type="text" class="form-control" id="rua" placeholder="Insira a telefone" name="fone"
                       value="{{$cliente->fone}}" required>

                <label for="bairro">Endereço:</label>
                <select class="form-control" id="tipo" name="id_endereco">
                    @if($cliente->endereco)
                        <option id="op1" value="{{$cliente->endereco->id}}"> {{$cliente->endereco->rua }}
                            | {{$cliente->endereco->bairro}}</option>
                    @endif
                    @foreach($enderecos as $endereco)
                        <option id="op1" value="{{$endereco->id}}"> {{$endereco->rua }} | {{$endereco->bairro}}</option>
                    @endforeach
                </select>

                <label for="bairro">Usuario:</label>
                <select class="form-control" id="tipo" name="id_usuario">
                    @if($cliente->usuario)
                        <option id="op1" value="{{$cliente->usuario->id}}"> {{$cliente->usuario->login }}
                            | {{$cliente->usuario->email}}</option>
                    @endif
                    @foreach($usuarios as $usuario)
                        <option id="op1" value="{{$usuario->id}}"> {{$usuario->login }} | {{$usuario->email}}</option>
                    @endforeach
                </select>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("cliente.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
