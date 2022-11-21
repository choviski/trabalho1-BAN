<?php

namespace App\Http\Controllers;

use App\Models\Empregado;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    public function index()
    {
        $servicos = Servico::all();

        return view('servico.index')->with(['servicos' => $servicos]);
    }


    public function create()
    {
        $empregados = Empregado::all();

        return view('servico.create')->with(['empregados' => $empregados]);
    }


    public function store(Request $request)
    {
        Servico::create($request->all());

        return redirect()->route('servico.index');
    }


    public function show($id)
    {
        $servico = Servico::find($id);

        return view('servico.show')->with(['servico' => $servico]);
    }


    public function edit($id)
    {
        $empregados = Empregado::all();
        $servico = Servico::find($id);

        return view('servico.edit')->with(['empregados' => $empregados, 'servico' => $servico]);
    }


    public function update(Request $request, $id)
    {
        Servico::find($id)->update($request->all());

        return redirect()->route('servico.index');
    }


    public function destroy(Request $request)
    {
        Servico::destroy($request->id);

        return redirect()->back();
    }
}
