<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;
use App\Models\Platillo;
use Illuminate\Support\Facades\DB;
class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orden = DB::table('ordens')->get();
        $platillosPedidos=DB::table('orden_has_platillo')->get();

        $platillosPedidos = DB::table('orden_has_platillo')
        ->join('platillos', 'orden_has_platillo.idPlatillo', '=', 'platillos.id')
        ->get();
        
        return view('FormularioEnvio',compact('orden','platillosPedidos'));
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
    public function show(Orden $orden)
    {
        //
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


    public function InsertarenOrden(Request $request) //, int $cantidad)
    {
        $id_platillo=request();
        $platillos = Platillo::all();
        $platillos = Platillo::where('id',intval($id_platillo["id"] ) )->first();
        
        
        DB::table('orden_has_platillo')->insert([
            'orden_id'=>1,
            'idPlatillo'=>$platillos->id,
            'cantidad'=>$id_platillo["cantidad"],
        ]);


        return redirect()->action('HomeController@getUser');
    }


    public function ordenes()
    {
        
        $platillosPedidos = DB::table('orden_has_platillo')
        ->join('platillos', 'orden_has_platillo.idPlatillo', '=', 'platillos.id')
        ->get();

        $orden = DB::table('ordens')->get();

        
        return view('administraorden',compact('platillosPedidos','orden'));
    }

    public function cambiarordennueva($id)
    {
        
        DB::update('update ordens set estatus = 2 where id = ?', [$id]);

        return redirect()->action('OrdenController@ordenes');
    }

    public function deleteorden($id)
    {   //ojo porque se está borrando la orden 1 y nunca e crea
        DB::delete('delete from orden_has_platillo where orden_id = ?',[$id]);
        DB::delete('delete from ordens where id = ?',[$id]);

        return redirect()->action('OrdenController@ordenes');
    }

    public function cambiarordenproceso($id)
    {
        DB::update('update ordens set estatus = 3 where id = ?', [$id]);
        return redirect()->action('OrdenController@ordenes');
    }
}