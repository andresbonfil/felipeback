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
            'email'=>'deleoneduardo443@gmail.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'000000'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'falsovendedor #1',
            'tipoc'=>'Vendedor',
            'email'=>'emailfalso1@fake1.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'000000'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'falsovendedor #2',
            'tipoc'=>'Vendedor',
            'email'=>'emailfalso2@fake2.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'000000'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'Andres Bonfil',
            'tipoc'=>'Comprador',
            'email'=>'andresbonfil@gmail.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'222222'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'Falso comprador #1',
            'tipoc'=>'Comprador',
            'email'=>'fakemail1@yajuu.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'222222'
        ]);
        DB::table('usuarios')->insert([
            'nombre'=>'Falso comprador #2',
            'tipoc'=>'Comprador',
            'email'=>'fakemail2@yajuu.com',
            'password'=>'21232f297a57a5a743894a0e4a801fc3',
            'token'=>'222222'
        ]);
    }
}
