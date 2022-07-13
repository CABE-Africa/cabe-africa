<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testAuthenticatedUserCanVisitHomePage()
    {

        /** @var User */
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get(route('home'));

        $response->assertOk();

        $response->assertViewIs('home');
        
    }
}
