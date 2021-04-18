<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;

class HomeController extends Controller
{
    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('SoloAdmin',['only' => 'index']);
    }

    /** 
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infoPlatillos=Platillo::all(); //select * from platillos [info]
        return view('home',compact('infoPlatillos'));
        
    }

    public function getUser()
    {
        $platillos = Platillo::all();
        //$platillos = Platillo::where('categoria','Platillo fuerte')->get();
        return view('user',compact('platillos'));
    }

    public function getComida()
    {
        $platillos = Platillo::all();
        $platillos = Platillo::where('categoria','Platillo fuerte')->get();
        return view('user',compact('platillos'));
    }

    public function getbebida()
    {
        $platillos = Platillo::all();
        $platillos = Platillo::where('categoria','Bebida')->get();
        return view('user',compact('platillos'));
    }

    public function getpostre()
    {
        $platillos = Platillo::all();
        $platillos = Platillo::where('categoria','Postre')->get();
        return view('user',compact('platillos'));
    }

}