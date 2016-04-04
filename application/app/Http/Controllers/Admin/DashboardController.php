<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends AdminBaseController
{

    public function getIndex(){
        return view('admin.dashboard.index');
    }
}
