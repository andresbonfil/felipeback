<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class usuarioTest extends TestCase{
    public function test_home(){
        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }
    public function test_emailtest(){
        $response = $this->get(route('emailtest'));
        $response->assertStatus(200);
    }
    
    public function test_emailRecoveryPost(){
        $response = $this->post(route('emailRecoveryPost',[
            'email' => 'andresbonfil@gmail.com',
            'password' => 'admin',
            'token' => '326460'
        ]));
        $response->assertStatus(200);
    }
    public function test_emailRecovery(){
        $response = $this->get(route('emailRecovery'));
        $response->assertStatus(200);
    }
    
    public function test_usuario_recontra(){
        $response = $this->post(route('usuario.recontra',[
            'txtEmail' => 'andresbonfil@gmail.com'
        ]));
        $response->assertStatus(200);
    }

    public function test_usuario_login(){
        $response = $this->post(route('usuario.login',[
            'email' => 'andresbonfil@gmail.com',
            'password' => 'admin',
        ]));
        $response->assertStatus(200);
    }
    
}
