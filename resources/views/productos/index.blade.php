@extends('Layouts.plantilla')

@section('title','Inicio')

@section('content')

    <a class="m-8 p-5 text-red-500" href="{{route('productos.create')}}">Crear producto</a>

    <ul>
        @foreach($productos as $producto)
            <li>
                <a href="{{route('productos.show',$producto)}}">{{$producto->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$productos->links()}}

@endsection