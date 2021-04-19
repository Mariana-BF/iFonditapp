<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $platillos=Platillo::all(); //select * from platillos [info]
        return view('user',compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('AgregarPlatillo');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Agregar a la base de datos 
        $datos=request();
        $data = request()->validate([
            'nombre' => 'required|min:6',
            'categoria' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            //'imagen' => 'required|image'
        ]);
        $ruta_imagen =  $request['imagen']->store('platillos','public'); //guarda la imagen y proporcionna su direccion
            /// si quieres ver la foto se usa storage con php artisan storage:link

            //
            $img = Image::make( public_path("storage/{$ruta_imagen}") );//->fit(1000,351);
            $img->save();
        auth()->platillo()->create(
            [
            'nombre' => $data['nombre'],
            'categoria' => $data['categoria'],
             'precio' => $data['precio'],
             'imagen' => $ruta_imagen,
              // helper para saber que usuario esta autrenticado 
             'descipcion' => $data['descipcion'],
            ]
        );
        return redirect()->action('HomeController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo $platillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Platillo $platillo)
    {
        $platillos = Platillo::all();
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo $platillo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platillo $platillo)
    {
        //
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
