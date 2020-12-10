<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pdf extends Model
{
    protected $table = "pdf";
    protected $fillable =['nombre'];

    public function getProductos()
    {
        $productos = DB::table('cotizacion')
        ->join('productos', 'productos.id', '=', 'cotizacion.producto_id')
        ->join('pdf', 'pdf.id', '=', 'cotizacion.pdf_id')
        ->where('cotizacion.pdf_id',$this->id)
        ->select('productos.nombre','productos.precio','productos.descripcion','cotizacion.cantidad')
        ->get();
        
        return $productos;
    }
}
