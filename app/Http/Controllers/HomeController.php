<?php
namespace App\Http\Controllers;

use App\Http\Controllers;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('site/home.index');
    }
}