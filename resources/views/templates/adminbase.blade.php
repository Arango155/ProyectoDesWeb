@extends('templates/base')
@section('right')
<div class="linksn">
<a class="btn btn-dark"  href="{{route('librosView')}}">Libros</a>
    <a class="btn btn-dark"  href="{{ route('categoriasView') }}">Categorias</a>
    <a class="btn btn-dark"  href="{{route('nasaapi')}}">Nasa API</a>
    <a class="btn btn-dark"  href="{{route('productosapi')}}">Perfumeria API</a>
</div>

@endsection
