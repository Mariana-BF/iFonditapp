<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class ProbarController extends Controller
{
    public function __invoke()
    {
        // como pasar datos de un arreglo
        $nombres = ['luis','pedro','fatima'];

        //pasar datos de una base de datsos con modelo
        $ids = Platillo::all(['id']);

        return view('prueba', compact('ids'));
    }
}
