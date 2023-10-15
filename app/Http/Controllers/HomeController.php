<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()//Se utiliza cuando solo hay 1 ruta
    {
        return view('home');
    }
}
