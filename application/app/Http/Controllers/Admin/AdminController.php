<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Auth;

class AdminController extends AdminBaseController
{

    public function getIndex()
    {
        return redirect('admin/login');
    }

    public function getLogin()
    {
        if (Auth::check() && Auth::user()->role == 'admin')
            return redirect('admin/dashboard');
        Auth::logout();
        return view('admin.login');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function postLogin(AdminRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Could not sign you in those details');
        }
        return redirect('admin/dashboard')->with('info', 'You are now signed in');
    }
}
