<form action="{{route('productos.update',$producto)}}" method="post">
    @method('put')
    @csrf

    <label class="m-5 p-5">Nombre Producto</label>
    <input class="m-5 p-5" type="text" name="name" value="{{$producto->name}}">
    <br>

    <label class="m-5 p-5">Descripción</label>
    <input class="m-5 p-5" type="text" name="descripcion" value="{{$producto->descripcion}}">
    <br>

    <label class="m-5 p-5">Foto</label>
    <input class="m-5 p-5" type="text" name="foto" value="{{$producto->foto}}">

    <button type="submit">Editar</button>

</form>