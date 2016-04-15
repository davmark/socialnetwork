<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use App\Http\Services\User\FriendService;

class FriendsController extends UserBaseController
{
    /**
     * Show Settings default page
     * 
     * @return view
     */
    public function getIndex( FriendService $friendService )
    {
        $firendsList = $this->user->firendsList();
        return view('users/friends/index',['firendsList'=>$firendsList]);
    }

    /**
     * Show Settings default page
     *
     * @param FriendService $friendService
     * @return json
     */
    public function postSendRequest( FriendService $friendService )
    {
        if($sentRequest = $friendService->saveSentRequest($this->user->id, request()->get('user_id')))
            return response()->json(['success'=>true,'sentRequest'=>$sentRequest]);
        return response()->json([ 'success'=>false, 'message' => '' ]);
    }
}