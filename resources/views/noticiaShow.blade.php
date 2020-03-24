@extends('index')

@section('contenido')

	
		<article >
			<section class="mt-4  ">
				<h2>{{ $noticia->titulo }}</h2>
				<h3>{{ $noticia->cuerpo }}</h3>
				<p>{{ $noticia->entrada }}</p>
				
			</section>
		</article>
	
@endsection