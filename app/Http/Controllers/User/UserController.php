<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;

class UserController extends UserBaseController
{
    /**
     * Show User default age
     * 
     * @return view
     */
    public function getIndex()
    {
        return view('users/user/index');
    }
}