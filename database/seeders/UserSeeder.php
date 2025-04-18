<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            'nombre' => 'Administrador',
            'primer_apellido'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('admin'),
            'id_rol'=>DB::scalar("Select id from roles where roles.nombre = 'Administrador'")
        ]);
        DB::table('users')->insert([
            'nombre' => 'Usuario',
            'primer_apellido'=>'Usuario',
            'email'=>'user@user.com',
            'password'=> Hash::make('user'),
            'id_rol'=>DB::scalar("Select id from roles where roles.nombre = 'Usuario'")
        ]);

    }
}
