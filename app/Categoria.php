<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $guarded = [];

    public function noticias(){
    	return $this->hasMany(Noticia::class, 'categoria_id');
    }
}
