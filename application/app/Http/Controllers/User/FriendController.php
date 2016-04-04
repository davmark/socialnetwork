<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Services\FriendService;
use App\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\User\UserBaseController;

class FriendController extends UserBaseController
{

    public function getIndex(){
        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequests();

        return view('friends.index')
            ->with('friends', $friends)
            ->with('requests', $requests);
    }

    public function getAdd(UserService $userService,$username)
    {
        $redirectUrl = 'user/profile/index/username/';
        $user = $userService->hasUserByName($username);

        if(!$user){
            return redirect('home')
                ->with('info', 'That user could not be found');
        }

        if(Auth::user()->id === $user->id){
            return redirect('home');
        }

        if(Auth::user()->hasFriendRequestPending($user) || $user->
            hasFriendRequestPending(Auth::user())){
            return redirect($redirectUrl.$user->username)
                ->with('info', 'Friend request already pending.');
        }

        if(Auth::user()->isFriendsWith($user)){
            return redirect($redirectUrl.$user->username)
                ->with('info', 'You are already friends');
        }

        Auth::user()->addFriend($user);

        return redirect($redirectUrl.$username)
            ->with('info', 'Friend request sent');
    }

    public function getAccept($username){

        $user = User::where('username', $username)->first();
        if(!$user){
            return redirect('home')
                ->with('infor', 'That user could not be found');
        }

        if(!Auth::user()->hasFriendRequestReceived($user)){
            return redirect()->route('home');
        }

        Auth::user()->acceptFriendRequest($user);

        return redirect('user/profile/index/'.$username)
            ->with('info', 'Friend request accepted');
    }

    public function postDelete($username){
        $user = User::where('username', $username)->first();

        if(!Auth::user()->isFriendsWith($user)){
            return redirect()->back();
        }

        Auth::user()->deleteFriend($user);

        return redirect()->back()->with('info', 'Friend deleted');
    }

}