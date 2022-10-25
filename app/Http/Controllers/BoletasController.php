<?php

namespace App\Http\Controllers;

use App\Models\Boletas;
use Illuminate\Http\Request;

class BoletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Boletas.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nBoletas = new Boletas();

        $nBoletas->nBoleta = $request->nBoleta;
        $nBoletas->vBoleta = $request->vBoleta;
        $nBoletas->fBoleta = $request->fBoleta;
        $nBoletas->lBoleta = $request->lBoleta;
        $nBoletas->pBoleta = $request->pBoleta;
        $nBoletas->bBoleta = $request->bBoleta;
        $nBoletas->nRecibo = $request->nRecibo;
        $nBoletas->mRecibo = $request->mRecibo;
        $nBoletas->fRecibo = $request->fRecibo;
        $nBoletas->tRecibo = $request->tRecibo;
        $nBoletas->nAlumno = $request->nAlumno;
        $nBoletas->gAlumno = $request->gAlumno;
        $nBoletas->ncAlumno = $request->ncAlumno;
        $nBoletas->comentario = $request->comentario;
        $nBoletas->estado = "Pendiente";
        $nBoletas->uEdicion =  auth()->user()->name;
        $nBoletas->CodEMpresa = 1;
        $nBoletas->save();
        return redirect()->route('boletas.crear');
    }
    public function list()
    {
        $boletas = Boletas::all();
        
        return view('boletas/list', compact('boletas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boletas  $boletas
     * @return \Illuminate\Http\Response
     */
    public function show(Boletas $boletas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boletas  $boletas
     * @return \Illuminate\Http\Response
     */
    public function edit(Boletas $boletas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boletas  $boletas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boletas $boletas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boletas  $boletas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boletas $boletas)
    {
        //
    }
}
