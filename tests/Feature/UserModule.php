<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModule extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function test_si_carga_url_de_usuarios()
    {
        $this->get('/usr');
        $this->assertStatus(200);
        $this->assertSee('Creando un nuevo usuario');
    }
}
