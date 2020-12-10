<?php

namespace App\Http\Controllers;

use App\Cotizador;
use App\Producto;
use App\Pdf;
use Illuminate\Http\Request;

class CotizadorController extends Controller
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

    }

    public function showProductos($id)
    {
        # code...
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cotizador = new Cotizador;
        $cotizador->pdf_id = $request->pdf_id;
        $cotizador->producto_id = $request->producto_id;
        $cotizador->cantidad = $request->cantidad;

        $productos = Producto::all();
        $pdf = Pdf::find($request->pdf_id);

        $cotizador->save();

        return view('cotizador')->with('pdf',$pdf)->with('productos',$productos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cotizador  $cotizador
     * @return \Illuminate\Http\Response
     */
    public function show(Cotizador $cotizador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cotizador  $cotizador
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotizador $cotizador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cotizador  $cotizador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizador $cotizador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cotizador  $cotizador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotizador $cotizador)
    {
        //
    }
}
