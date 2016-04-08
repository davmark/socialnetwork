<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;

class UserController extends UserBaseController
{
    public function getIndex()
    {
        return view('user/home.index');
    }
}