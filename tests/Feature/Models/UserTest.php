<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @group users */
    public function testCreateMethod()
    {
        $payload = array_merge(
            User::factory()->make()->toArray(),
            ['password' => Hash::make('password')]
        );

        User::create($payload);

        /** @var User */
        $user = User::first();

        $this->assertNotNull($user);

        $this->assertEquals($payload['name'], $user->name);
        $this->assertEquals($payload['email'], $user->email);
        $this->assertEquals($payload['phone'], $user->phone);
        $this->assertEquals($payload['company_name'], $user->company_name);
    }
}
