<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        DB::table('estatus')->insert([
            'nombre' => 'Abierto',
        ]);
        DB::table('estatus')->insert([
            'nombre' => 'En proceso',
        ]);
        DB::table('estatus')->insert([
            'nombre' => 'Concluido',
        ]);
    }
}
