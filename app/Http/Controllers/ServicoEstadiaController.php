<?php

namespace App\Http\Controllers;

use App\Models\Estadia;
use App\Models\EstadiaHasServico;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoEstadiaController extends Controller
{

    public function index()
    {
        $servicosEstadias = EstadiaHasServico::all();

        return view('servico-estadia.index')->with(['servicoEstadias' => $servicosEstadias]);
    }

    public function create()
    {
        $estadias = Estadia::all();
        $servicos = Servico::all();

        return view('servico-estadia.create')->with(['estadias' => $estadias, 'servicos' => $servicos]);
    }

    public function store(Request $request)
    {
        EstadiaHasServico::create($request->all());

        return redirect()->route('servico-estadia.index');
    }

    public function show($id)
    {
        $estadiaServico = EstadiaHasServico::find($id);

        return view('servico-estadia.show')->with(['servicoEstadia' => $estadiaServico]);

    }

    public function edit($id)
    {
        $estadias = Estadia::all();
        $servicos = Servico::all();
        $servicoEstadia = EstadiaHasServico::find($id);

        return view('servico-estadia.edit')->with(['estadias' => $estadias, 'servicos' => $servicos, 'servicoEstadia' => $servicoEstadia]);
    }

    public function update(Request $request, $id)
    {
        EstadiaHasServico::find($id)->update($request->all());

        return redirect()->route('servico-estadia.index');
    }

    public function destroy(Request $request)
    {
        EstadiaHasServico::destroy($request->id);

        return redirect()->back();
    }
}
