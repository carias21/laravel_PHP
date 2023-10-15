@extends('Layouts.plantilla')

@section('title','Formulario')

@section('content')
<h1>Formulario para guardar producto</h1>
<form method="POST" action="{{route('productos.store')}}">
    @csrf
    <label class="m-5 p-5">Nombre Producto</label>
    <input class="m-5 p-5" type="text" name="name" value="{{old('name')}}">
    @error('name')
        {{$message}}
    @enderror
    <br>

    <label class="m-5 p-5">Descripción</label>
    <input class="m-5 p-5" type="text" name="descripcion" value="{{old('descripcion')}}">
    @error('descripcion')
        {{$message}}
    @enderror
    <br>

    <label class="m-5 p-5">Foto</label>
    <input class="m-5 p-5" type="text" name="foto" value="{{old('foto')}}">
    
    @error('foto')
        {{$message}}
    @enderror
    <br>
    <button type="submit">Guardar</button>

</form>
@endsection