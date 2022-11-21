@extends('base/iniciais')

@section('content')
    <div class="mt-2 p-2 rounded bg-white border border-dark shadow text-center">
        <form action="{{route('login')}}" method="get" class="form-group ">
            <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>
            <input type="password" name="senha" class="form-control mt-2" placeholder="Senha" required>
            <input type="submit" value="Entrar" class="btn-block btn-outline-dark rounded mt-2">
            @if($mensagem)
                <div class="alert alert-danger mt-2">
                    {{$mensagem}}
                </div>
                <a href="#" class="text-decoration-none text-dark">Esqueci minha senha</a>
            @endif
            @if($criado)
                <div class="alert alert-success mt-2">
                    {{$criado}}
                </div>
            @endif
        </form>
        <a href="{{route('usuario.create')}}">
            <button class="btn-block btn-outline-dark rounded">Cadastrar-se</button>
        </a>
    </div>
@endsection
