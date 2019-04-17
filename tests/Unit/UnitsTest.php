<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitsTest extends TestCase
{

    public function testUserInsertTest()
    {
        $user = factory(User::class)->create();
        $this->assertDatabaseHas('users', ['name' =>$user->name]);
    }

    public function testUserUpdateTest()
    {
        $user = User::find(3);
        $user->name='Steve Smith';
        $this->assertTrue($user->save());
    }
}
