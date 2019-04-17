<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitsTest extends TestCase
{

    public function testUserInsertTest()
    {
        $user = factory(\App\User::class)->create();
        $this->assertDatabaseHas('users', ['name' =>$user->name]);
    }
}
