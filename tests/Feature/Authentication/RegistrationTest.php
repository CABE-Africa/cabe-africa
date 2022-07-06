<?php

namespace Tests\Feature\Authentication;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $this->withoutExceptionHandling();
        
        $response = $this->post(route('register'), [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->e164PhoneNumber(),
            'password' => 'password',
            'password_confirmation' => 'password',
            'accept_terms_and_conditions' => 'on'
        ]);

        $this->assertAuthenticated();

        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
