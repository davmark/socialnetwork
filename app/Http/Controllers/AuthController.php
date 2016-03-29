<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\SigningRequest;

class AuthController extends Controller
{

    public function getSignup(){
        return view('auth/signup');
    }

    public function postSignup(RegistrationRequest $request, AuthService $service){
        if($service->saveUser($request->all())){
            return redirect('home')
                ->with('info', 'Your account has been created and you can now sign in');
        }
        return redirect()->back();
    }

    public function postSignup1(Request $request){
        $this->validate($request, [
            'email'      => 'required|unique:users|email|max:255',
            'username'   => 'required|unique:users|alpha_dash|max:25',
            'password'   => 'required|min:6'
        ]);

        User::create([
            'email'      => $request->input('email'),
            'username'   => $request->input('username'),
            'password'   => bcrypt($request->input('password')),
        ]);

        return redirect('home')
            ->with('info', 'Your account has been created and you can now sign in');
    }
    /**
     * Show sign in form
     *
     * @return view
     */
    public function getSignin(){
        return view('auth.signin');
    }

    /**
     * Signing user after attempting to get user registration into service
     *
     * @param AuthService $service
     * @param SigningRequest $request
     * @return redirect()
     */
    public function postSignin(AuthService $service, SigningRequest $request){
        if($service->hasUser($request->only('email', 'password')))
            return redirect('home')->with('info', 'You are now signed in');
        return redirect()->back();
    }

    /**
     * Sign out user
     *
     * @return redirect
     */
    public function getSignout(){
        Auth::logout();
        return redirect('home');
    }

    /**
     * Show register form
     *
     * @return view
     */
    public function getRegister()
    {
        return view('auth.register');
    }


    /**
     * Log out user
     *
     * @return redirect
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}