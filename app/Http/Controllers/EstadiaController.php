<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Estadia;
use App\Models\Quarto;
use Illuminate\Http\Request;

class EstadiaController extends Controller
{

    public function index()
    {
        $estadias = Estadia::all();

        return view('estadia.index')->with(['estadias' => $estadias]);
    }

    public function create()
    {
        $clientes = Cliente::all();
        $quartos = Quarto::all();

        return view('estadia.create')->with(['clientes' => $clientes, 'quartos' => $quartos]);
    }

    public function store(Request $request)
    {
        Estadia::create($request->all());

        return redirect()->route('estadia.index');
    }

    public function show($id)
    {
        $estadia = Estadia::find($id);

        return view('estadia.show')->with(['estadia' => $estadia]);
    }

    public function edit($id)
    {
        $estadia = Estadia::find($id);
        $clientes = Cliente::all();
        $quartos = Quarto::all();

        return view('estadia.edit')->with(['estadia' => $estadia, 'clientes' => $clientes, 'quartos' => $quartos]);
    }

    public function update(Request $request, $id)
    {
        Estadia::find($id)->update($request->all());

        return redirect()->route('estadia.index');
    }

    public function destroy(Request $request)
    {
        Estadia::destroy($request->id);

        return redirect()->back();
    }
}
