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

    public function testReturnAboutTest()
    {
        $user = User::all()->random(1)[0];

        $response = $this->actingAs($user)->get('/about');

        $response->assertStatus(200);
    }

    public function testContactAboutTest()
    {
        $user = User::all()->random(1)[0];

        $response = $this->actingAs($user)->get('/contact');

        $response->assertStatus(200);
    }

}
