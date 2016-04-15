<?php
namespace App\Http\Services\User;
use App\Models\Friend;

class FriendService
{
    /**
     * Private property for Friend model
     * 
     * @var $friend 
     */
    private $friend;

    /**
     * Create a new UserService service instance.
     *
     * @return void
     */
    public function __construct( Friend $friend )
    {
        $this->friend = $friend;
    }

    /**
     * Save send friend request id
     *
     * @param int $userId
     * @param int $requestId
     */
    public function saveSentRequest( $userId, $friendId )
    {
        if( !$friendId )
            return false;
        if(!$this->friend->where('user_id' , $userId)->where('friend_id' , $friendId)->get()->isEmpty())
            return false;
        $requestData['user_id']   = $userId;
        $requestData['friend_id'] = $friendId;
        $requestData['accept'] = 0;
        return $this->friend->create($requestData);
    }
}

