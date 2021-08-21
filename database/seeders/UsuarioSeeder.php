<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //agregado personalmente

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre'=>'PC Life Systems',
            'tipoc'=>'Vendedor',
            'email'=>'pclifesistems@pclifesistems.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'000000'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'Abarrotes Mario',
            'tipoc'=>'Vendedor',
            'email'=>'abarrotesmario@gmail.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'111111'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'Boutique dulce',
            'tipoc'=>'Vendedor',
            'email'=>'dulce@gmail.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'222222'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'Andres Bonfil',
            'tipoc'=>'Comprador',
            'email'=>'andresbonfil@gmail.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'222222'
        ]);
    }
}
