<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Quarto;
use App\Models\Reserva;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservaController extends Controller
{

    public function index()
    {
        $reservas = Reserva::all();

        return view('reserva.index')->with(['reservas' => $reservas]);
    }


    public function create()
    {
        $quartos = Quarto::all();
        $clientes = Cliente::all();

        return view('reserva.create')->with(['quartos' => $quartos, 'clientes' => $clientes]);
    }

    public function store(Request $request)
    {
        $pago = true;
        if (!$request->pago) {
            $pago = false;
        }

        Reserva::create([
            'data_check_in' => $request->data_entrada,
            'data_check_out' => $request->data_saida,
            'data_reserva' => Carbon::today(),
            'id_quarto' => $request->id_quarto,
            'id_cliente' => $request->id_cliente,
            'pago' => $pago
        ]);
        return redirect()->route('reserva.index');
    }


    public function show($id)
    {
        $reserva = Reserva::find($id);

        return view('reserva.show')->with(['reserva' => $reserva]);
    }

    public function edit($id)
    {
        $reserva = Reserva::find($id);
        $quartos = Quarto::all();
        $clientes = Cliente::all();

        return view('reserva.edit')->with(['reserva' => $reserva, 'quartos' => $quartos, 'clientes' => $clientes]);
    }

    public function update(Request $request, $id)
    {
        $pago = true;
        if (!$request->pago) {
            $pago = false;
        }

        Reserva::find($id)->update([
            'data_check_in' => $request->data_entrada,
            'data_check_out' => $request->data_saida,
            'data_reserva' => Carbon::today(),
            'id_quarto' => $request->id_quarto,
            'id_cliente' => $request->id_cliente,
            'pago' => $pago
        ]);

        return redirect()->route('reserva.index');
    }

    public function destroy(Request $request)
    {
        Reserva::destroy($request->id);

        return redirect()->back();
    }
}
