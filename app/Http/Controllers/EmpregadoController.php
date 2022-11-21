<?php

namespace App\Http\Controllers;

use App\Models\Empregado;
use Illuminate\Http\Request;

class EmpregadoController extends Controller
{

    public function index()
    {
        $empregados = Empregado::all();

        return view('empregado.index')->with(['empregados' => $empregados]);
    }

    public function create()
    {
        return view('empregado.create');
    }

    public function store(Request $request)
    {
        Empregado::create($request->all());

        return redirect()->route('empregado.index');
    }

    public function show($id)
    {
        $empregado = Empregado::find($id);

        return view('empregado.show')->with(['empregado' => $empregado]);
    }

    public function edit($id)
    {
        $empregado = Empregado::find($id);

        return view('empregado.edit')->with(['empregado' => $empregado]);
    }

    public function update(Request $request, $id)
    {
        Empregado::find($id)->update($request->all());

        return redirect()->route('empregado.index');
    }

    public function destroy(Request $request)
    {
        Empregado::destroy($request->id);

        return redirect()->route('empregado.index');
    }
}
