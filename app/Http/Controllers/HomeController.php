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
        return view('user');
    }
}