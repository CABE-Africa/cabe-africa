<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Creates a user in the database a return the created user
     * 
     * @param array $payload
     * 
     * @return User
     */
    public function create($payload)
    {
        /** @var User */
        $user = User::create($payload);

        return $user->fresh();
        
    }
}
