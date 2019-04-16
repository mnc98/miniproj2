<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class FeatureTest extends TestCase
{

    public function testReturnRegisterTest()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testReturnLoginTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

}
