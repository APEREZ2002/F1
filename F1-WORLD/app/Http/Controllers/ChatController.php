<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        // Obtener los mensajes ordenados de más antiguo a más nuevo
        $mensajes = Chat::orderBy('created_at', 'desc')->get();

        return view('social', ['mensajes' => $mensajes]);
    }

    public function enviarMensaje(Request $request)
    {
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            return redirect()->route('social.index')->with('error', 'Debes iniciar sesión para enviar mensajes.');
        }

        $request->validate([
            'mensaje' => 'required',
        ]);

        $usuario = auth()->user()->name;

        $chat = new Chat;
        $chat->usuario = $usuario;
        $chat->mensaje = $request->input('mensaje');
        
        $chat->save();

        // Redirige al método index después de enviar un mensaje
        return redirect()->route('social.index');
    }
}
