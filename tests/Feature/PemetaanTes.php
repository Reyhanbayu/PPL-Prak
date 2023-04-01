<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PemetaanTes extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function pemetaan()
    {
        $response = $this->get('/pemetaan');

        $response->assertStatus(200);
        $response->assertSee('Pemetaan Cpl-BK-MK');
    }
}
