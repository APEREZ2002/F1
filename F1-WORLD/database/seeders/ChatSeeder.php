<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chat;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear algunos mensajes de chat de ejemplo sobre Fórmula 1
        $mensajes = [
            ['usuario' => 'LewisHamilton', 'mensaje' => '¡Hola a todos los fanáticos de la Fórmula 1! ¿Qué opinan de la última carrera?'],
            ['usuario' => 'MaxVerstappen', 'mensaje' => 'Hola Lewis, la última carrera fue intensa. ¡Gran batalla en la pista!'],
            ['usuario' => 'FerrariFan', 'mensaje' => '¡Saludos desde Italia! ¿Cómo ven el rendimiento de Ferrari esta temporada?'],
            ['usuario' => 'RedBullFan', 'mensaje' => 'Max, ¿crees que Red Bull puede mantenerse en la cima durante toda la temporada?'],
            ['usuario' => 'MercedesFan', 'mensaje' => 'Lewis, ¿cuál es la clave del éxito para Mercedes en la F1?'],
            ['usuario' => 'McLarenEnthusiast', 'mensaje' => '¡McLaren está demostrando un gran rendimiento! ¿Cuál es su opinión?'],
            // Puedes agregar más mensajes y usuarios según sea necesario
        ];

        // Inserta los mensajes en la tabla de chats
        foreach ($mensajes as $mensaje) {
            Chat::create($mensaje);
        }
    }
}
