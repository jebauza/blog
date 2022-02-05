@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')

    <h1>Dejanos un mensaje</h1>
    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            correo:
            <br>
            <input type="text" name="correo" value="{{ old('correo') }}">
        </label>
        @error('correo')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="5">{{ old('mensaje') }}</textarea>
        </label>
        @error('mensaje')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit">Enviar mensaje</button>
    </form>


   @if(session('info'))
   <script>
        alert("{{ session('info') }}");
    </script>
   @endif

@endsection
