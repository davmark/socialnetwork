<?php
namespace App\Http\Controllers\Festival;

use Illuminate\Routing\Controller;

class FestivalBaseController extends Controller
{
    public $user;
    public function __construct()
    {
        $user = \Auth::guard('festival')->user();
        \View::share('user',$user);
        $this->user = $user;
    }
}