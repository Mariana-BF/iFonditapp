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
            'imagen' => 'pozole.png',
            'precio' => 50,
            'categoria'=> "Platillo fuerte",
            
        ]);

        $platillo2= Platillo::create([
            'nombre'=> 'Tacos',
            'descripcion'=> 'Tacos de bisteck , longaniza y chuleta',
            'imagen' => 'tacos.png',
            'precio' => 10,
            'categoria'=> "Platillo fuerte",
            
        ]);

        $platillo3= Platillo::create([
            'nombre'=> 'Enchiladas',
            'descripcion'=> 'Con su queso gratinado , una delicia!',
            'imagen' => 'enchiladas.png',
            'precio' => 75,
            'categoria'=> "Platillo fuerte",
            
        ]);

        $platillo4 = Platillo::create([
            'nombre'=> 'Chilaquiles',
            'descripcion'=> 'Ricos Chilaquiles con bisteck',
            'imagen' => 'chilaquiles.png',
            'precio' => 80,
            'categoria'=> "Platillo fuerte",
        ]);

        $platillo5 = Platillo::create([
            'nombre'=> 'Chile en nogada',
            'descripcion'=> 'Rico Chile en nogada',
            'imagen' => 'chile.png',
            'precio' => 80,
            'categoria'=> "Platillo fuerte",
        ]);

        $platillo6 = Platillo::create([
            'nombre'=> 'Quesadilla',
            'descripcion'=> 'Rica quesadilla',
            'imagen' => 'quesadilla.png',
            'precio' => 80,
            'categoria'=> "Platillo fuerte",
        ]);

        $bebida1 = Platillo::create([
            'nombre'=> 'Limonada',
            'descripcion'=> 'Rica limonada',
            'imagen' => 'limonada.png',
            'precio' => 80,
            'categoria'=> "Bebida",
        ]);

        $bebida1 = Platillo::create([
            'nombre'=> 'Cafe',
            'descripcion'=> 'Rico cafe',
            'imagen' => 'cafe.png',
            'precio' => 80,
            'categoria'=> "Bebida",
        ]);

        $postre = Platillo::create([
            'nombre'=> 'Helado de vainilla',
            'descripcion'=> 'Rico helado de vainilla con chocolate',
            'imagen' => 'helado.png',
            'precio' => 50,
            'categoria'=> "Postre",
        ]);

        $postre2 = Platillo::create([
            'nombre'=> 'Pastel de queso',
            'descripcion'=> 'Rico Pastel de queso con chocolate',
            'imagen' => 'pastelqueso.png',
            'precio' => 60,
            'categoria'=> "Postre",
        ]);

        $postre3 = Platillo::create([
            'nombre'=> 'Tarta de manzana',
            'descripcion'=> 'Rica tarta de manzana con fruta fresca',
            'imagen' => 'tartamanzana.png',
            'precio' => 40,
            'categoria'=> "Postre",
        ]);



    }
}
