<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EnderecoController extends Controller
{

    public function index()
    {
        $enderecos = Endereco::all();

        return view('endereco.index')->with(["enderecos" => $enderecos]);
    }

    public function create()
    {
        return view('endereco.create');
    }

    public function store(Request $request)
    {
        Endereco::create($request->all());

        return redirect()->route("endereco.index");
    }

    public function show($id)
    {
        $endereco = Endereco::find($id);

        return view('endereco.show')->with(['endereco' => $endereco]);
    }

    public function edit($id)
    {
        $endereco = Endereco::find($id);

        return view('endereco.edit')->with(['endereco' => $endereco]);
    }

    public function update(Request $request, $id)
    {
        Endereco::find($id)->update($request->all());

        return redirect()->route("endereco.index");
    }

    public function destroy(Request $request)
    {
        Endereco::destroy($request->id);
        return redirect()->route('endereco.index');
    }
}
