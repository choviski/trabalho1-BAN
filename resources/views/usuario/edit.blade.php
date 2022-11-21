@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVO USUÁRIO:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('usuario.update',['usuario'=>$usuario->id])}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group bg-light p-2 rounded">
                <label for="login">Login:</label>
                <input type="text" class="form-control" id="nome" placeholder="Insira o seu login" name="login"
                       value="{{$usuario->login}}" required>

                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" name="senha"
                       value="{{$usuario->senha}}" required>

                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Insira o seu email" name="email"
                       value="{{$usuario->email}}" required>

                <label for="tipo">Tipo de usuário:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    @if($usuario->tipo == 1)
                        <option id="op1" value="{{$usuario->tipo}}"> Administrador</option>
                        <option id="op1" value="2"> Cliente</option>
                    @else
                        <option id="op1" value="{{$usuario->tipo}}"> Cliente</option>
                        <option id="op1" value="2"> Administrador</option>
                    @endif
                </select>
            </div>
            <input type="submit" class="btn btn-outline-dark mt-3 col-12">

        </form>
        <a href="{{route("usuario.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
