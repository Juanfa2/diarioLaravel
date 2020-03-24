<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Categoria;

class NoticiaController extends Controller
{
    public function show() {
    	$noticias = Noticia::orderBy('created_at', 'desc')->paginate(10);
    	$categorias = Categoria::all();
    	$noticiaCat = $categorias->random(3);


    	return view('show', compact('noticias', 'noticiaCat','categorias'));
    }

    public function categoriaShow($id){
    	$noticias = Categoria::find($id)->noticias()->paginate(10);

    	$categorias = Categoria::all();
    	$noticiaCat = $categorias->random(3);


    	return view('showCategoria', compact('noticias', 'noticiaCat','categorias'));
    	
    }

    public function noticiaShow($id){
    	$noticia = Noticia::find($id);

    	return view('noticiaShow', compact('noticia'));
    }
}
