<?php

namespace Database\Seeders;

use App\Models\Orden;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //estatus = 0 no existe // 1 = nueva orden // 2 = en proceso // 3 = enviado // 4 = entregado
    public function run()
    {
        $orden1 = Orden::create([
            'anotaciones' => 'sin mayonesa',
            'total' => 200,
            'estatus' => 0,
            'idUsuario' => 1,
        ]);

        $orden2 = Orden::create([
            'anotaciones' => 'Tacos con todo',
            'total' => 300,
            'estatus' => 1,
            'idUsuario' => 1,
        ]);

        $orden3 = Orden::create([
            'anotaciones' => 'bebidas sin hielo',
            'total' => 400,
            'estatus' => 2,
            'idUsuario' => 1,
        ]);

        $orden4 = Orden::create([
            'anotaciones' => 'salsa aparte',
            'total' => 350,
            'estatus' => 3,
            'idUsuario' => 1,
        ]);

        $orden5 = Orden::create([
            'anotaciones' => 'Traer lo antes posible',
            'total' => 300,
            'estatus' => 1,
            'idUsuario' => 1,
        ]);

        DB::table('orden_has_platillo')->insert([
            'orden_id'=>2,
            'idPlatillo'=>2,
            'cantidad'=>5,
        ]);

        DB::table('orden_has_platillo')->insert([
            'orden_id'=>3,
            'idPlatillo'=>7,
            'cantidad'=>2,
        ]);

        DB::table('orden_has_platillo')->insert([
            'orden_id'=>3,
            'idPlatillo'=>8,
            'cantidad'=>2,
        ]);

        DB::table('orden_has_platillo')->insert([
            'orden_id'=>4,
            'idPlatillo'=>4,
            'cantidad'=>2,
        ]);

        DB::table('orden_has_platillo')->insert([
            'orden_id'=>4,
            'idPlatillo'=>6,
            'cantidad'=>1,
        ]);

        DB::table('orden_has_platillo')->insert([
            'orden_id'=>5,
            'idPlatillo'=>5,
            'cantidad'=>1,
        ]);

    }
}
