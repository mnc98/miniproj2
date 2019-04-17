<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

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

    public function testUserDeleteTest()
    {
        $user = User::find(mt_rand(1,50));
        $this->assertTrue($user->delete());
    }

    public function testUserCountTest()
    {
        $user = User::all();
        $userCount = 50;
        $count = $user->count();
        $this->assertEquals($userCount,$count);
    }

    public function testCarInsertTest()
    {
        $car = factory(Car::class)->create();
        $this->assertDatabaseHas('cars', ['make' =>$car->make]);
    }
}
