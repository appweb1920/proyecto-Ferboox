<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


class Producto extends Model
{
    use SoftDeletes;

    protected $table = "productos";
    protected $fillable =['nombre','categoria_id','cantidad','descripcion','foto','precio'];

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

    public function scopeBorrados($query, $basura)
    {
        if($basura)
            return $query->withTrashed()->where('deleted_at','!=','NULL');
    }

    public function getCategoria()
    {
        $categoria = DB::table('categorias')->where('categorias.id',$this->categoria_id)->select('categorias.tipoCategoria','categorias.id')
        ->get();
        
        return $categoria;
    }
}
