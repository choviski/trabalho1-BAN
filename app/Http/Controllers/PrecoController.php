<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Preco;
use App\Models\TipoQuarto;
use Illuminate\Http\Request;

class PrecoController extends Controller
{

    public function index()
    {
        $precos = Preco::all();

        return view('preco.index')->with(['precos' => $precos]);
    }

    public function create()
    {
        $hoteis = Hotel::all();
        $tipoQuartos = TipoQuarto::all();

        return view('preco.create')->with(['hoteis' => $hoteis, 'tipoQuartos' => $tipoQuartos]);
    }

    public function store(Request $request)
    {
        Preco::create($request->all());

        return redirect()->route('preco.index');
    }

    public function show($id)
    {
        $preco = Preco::find($id);

        return view('preco.show')->with(['preco' => $preco]);
    }

    public function edit($id)
    {
        $hoteis = Hotel::all();
        $tipoQuartos = TipoQuarto::all();
        $preco = Preco::find($id);

        return view('preco.edit')->with(['hoteis' => $hoteis, 'tipoQuartos' => $tipoQuartos, 'preco' => $preco]);
    }

    public function update(Request $request, $id)
    {
        Preco::find($id)->update($request->all());

        return redirect()->route('preco.index');
    }

    public function destroy(Request $request)
    {
        Preco::destroy($request->id);

        return redirect()->back();
    }
}
