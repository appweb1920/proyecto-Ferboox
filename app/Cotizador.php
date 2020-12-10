<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizador extends Model
{
    protected $table = "cotizacion";
    protected $fillable =['producto_id','pdf_id'];

    
}
