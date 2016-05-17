<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use App\Http\Services\User\ChatService;

class ChatController extends UserBaseController
{
    /**
     * Show Chat default page
     * 
     * @return view
     */
    public function getIndex( ChatService $chatService )
    {
        return view('users/chat/index',[
            'chatUsers' => $chatService->getChatUsers($this->user)
        ]);
    }
}
