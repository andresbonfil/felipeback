<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class productoTest extends TestCase
{
    public function test_productoprovedor(){
        $response = $this->get(route('productoprovedor'));
        $response->assertStatus(200);
    }
    public function test_vendedor(){
        $response = $this->get(route('vendedor'));
        $response->assertStatus(200);
    }
}
