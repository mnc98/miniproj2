<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class FeatureTest extends TestCase
{

    public function testReturnLoginTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
