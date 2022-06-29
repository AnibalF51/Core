<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

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
    return view('plantilla');
});

//INICIO
Route::get('/principal', [EmpresaController::class, 'principal'])->name('principal');
//EMPRESA
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.crear');
Route::post('/empresa/registro', [EmpresaController::class, 'store'])->name('empresa.registro'); 
Route::get('/empresa/lista', [EmpresaController::class, 'list'])->name('empresa.lista');