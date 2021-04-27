<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Roberto',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'kevin',
            'email' => 'kevin@hotmail.com',
            'password' => Hash::make('12345678'),
            'fullacces' => 'no',
            'codigo' => 'usuario',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
    }
}
