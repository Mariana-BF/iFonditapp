<?php

namespace Database\Seeders;
use App\Models\Platillo; //Referencia al modelo 
use Illuminate\Database\Seeder;

class PlatillosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agregar platillos solo cambiar el nombre de la variable 
        $platillo= Platillo::create([
            'nombre'=> 'Pozole',
            'descripcion'=> 'Delicioso pozole tradicional',
            'imagen' => '',
            'precio' => 50,
            'categoria'=> 1,
            
        ]);

        $platillo2= Platillo::create([
            'nombre'=> 'Tacos',
            'descripcion'=> 'Tacos de bisteck , longaniza y chuleta',
            'imagen' => '',
            'precio' => 10,
            'categoria'=> 2,
            
        ]);

        $platillo3= Platillo::create([
            'nombre'=> 'Enchiladas',
            'descripcion'=> 'Con su queso gratinado , una delicia!',
            'imagen' => '',
            'precio' => 75,
            'categoria'=> 1,
            
        ]);


    }
}
