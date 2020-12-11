<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Archivo extends Model
{
    protected $table = "pdf";
    protected $fillable =['nombre'];

    public function getProductos()
    {
        $productos = DB::table('cotizacion')
        ->join('productos', 'productos.id', '=', 'cotizacion.producto_id')
        ->join('pdf', 'pdf.id', '=', 'cotizacion.pdf_id')
        ->where('cotizacion.pdf_id',$this->id)
        ->select('productos.nombre','productos.descripcion','cotizacion.cantidad','cotizacion.id AS cotizacion_id','cotizacion.precio AS cotizacion_precio')
        ->get();
        
        return $productos;
    }
}
