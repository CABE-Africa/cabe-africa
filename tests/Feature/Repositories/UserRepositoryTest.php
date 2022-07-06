<?php

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRepositoryTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    
    public function testCreateMethod()
    {
        $reposity = new UserRepository;

        $payload = array_merge(
            User::factory()->make()->toArray(),
            ['password' => Hash::make('password')]
        );

        $user = $reposity->create($payload);

        $this->assertNotNull($user);

        $this->assertEquals($payload['name'], $user->name);
        $this->assertEquals($payload['email'], $user->email);
        $this->assertEquals($payload['phone'], $user->phone);
        $this->assertEquals($payload['company_name'], $user->company_name);
    }
}
