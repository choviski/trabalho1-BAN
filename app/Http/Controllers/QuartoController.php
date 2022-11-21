<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Quarto;
use App\Models\TipoQuarto;
use File;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuartoController extends Controller
{

    public function index(): view
    {
        $quartos = Quarto::all();
        return view('quarto.index')->with(['quartos' => $quartos]);
    }


    public function create(): view
    {
        $hoteis = Hotel::all();
        $tipoQuartos = TipoQuarto::all();

        return view('quarto.create')->with(['hoteis' => $hoteis, 'tipos' => $tipoQuartos]);
    }

    public function store(Request $request)
    {
        $quarto = Quarto::create($request->all());
        $imagem = $request->file('foto');

        $extensao = $imagem->getClientOriginalExtension();
        chmod($imagem->path(), 0755);
        File::move($imagem, public_path() . '/quartos/quarto-id' . $quarto->id . '.' . $extensao);

        $quarto->foto = '/quartos/quarto-id' . $quarto->id . '.' . $extensao;
        $quarto->save();

        return redirect()->route('quarto.index');
    }

    public function show($id)
    {
        $quarto = Quarto::find($id);

        return view('quarto.show')->with(['quarto' => $quarto]);
    }

    public function edit($id): view
    {
        $quarto = Quarto::find($id);
        $hoteis = Hotel::all();
        $tipoQuartos = TipoQuarto::all();

        return view('quarto.edit')->with(['hoteis' => $hoteis, 'tipoQuartos' => $tipoQuartos, 'quarto' => $quarto]);
    }

    public function update(Request $request, $id)
    {
        Quarto::find($id)->update($request->all());
        $quarto = Quarto::find($id);
        $imagem = $request->file('foto');

        $extensao = $imagem->getClientOriginalExtension();
        chmod($imagem->path(), 0755);
        File::move($imagem, public_path() . '/quartos/quarto-id' . $id . '.' . $extensao);

        $quarto->foto = '/quartos/quarto-id' . $id . '.' . $extensao;
        $quarto->save();

        return redirect()->route('quarto.index');
    }

    public function destroy(Request $request)
    {
        Quarto::destroy($request->id);

        return redirect()->back();
    }
}
