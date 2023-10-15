@extends('Layouts.plantilla')

@section('title','Producto especifico: '.$producto->name)

@section('content')
<h1>Producto: <strong>{{ $producto->name }} </strong></h1>
<h2>Descripcion: <strong>{{ $producto->descripcion }}</strong></h2>
<h2>Foto: <strong>{{ $producto->foto }}</strong></h2>

<a class="text-lime-600" href="{{route('productos.index')}}">Regresar</a>
<br><br>
<a class="text-lime-600" href="{{route('productos.edit',$producto)}}">Editar</a>
<br><br>

<form action="{{route('productos.destroy',$producto)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="text-lime-600" >Eliminar</button>
</form>


@endsection