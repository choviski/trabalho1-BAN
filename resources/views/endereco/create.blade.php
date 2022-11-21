@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">NOVO ENDEREÇO:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center mt-2 ">
        <form  class="col-12 mt-2" action="{{Route('endereco.store')}}" method="post">
            @csrf
            <div class="form-group bg-light p-2 rounded">
                <label  for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Insira o CEP" name="cep" required>

                <label  for="rua">Rua:</label>
                <input type="text" class="form-control" id="rua" placeholder="Insira a rua" name="rua" required>

                <label  for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Insira o bairro" name="bairro" required>

                <label  for="numero">Número:</label>
                <input type="number" class="form-control" id="numero" placeholder="Insira o número" name="numero" required>

                <label  for="complemento">Complemento:</label>
                <input type="text" class="form-control" id="complemento" placeholder="Insira o complemento" name="complemento">

                <label for="id_cidade">Cidade:</label>
                <input type="text" class="form-control" id="complemento" placeholder="Insira a cidade" name="cidade" required>

                <input type="submit" class="btn btn-outline-dark mt-3 col-12">
            </div>
        </form>
        <a href="{{route("endereco.index")}}"><button class="btn btn-outline-light mt-2 text-dark border-dark"><i class="fas fa-arrow-left"></i> Voltar</button></a>
    </div>

@endsection
