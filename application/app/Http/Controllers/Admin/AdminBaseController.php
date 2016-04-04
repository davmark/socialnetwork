<?php namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class AdminBaseController extends Controller
{
    public function __construct()
    {
        //  \View::share('user',\Auth::user());
    }
}
