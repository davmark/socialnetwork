<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Status;

class HomeController extends Controller{

    public function getIndex()
    {
        return view('home');
    }
}