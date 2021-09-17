<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //agregado personalmente

class ProductoSeeder extends Seeder
{

    public function run()
    {
        DB::table('productos')->insert([
            'nombre'=>'Cargador v8 1.5m Vorago',
            'descripcion'=>'para cargar celulares',
            'pu'=>'50',
            'pe'=>'40',
            'cpe'=>'3',
            'disp'=>'s',
            'idv'=>'1'
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cargador tipo C vorago',
            'descripcion'=>'Cargador Celular 1.5 metros',
            'pu'=>'70',
            'pe'=>'65',
            'cpe'=>'3',
            'disp'=>'s',
            'idv'=>'1'
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cargador para iphone TechZone',
            'descripcion'=>'Cargador de iphone de alta resistencia',
            'pu'=>'100',
            'pe'=>'80',
            'cpe'=>'5',
            'disp'=>'s',
            'idv'=>'1'
        ]);
        
    }
}
