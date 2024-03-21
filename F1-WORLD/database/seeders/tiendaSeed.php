<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tienda;

class tiendaSeed extends Seeder
{
    public function run()
    {
        Tienda::create([
            'producto' => 'Gorra Aston Marin',
            'precio' => 9.99,
            'stock' => 200,
            'archivo' => 'gorraAston.jpg',
        ]);
      

        Tienda::create([
            'producto' => 'Gorra Red Bull Racing',
            'precio' => 19.99,
            'stock' => 50,
            'archivo' => 'gorraRedBull.jpg',
        ]);

        Tienda::create([
            'producto' => 'Llavero Mercedes-AMG Petronas',
            'precio' => 9.99,
            'stock' => 200,
            'archivo' => 'llaveroMercedes.jpg',
        ]);

        Tienda::create([
            'producto' => 'Casmiseta Aston Martin',
            'precio' => 29.99,
            'stock' => 100,
            'archivo' => 'camisetaAston.jpg',
        ]);
      
        Tienda::create([
            'producto' => 'Replica RB19',
            'precio' => 200,
            'stock' => 10,
            'archivo' => 'replica.jpg',
        ]);

        Tienda::create([
            'producto' => 'Camiseta Ferrari',
            'precio' => 29.99,
            'stock' => 100,
            'archivo' => 'camisetaFerrari.jpg',
        ]);
    }
}
