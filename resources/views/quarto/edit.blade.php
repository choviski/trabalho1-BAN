@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$quarto->hotel->nome}} | {{$quarto->numero}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form class="col-12 mt-2" action="{{Route('quarto.update',['quarto'=> $quarto->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group bg-light p-2 rounded row col-12 d-flex justify-content-start" >
                <label for="cep">Numero:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o numero" name="numero"
                       value="{{$quarto->numero}}" required>

                <label for="rua">Andar:</label>
                <input type="text" class="form-control" id="rua" placeholder="Insira a andar" name="andar"
                       value="{{$quarto->andar}}" required>

                <label for="bairro">Hotel:</label>
                <select class="form-control" id="tipo" name="id_hotel">
                    <option id="op1" value="{{$quarto->hotel->id}}"> {{$quarto->hotel->nome }}
                    </option>
                    @foreach($hoteis as $hotel)
                        <option id="op1" value="{{$hotel->id}}"> {{$hotel->nome}}</option>
                    @endforeach
                </select>

                <label for="bairro">Tipo de Quarto:</label>
                <select class="form-control" id="tipo" name="id_tipo">
                    <option id="op1" value="{{$quarto->tipo->id}}"> {{$quarto->tipo->nome }}
                    </option>
                    @foreach($tipoQuartos as $tipo)
                        <option id="op1" value="{{$tipo->id}}"> {{$tipo->nome }} </option>
                    @endforeach
                </select>

                <div class="d-flex mt-3 col-12">
                    <div class="d-flex col-10 mr-3 mt-3">
                    <label class="mt-2 mr-1" for="foto">Foto:</label>
                    <input type="file" class="form-control" id="foto" placeholder="Insira a imagem do Quarto"
                           name="foto" accept="image/jpeg,image/x-png,image/jpg">
                    </div>
                    <div>
                        <img src="{{asset($quarto->foto)}}" width="100px" height="100px"
                             class="rounded-circle border">
                    </div>
                </div>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("quarto.index")}}">
            <button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar
            </button>
        </a>
    </div>

@endsection
