<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testAuthorizedUserCanVisitDashboardPage()
    {

        /** @var User */
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get(route('dashboard'));

        $response->assertOk();

        $response->assertViewIs('dashboard');
        
    }
}
