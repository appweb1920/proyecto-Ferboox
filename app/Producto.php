<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable =['nombre','categoria_id','cantidad','descripcion'];

    public function scopeNombre($query, $nombre)
    {
        if($nombre)
            return $query->where('nombre','LIKE',"%$nombre%");
    }

    public function scopeCategoria($query, $categoria)
    {
        if($categoria)
            return $query->where('categoria_id','LIKE',"%$categoria%");
    }
}
