<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\BoletasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

//INICIO
Route::get('/principal', [EmpresaController::class, 'principal'])->name('principal');
//EMPRESA
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.crear');
Route::post('/empresa/registro', [EmpresaController::class, 'store'])->name('empresa.registro'); 
Route::get('/empresa/lista', [EmpresaController::class, 'list'])->name('empresa.lista');
//BOLETAS
Route::get('/boletas/create', [BoletasController::class, 'create'])->name('boletas.crear');
//SESIONES
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/', function () {return view('profile.show');})->name('profile');;
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('principal');
    })->name('dashboard');
});
