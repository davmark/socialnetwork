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
     * Get user by id
     *
     * @param Integer $id
     * @return User
     */
    public function getById( $id )
    {
        return $this->user->find($id);
    }

    /**
     * Get user by ids
     *
     * @param Integer $ids
     * @return User
     */
    public function getByIds( $ids )
    {
        return $this->user->whereIn($ids)->get();
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
                ->where('last_name',$lastName)
                ->orWhere('username',$username)
                ->first();
    }
}