<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsuariosSeeder::class); // llamar al seeder de esta clase para ejecutarlo
        $this->call(PlatillosSeeder::class); // Llamar al seeder de la clase Platillos para ejecutarlo
        $this->call(OrdenesSeeder::class);
    }
}
