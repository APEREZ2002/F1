<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('noticias');
});

Route::get('/social', [ChatController::class, 'index'])->name('social.index');

Route::get('/noticias/{id}', function ($id) {
    return view('noticias.noticia' . $id);
});

//Experiencias

Route::get('/experiencias', function () {
    return view('experiencias');
});

Route::get('/experiencias/{id}', function ($id) {
    return view('experiencias.experiencias' . $id);
});

//social

Route::get('/social', [ChatController::class, 'index'])->name('social.index');
Route::post('/enviar-mensaje', [ChatController::class, 'enviarMensaje'])->name('enviar.mensaje');


//store

Route::get('/store', function () {
    return view('store');
});
//perfil

Route::get('/perfil', function () {
    return view('perfil');
});


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
