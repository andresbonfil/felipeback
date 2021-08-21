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
            'disponible'=>'s',
            'idprovedor'=>'1'
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cargador tipo C vorago',
            'descripcion'=>'Cargador Celular 1.5 metros',
            'pu'=>'70',
            'pe'=>'65',
            'cpe'=>'3',
            'disponible'=>'s',
            'idprovedor'=>'1'
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cargador para iphone TechZone',
            'descripcion'=>'Cargador de iphone de alta resistencia',
            'pu'=>'100',
            'pe'=>'80',
            'cpe'=>'5',
            'disponible'=>'s',
            'idprovedor'=>'1'
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Azucar 1kg.',
            'descripcion'=>'Azucar suelta por kilo o medio kilo',
            'pu'=>'22',
            'pe'=>'20',
            'cpe'=>'3',
            'disponible'=>'s',
            'idprovedor'=>'2'
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Huevo Calvario 1kg',
            'descripcion'=>'Huevo calvario blanco doble llema',
            'pu'=>'35',
            'pe'=>'32',
            'cpe'=>'5',
            'disponible'=>'s',
            'idprovedor'=>'2'
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Acondicionador Ego 400ml.',
            'descripcion'=>'Para peinarse suavecito',
            'pu'=>'25',
            'pe'=>'20',
            'cpe'=>'10',
            'disponible'=>'s',
            'idprovedor'=>'3'
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Gel Ego 200ml.',
            'descripcion'=>'Para peinarse bien peinado',
            'pu'=>'13',
            'pe'=>'11',
            'cpe'=>'5',
            'disponible'=>'s',
            'idprovedor'=>'3'
        ]);
    }
}
