<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Services\AuthService;
use App\Http\Services\UserService;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Auth;

class AuthController extends Controller
{
    private $user,$company,$festival;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = Auth::guard('user');
        $this->company = Auth::guard('company');
        $this->festival = Auth::guard('festival');
    }

    /**
     * Show login page
     * 
     * @return view
     */
    public function getLogin()
    {
        return view('auth/login');
    }

    /**
     * Show login page
     * 
     * @return view
     */
    public function getRegister()
    {
        return view('auth/register');
    }

    /**
     * User login by role
     * 
     * @return redirect
     */
    public function postLogin(LoginRequest $request, AuthService $authService)
    {
        $role = $request->get('role');
        $loginMethod = $role.'Login';
        if($authService->$loginMethod( $this->$role, $request->all() ));
            return redirect()->back()->with('success','Successfully logged in !!!!');
        return redirect ()->back()->withErrors('Something wet wrong.Pleas try again!!!');
    }

    /**
     * Registering user by role
     * 
     * @param AuthService $authService
     * @param UserService $userService
     * @return redirect
     */
    public function postRegister(RegisterRequest $request, AuthService $authService)
    {
        $role = $request->get('role');
        $registerMethod = $role.'Regiter';
        if($authService->$registerMethod( $this->$role, $request->all()));
            return redirect($role)->withErrors('Successfully registered!!!');
        return redirect ()->back()->withErrors('Something wet wrong.Pleas try again!!!');
    }
}
