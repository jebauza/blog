@extends('layouts.plantilla')

@section('title','Curso ' . '')

@section('content')
    <h1>Bienvenido al curso {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso->slug) }}">Editar Curso</a>
    <p><strong>Categoria:</strong> {{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>
    <br>
    <form action="{{route('cursos.destroy', $curso->slug)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
