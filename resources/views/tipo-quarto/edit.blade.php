@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$tipoQuarto->nome}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('tipo-quarto.update',['tipo_quarto'=> $tipoQuarto->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group bg-light p-2 rounded">
                <label for="cep">Nome:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o nome" name="nome"
                       value="{{$tipoQuarto->nome}}" required>

                <div class="col-12 d-flex justify-content-start ml-2 mt-4">
                    <input class="form-check-input" type="checkbox" name="cama_extra" {{$tipoQuarto->cama_extra? 'checked' : ''}}>
                    <label class="form-check-label">
                        Permitir Cama extra ?
                    </label>
                </div>


                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("tipo-quarto.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
