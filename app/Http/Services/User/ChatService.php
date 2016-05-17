<?php

namespace App\Http\Services\User;

use App\Models\Friend;

class ChatService
{
    public function getChatUsers($user)
    {
        $rooms = [];
        $friends = $user->firendsList()['friends'];
        foreach ( $friends as $friend )
        {
            $rooms['users'][$friend['id']]['room'] = $friend['username'].'-'.$friend['id'];
            $rooms['users'][$friend['id']]['full_name'] = $friend['first_name'].' '.$friend['last_name'];
        }
        //dd($rooms['users']);
        return $rooms['users'];
    }
}