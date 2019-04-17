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
        $user = User::all()->random(1)[0];
        $user->name='Steve Smith';
        $this->assertTrue($user->save());
    }

    public function testUserDeleteTest()
    {
        $user = User::all()->random(1)[0];
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
        $car = factory(car::class)->create();
        $this->assertDatabaseHas('cars', ['make' =>$car->make]);
    }

    public function testYearUpdateTest()
    {
        $car = car::all()->random(1)[0];
        $car->year = 2000;
        $this->assertTrue($car->save());
    }

    public function testCarDeleteTest()
    {
        $car = car::all()->random(1)[0];
        $this->assertTrue($car->delete());
    }

    public function testCarCountTest()
    {
        $car = User::all();
        $carCount = 50;
        $count = $car->count();
        $this->assertEquals($carCount,$count);
    }

    public function testCarYearIntTest()
    {
        $car = car::all()->random(1)[0];
        $this->assertIsNumeric($car->year);
    }

}
