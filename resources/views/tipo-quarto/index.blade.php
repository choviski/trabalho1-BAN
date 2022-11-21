@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">TIPOS DE QUARTOS:</p>
    </div>

    <div class="col-12">
        <div class="row d-flex justify-content-end bg-white px-3 py-1">
            <form method="get" action="{{route("tipo-quarto.create")}}">
                @csrf
                <button class="btn btn btn-outline-light mt-2  border-dark text-dark">
                    Adicionar tipo de quarto
                    <i class="far fa-plus"></i>

                </button>
            </form>
        </div>
        <ul class="list-group">
            @foreach($tipoQuartos as $tipoQuarto)
                <li class="list-group-item align-items-center d-flex justify-content-between mt-2">ID #{{$tipoQuarto->id}}
                    |
                    Nome: {{$tipoQuarto->nome}}
                    <span class="d-flex">
                            <form method="get"
                                  action="{{Route("tipo-quarto.show",['tipo_quarto'=>$tipoQuarto->id])}}">
                                @csrf
                                 <button class="btn btn-outline-dark mr-1"> <i class="fas fa-eye"></i></button>
                            </form>
                        <form method="get" action="{{Route("tipo-quarto.edit",['tipo_quarto'=>$tipoQuarto->id])}}">
                            @csrf
                            <button class="btn btn-outline-dark mr-1"> <i class="far fa-edit"></i> </button>
                        </form>
                        <form method="post" action="{{Route("tipo-quarto.remover",['id'=>$tipoQuarto->id])}}"
                              onsubmit="return confirm('Tem certeza que deseja excluir o tipo de quarto {{$tipoQuarto->nome}} ?')">
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
