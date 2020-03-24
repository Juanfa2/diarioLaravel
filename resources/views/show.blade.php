@extends('index')

@section('contenido')
	<div class="float-left mt-4 back">
			<h2>Secciones</h2>
			@foreach($categorias as $categoria)
			<a class="dropdown-item" href="{{url("categoria/$categoria->id") }}">{{$categoria->nombre}}</a>
			@endforeach
			
		</div>

	<article>
			@foreach($noticias as $noticia)
			<section class="mt-4 ">
				<h2>{{ $noticia->titulo }}</h2>
				<p>{{ $noticia->cuerpo }}</p>
				<a class="buttones button " href="{{url("noticia/$noticia->id") }}">Ver mas</a>
			</section>
			@endforeach
			{{$noticias->links()}}
		</article>


		<aside >
			@foreach($noticiaCat as $noti)
			<section class="mt-4 ">
				<h3>{{ $noti->noticias->first()->categoria->nombre }}</h3>
				<h2>{{ $noti->noticias->first()->titulo }}</h2>

				<img src="{{asset('corona.jpg')}}" alt="">
				<p>{{ $noti->noticias->first()->cuerpo }}</p>
			</section>
			@endforeach
		</aside>

@endsection