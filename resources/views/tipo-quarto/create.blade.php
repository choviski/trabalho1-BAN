@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVO TIPO DE QUARTO:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('tipo-quarto.store')}}" method="post">
            @csrf
            <div class="form-group bg-light p-2 rounded">

                <div class="d-flex">
                    <div class="d-flex mr-4 col-9">
                        <label class="mt-2" for="cep">Nome:</label>
                        <input type="text" class=" ml-2 form-control" id="cep" placeholder="Insira o nome do tipo de quarto"
                               name="nome" required>
                    </div>
                    <div class="mt-2">
                        <input class="form-check-input" type="checkbox" name="cama_extra">
                        <label class="form-check-label">
                            Permitir Cama extra ?
                        </label>
                    </div>
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
