<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class cotizacionTest extends TestCase
{
    public function test_cotizacion(){
        $response = $this->get(route('cotizacion','1'));
        $response->assertStatus(200);
    }
}
