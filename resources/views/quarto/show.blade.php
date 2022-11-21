@extends('../base/adm')

@section('content')
    <div class="col-10 text-center text-white bg-dark shadow-sm rounded-bottom">
        <hr class="p-0 m-0 mb-1">
        <p class="lead p-1 m-0" style="font-size: 22px">{{$quarto->hotel->nome}} | {{$quarto->numero}}:</p>
    </div>

    <div class="row col-12 d-flex justify-content-center ">

        <div class="col-12">
            <div class="table-responsive">
                <table class="table rounded bg-white mt-2 col-12 shadow">
                    <thead class=" rounded">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ANDAR</th>
                        <th scope="col">NUMERO</th>
                        <th scope="col">HOTEL</th>
                        <th scope="col">TIPO QUARTO</th>
                        <th scope="col">FOTO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$quarto->id}}</td>
                        <td>{{$quarto->andar}}</td>
                        <td>{{$quarto->numero}}</td>
                        <td>{{$quarto->hotel->nome}}</td>
                        <td>{{$quarto->tipo->nome}}</td>
                        <td>
                            <div>
                                <img src="{{asset($quarto->foto)}}" width="100px" height="100px"
                                     class="rounded-circle border">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route("quarto.index")}}">
                <button class="btn btn-outline-dark mt-2"><i class="fas fa-arrow-left"></i> Voltar</button>
            </a>
        </div>
    </div>
@endsection
