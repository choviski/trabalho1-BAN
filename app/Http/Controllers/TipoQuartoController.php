<?php

namespace App\Http\Controllers;

use App\Models\TipoQuarto;
use Illuminate\Http\Request;

class TipoQuartoController extends Controller
{

    public function index()
    {
        $tipoQuartos = TipoQuarto::all();

        return view('tipo-quarto.index')->with(['tipoQuartos' => $tipoQuartos]);
    }

    public function create()
    {
        return view('tipo-quarto.create');
    }


    public function store(Request $request)
    {
        if (!$request->cama_extra) {
            TipoQuarto::create([
                'nome' => $request->nome,
                'cama_extra' => false
            ]);
            return redirect()->route('tipo-quarto.index');
        }

        TipoQuarto::create($request->all());
        return redirect()->route('tipo-quarto.index');
    }


    public function show($id)
    {
        $tipoQuarto = TipoQuarto::find($id);

        return view('tipo-quarto.show')->with(['tipoQuarto' => $tipoQuarto]);
    }

    public function edit($id)
    {
        $tipoQuarto = TipoQuarto::find($id);

        return view('tipo-quarto.edit')->with(['tipoQuarto' => $tipoQuarto]);
    }

    public function update(Request $request, $id)
    {
        if (!$request->cama_extra) {
            TipoQuarto::find($id)->update([
                'nome' => $request->nome,
                'cama_extra' => false
            ]);
            return redirect()->route('tipo-quarto.index');
        }
        TipoQuarto::find($id)->update($request->all());
        return redirect()->route('tipo-quarto.index');

    }


    public function destroy(Request $request)
    {
        TipoQuarto::destroy($request->id);

        return redirect()->back();
    }
}
