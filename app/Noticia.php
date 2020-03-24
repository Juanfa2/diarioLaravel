<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = "noticias";
    protected $guarded = [];


    public function categoria(){
    	return $this->belongsTo("App\Categoria", "categoria_id");
    }
}
