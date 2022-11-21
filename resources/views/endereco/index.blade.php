@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">ENDEREÇOS:</p>
    </div>

    <div class="col-12">
        <div class="row d-flex justify-content-end bg-white px-3 py-1">
            <form method="get" action="{{route("endereco.create")}}">
                @csrf
                <button class="btn btn btn-outline-light mt-2  border-dark text-dark">
                    Adicionar Endereço
                    <i class="far fa-plus"></i>

                </button>
            </form>
        </div>
        <ul class="list-group">
            @foreach($enderecos as $endereco)
                <li class="list-group-item align-items-center d-flex justify-content-between mt-2">ID #{{$endereco->id}}
                    |
                    Rua: {{$endereco->rua}} | Bairro: {{$endereco->bairro}}
                    <span class="d-flex">
                            <form method="get"
                                  action="{{Route("endereco.show",['endereco'=>$endereco->id])}}">
                                @csrf
                                 <button class="btn btn-outline-dark mr-1"> <i class="fas fa-eye"></i></button>
                            </form>
                        <form method="get" action="{{Route("endereco.edit",['endereco'=>$endereco->id])}}">
                            @csrf
                            <button class="btn btn-outline-dark mr-1"> <i class="far fa-edit"></i> </button>
                        </form>
                        <form method="post" action="{{Route("endereco.remover",['id'=>$endereco->id])}}"
                              onsubmit="return confirm('Tem certeza que deseja excluir {{$endereco->rua}}, {{$endereco->bairro}} ?')">
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
