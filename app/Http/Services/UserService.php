<?php
namespace App\Http\Services;

use App\User;

class UserService
{
    private $user;
    /**
     * Create a new UserService service instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user bay email
     * 
     * @param String $email
     * @return User|Boolean
     */
    public function getByEmail($email)
    {
        return $this->user->where('email',$email)->first();
    }
}

