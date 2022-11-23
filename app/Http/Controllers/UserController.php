<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Empresa;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $empresa = Empresa::findOrFail($request->activa);

        $usuario->codempresa = $empresa->id;
        $usuario->nempresa = $empresa->nombreE;
        $usuario->save();
        return redirect('principal');
    } 
}
