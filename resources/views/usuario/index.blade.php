@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">USUÁRIOS:</p>
    </div>

    <div class="col-12">
        <ul class="list-group">
            @foreach($usuarios as $usuario)
                <li class="list-group-item align-items-center d-flex justify-content-between mt-2">ID #{{$usuario->id}}
                    |
                    @if($usuario->cliente)
                        Nome: {{$usuario->cliente->nome}} | Email: {{$usuario->email}}
                    @else
                        Login: {{$usuario->login}} | Email: {{$usuario->email}}
                    @endif

                    <span class="d-flex">
                            <form method="get"
                                  action="{{Route("usuario.show",['usuario'=>$usuario->id])}}">
                                @csrf
                                 <button class="btn btn-outline-dark mr-1"> <i class="fas fa-eye"></i></button>
                            </form>
                        <form method="get" action="{{Route("usuario.edit",['usuario'=>$usuario->id])}}">
                            @csrf
                            <button class="btn btn-outline-dark mr-1"> <i class="far fa-edit"></i> </button>
                        </form>
                        <form method="post" action="{{Route("usuario.remover",['id'=>$usuario->id])}}"
                              onsubmit="return confirm('Tem certeza que deseja excluir o usuário cujo email é {{$usuario->email}} ?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-dark"><i class="fas fa-trash" alt="Deletar"></i></button>
                        </form>
                        </span>
                </li>
            @endforeach

            <a href="{{route("cadastros")}}" class="btn btn btn-outline-dark mt-2"><i
                    class="fas fa-arrow-left"></i>
                Voltar
            </a>
        </ul>
    </div>
@endsection
