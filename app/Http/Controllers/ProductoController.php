<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\storeProducto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Product::paginate();//Obteniendo todos los registros de la BD
        return view('productos/index',compact('productos'));
    }

    public function create(){
        return view('productos/create');
    }

    public function show(Product $producto){
        return view('productos/show',compact('producto'));
    }

    public function store(storeProducto $request){
        $producto = new Product();
        $producto->name = $request->name;
        $producto->descripcion = $request->descripcion;
        $producto->foto = $request->foto;
        $producto->save();
        return redirect()->route('productos.show',$producto);
    }

    public function edit(Product $producto){
        return view('productos.edit',compact('producto'));
    }

    public function update(Request $request, Product $producto){
        $producto->name = $request->name;
        $producto->descripcion = $request->descripcion;
        $producto->foto = $request->foto;
        $producto->save();
        return redirect()->route('productos.show',$producto);
    }

    public function destroy(Product $producto){
        $producto->delete();
        return redirect()->route('productos.index');
    }
}