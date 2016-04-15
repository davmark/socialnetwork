<?php
namespace App\Http\Controllers\Company;

use Illuminate\Routing\Controller;

class CompanyBaseController extends Controller
{
    public $user;
    public function __construct()
    {
        $user = \Auth::guard('company')->user();
        \View::share('user',$user);
        $this->user = $user;
    }
}