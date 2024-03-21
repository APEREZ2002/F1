<?php

namespace App\Http\Controllers;
use App\Models\carrito;


use Illuminate\Http\Request;

class carritoCont extends Controller
{
    public function index()
    {
        $productos = Carrito::all();
        $total = Carrito::sum('precio_total');
        return view('carrito.index', compact('productos', 'total'));
    }

    public function comprar()
    {
        Carrito::truncate();

        return redirect()->back()->with('success', 'Compra realizada con éxito. El carrito ha sido vaciado.');
    }
}
