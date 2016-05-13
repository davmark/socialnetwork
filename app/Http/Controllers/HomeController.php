<?php
namespace App\Http\Controllers;

use App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show site default page
     * 
     * @return view
     */
    public function getIndex()
    {
        //\Event::fire('event.name',[11111111]);
        return view('site/home.index');
    }

    /**
     * Show site about page
     *
     * @return view
     */
    public function getAbout()
    {
        return dd(111111);
    }

    /**
     * Show site about page
     *
     * @return view
     */
    public function getContact()
    {
        return dd(22222);
    }

}