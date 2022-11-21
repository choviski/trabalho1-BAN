<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{

    public function index()
    {
        $hoteis = Hotel::all();

        return view('hotel.index')->with(['hoteis' => $hoteis]);
    }

    public function create()
    {
        $enderecos = Endereco::all();

        return view('hotel.create')->with(['enderecos' => $enderecos]);
    }

    public function store(Request $request)
    {
        Hotel::create($request->all());

        return redirect()->route('hotel.index');
    }

    public function show($id)
    {
        $hotel = Hotel::find($id);

        return view('hotel.show')->with(['hotel' => $hotel]);
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        $enderecos = Endereco::all();

        return view('hotel.edit')->with(['hotel' => $hotel, 'enderecos' => $enderecos]);
    }

    public function update(Request $request, $id)
    {
        Hotel::find($id)->update($request->all());

        return redirect()->route('hotel.index');
    }

    public function destroy(Request $request)
    {
        Hotel::destroy($request->id);

        return redirect()->back();
    }
}
