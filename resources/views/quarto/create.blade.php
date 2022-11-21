@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVO QUARTO:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('quarto.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group bg-light p-2 rounded row col-12 d-flex justify-content-start">
                <label for="cep">Numero:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o numero do quarto" name="numero"
                       required>

                <label for="cep">Andar:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o andar do quarto" name="andar"
                       required>

                <label  for="foto">Foto:</label>
                <input type="file" class="form-control" id="foto" placeholder="Insira a imagem do Quarto" name="foto" accept="image/jpeg,image/x-png,image/jpg">

                <label for="bairro">Hotel:</label>
                <select class="form-control" id="tipo" name="id_hotel">
                    @foreach($hoteis as $hotel)
                        <option id="op1" value="{{$hotel->id}}"> {{$hotel->nome}}</option>
                    @endforeach
                </select>

                <label for="numero">Tipo de Quarto:</label>
                <select class="form-control" id="tipo" name="id_tipo">
                    @foreach($tipos as $tipo)
                        <option id="op1" value="{{$tipo->id}}"> {{$tipo->nome}}</option>
                    @endforeach
                </select>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("quarto.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
