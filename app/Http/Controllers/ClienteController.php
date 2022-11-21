<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view('cliente.index')->with(["clientes" => $clientes]);
    }

    public function create()
    {
        $endereco = Endereco::all();
        $usuarios = Usuario::all();

        return view('cliente.create')
            ->with([
                'enderecos' => $endereco,
                'usuarios' => $usuarios
            ]);
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());

        return redirect()->route("cliente.index");
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show')->with(['cliente' => $cliente]);
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);

        $endereco = Endereco::all();
        $usuarios = Usuario::all();

        return view('cliente.edit')
            ->with([
                'cliente' => $cliente,
                'enderecos' => $endereco,
                'usuarios' => $usuarios
            ]);
    }

    public function update(Request $request, $id)
    {
        Cliente::find($id)->update($request->all());

        return redirect()->route("cliente.index");
    }

    public function destroy(Request $request)
    {
        Cliente::destroy($request->id);
        return redirect()->route('cliente.index');
    }

}
