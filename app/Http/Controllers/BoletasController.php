<?php

namespace App\Http\Controllers;

use App\Models\Boletas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BoletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detalles($id)
    {
        $bol = Boletas::findOrFail($id);
        return view('Boletas.detalles', compact('bol'));
    }

    public function dia(Request $request)
    {
        $bol = Boletas::all();

        $fecha = $request->fecha1;
        return view('Boletas/dia', compact('bol','fecha'));
    }

    public function rango(Request $request)
    {
        $bol = Boletas::all();

        $fecha1 = $request->fecha2;
        $fecha2 = $request->fecha3;
        return view('Boletas/rango', compact('bol','fecha1','fecha2'));
    }

    public function reportes()
    {
        
        return view('Boletas.reportes');
    }

    public function anular($id)
    {
        $dat = Boletas::findOrFail($id);
        $dat->estado = "Anulado";
        $dat ->save();
        return redirect()->route('boletas.lista');
    }

    public function camestado($id)
    {
        $dat = Boletas::findOrFail($id);
        $dat->estado = "Aprobado";
        $dat ->save();
        return redirect()->route('boletas.lista');
    }

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
        $request -> validate([
            'nBoleta' => 'unique:boletas,nBoleta',
            'nRecibo' => 'unique:boletas,nRecibo'
        ]);
        

        
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
        $listadosT=$request->tRecibo;
        $ress="";
        for($i=0; $i<count($listadosT); $i++){
            if($i==0){
                $ress = $listadosT[$i];
            }else{
                $ress = $ress . ", " . $listadosT[$i];
            }
            
        }

        $nBoletas->tRecibo = $ress;
        $nBoletas->nAlumno = $request->nAlumno;
        $nBoletas->gAlumno = $request->gAlumno;
        $nBoletas->ncAlumno = $request->ncAlumno;
        $nBoletas->comentario = $request->comentario;
        $nBoletas->estado = "Pendiente";

        $nBoletas->uEdicion =  auth()->user()->name;
        $nBoletas->CodEMpresa = auth()->user()->codempresa;
        $nBoletas->save();
        return redirect()->route('boletas.crear');
    }
    public function list()
    {
        $boletas = DB::table('Boletas')
            ->where('CodEMpresa', '=', auth()->user()->codempresa)
            ->get();
        //$boletas = Boletas::all();
        
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
