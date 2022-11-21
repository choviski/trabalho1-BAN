<?php

namespace App\Http\Controllers;

use App\Models\Estadia;
use App\Models\EstadiaHasServico;
use App\Models\Quarto;
use App\Models\Reserva;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function listarQuartos()
    {
        $quartos = Quarto::all();
        return view('iniciais.listagemQuartos')->with(['quartos' => $quartos]);
    }

    public function sair(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }

    public function listarReservas(Request $request)
    {
        $usuario = $request->session()->get('usuario');

        $reservas = Reserva::where('id_cliente', $usuario->cliente->id)->get();

        return view('iniciais.listagemReservas')->with(['reservas' => $reservas]);
    }

    public function listarServicos(Request $request)
    {
        $usuario = $request->session()->get('usuario');

        $estadias = Estadia::where('id_cliente', $usuario->cliente->id)->get();

        $servicos = EstadiaHasServico::whereIn('id_estadia', $estadias->pluck('id'))->get();

        return view('iniciais.listagemServicos')->with(['servicos' => $servicos]);
    }

    public function listarEstadias(Request $request)
    {
        $usuario = $request->session()->get('usuario');
        $estadias = Estadia::where('id_cliente', $usuario->cliente->id)->get();

        return view('iniciais.listagemEstadias')->with(['estadias' => $estadias]);
    }

    public function fazerReserva(Request $request)
    {
        $usuario = $request->session()->get('usuario');
        $pago = false;

        if ($request->pago) {
            $pago = true;
        }

        Reserva::create([
            'id_cliente' => $usuario->cliente->id,
            'id_quarto' => $request->id_quarto,
            'data_check_in' => $request->data_check_in,
            'data_check_out' => $request->data_check_out,
            'data_reserva' => Carbon::today(),
            'pago' => $pago
        ]);

        return redirect()->route('listarReservas');
    }
}
