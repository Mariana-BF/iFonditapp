<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrdenPlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$orden=Orden::all(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = request()->validate([
            'anotaciones' => 'required|min:6',  
        ]);
        //
        $id_orden=request();
        DB::update('update ordens set anotaciones = ? where id = 1', [$id_orden['anotaciones']] );
        DB::update('update ordens set estatus = 1 where id = 1');

        
        $orden = Orden::all();
        $orden = Orden::where('id',1)->first();

          
   
            
        return view('SeguirPedido',compact('orden'));
        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //return redirect()->action('HomeController@index');
        $orden = Orden::all();
        $orden = Orden::where('id',1)->first();

          
   
            
        return view('SeguirPedido',compact('orden'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        //
    }

    public function getOrden(Orden $orden)
    {
        
        return response(json_encode($orden),200)->header('Content-type','text/plain');
    }
}
