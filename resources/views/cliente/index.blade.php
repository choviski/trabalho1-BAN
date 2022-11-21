@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">CLIENTES:</p>
    </div>

    <div class="col-12">
        <div class="row d-flex justify-content-end bg-white px-3 py-1">
            <form method="get" action="{{route("cliente.create")}}">
                @csrf
                <button class="btn btn btn-outline-light mt-2  border-dark text-dark">
                    Adicionar Cliente
                    <i class="far fa-plus"></i>

                </button>
            </form>
        </div>
        <ul class="list-group">
            @foreach($clientes as $cliente)
                <li class="list-group-item align-items-center d-flex justify-content-between mt-2">ID #{{$cliente->id}}
                    |
                    Nome: {{$cliente->nome}} | Telefone: {{$cliente->fone}}
                    <span class="d-flex">
                            <form method="get"
                                  action="{{Route("cliente.show",['cliente'=>$cliente->id])}}">
                                @csrf
                                 <button class="btn btn-outline-dark mr-1"> <i class="fas fa-eye"></i></button>
                            </form>
                        <form method="get" action="{{Route("cliente.edit",['cliente'=>$cliente->id])}}">
                            @csrf
                            <button class="btn btn-outline-dark mr-1"> <i class="far fa-edit"></i> </button>
                        </form>
                        <form method="post" action="{{Route("cliente.remover",['id'=>$cliente->id])}}"
                              onsubmit="return confirm('Tem certeza que deseja excluir o cliente {{$cliente->nome}} ?')">
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
