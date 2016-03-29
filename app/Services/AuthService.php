<?php

namespace App\Services;

use Auth;
use App\Models\User;

class AuthService {

    private $user, $userRole;

    public function __construct(User $user)
    {
        $this->user     = $user;
        $this->userRole = ['role'=>'user'];
    }

    /**
     * Attempting user use Auth attempt method
     *
     * @param Array $request
     * @return boolean
     */
    public function hasUser($request){
        $request += $this->userRole;
        return Auth::attempt($request);
    }

    /**
     * Improving data
     *
     * @param Array $arr
     * @param String $key
     * @param String $val
     * @return array
     */
    private function recievingData ($arr,$key,$val)
    {

        return array_add($arr,$key,$val);
    }

    /**
     * Saving user into users table
     *
     * @param Array $user
     * @return boolean|User
     */
    public function saveUser($user)
    {
        $user['password'] = bcrypt($user['password']);
        $user += $this->userRole;
        return $this->user->create($user);
    }
}