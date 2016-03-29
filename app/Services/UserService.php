<?php

namespace App\Services;

use Auth;
use App\Models\User;

class UserService {

    private $user, $userRole;

    public function __construct(User $user)
    {
        $this->user     = $user;
        $this->userRole = ['role'=>'user'];
    }

    /**
     * Check user existing by first,last names
     *
     * @param String $username
     * @return
     */
    public function hasUserByName( $username )
    {
        $userData = explode( ' ', $username );
        if( count($userData) > 1 )
        {
            list( $firstName, $lastName ) = $userData;
        }
        else
        {
            $firstName = $username;
            $lastName='';
        }
        return $this->user
                ->where('first_name',$firstName)
                ->orWhere('last_name',$lastName)
                ->first();
    }
}