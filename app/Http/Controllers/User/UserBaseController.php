<?php

namespace App\Http\Controllers\User;

use Illuminate\Routing\Controller;
use Auth;

class UserBaseController extends Controller
{
    public $user;
    public function __construct()
    {
        \View::share('user',\Auth::user());
        $this->user = Auth::user();
    }
}