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
    public function run()
    {
        $orden1 = Orden::create([
            'anotaciones' => 'sin mayonesa',
            'total' => 200,
            'estatus' => 0,
            'idUsuario' => 1,
        ]);
    }
}
