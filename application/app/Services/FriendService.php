<?php

namespace App\Services;

use Auth;
use App\Models\User;

class FriendService {

    private $user, $userRole;

    public function __construct(User $user)
    {
        $this->user     = $user;
        $this->userRole = ['role'=>'user'];
    }

}