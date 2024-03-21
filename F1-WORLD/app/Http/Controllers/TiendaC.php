<?php

namespace App\Http\Controllers;
use App\Models\Tienda;
use Illuminate\Http\Request;
use App\Models\carrito;


class TiendaC extends Controller
{
    public function index()
    {
        $productos = Tienda::all();
        return view('store', compact('productos'));
    }

    public function agregarAlCarrito($id_producto)
    {
        $producto = Tienda::findOrFail($id_producto);

        $item = new Carrito([
            'producto' => $producto->producto,
            'cantidad' => 1, 
            'precio_total' => $producto->precio
        ]);
        $item->save();

        return redirect()->back()->with('success', 'Producto agregado al carrito exitosamente.');
    }

}
