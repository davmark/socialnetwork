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
     * @param Friend $friend
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
     * @return object Friend
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

    /**
     * Accept Request
     *
     * @param int $userId
     * @param int $requestId
     * @return array
     */
    public function acceptRequest( $userId, $friendId )
    {
        $requestToAuthUser = $this->friend
                ->where('user_id',$friendId)
                ->where('friend_id',$userId);
        if(!$requestToAuthUser->get()->isEmpty())
        {
            if($requestToAuthUser->update(['accept' => 1]))
                return ['success'=>true,'message'=>'Successfuly accepted'];
            return ['success'=>false,'message'=>'Can`t accept to this request'];
        }
        return ['success'=>false,'message'=>'You have not such request'];
    }

    /**
     * Unfriend
     *
     * @param int $userId
     * @param int $requestId
     * @return array
     */
    public function unfriend( $userId, $friendId )
    {
        if(
                $this->friend
                ->where(function($query) use ($userId, $friendId)
                {
                    $query->where('user_id', $friendId);
                    $query->where('friend_id', $userId);
                })
                ->orWhere(function($query) use ($userId, $friendId)
                {
                    $query->where( 'user_id', $userId );
                    $query->where( 'friend_id', $friendId );
                })
                ->delete()
           )
            return ['success'=>true,'message'=>'Successfully unfriend'];
        return ['success'=>false, 'message'=>'You have not such friend'];
    }

    /**
     * Cancel Request
     *
     * @param int $authUserId
     * @param int $userId
     * @return array
     */
    public function cancelRequest( $authUserId, $userId )
    {
        if(
                $this->friend
                ->where('user_id', $userId)
                ->where( 'friend_id',$authUserId )
                ->delete()
           )
            return ['success'=>true,'message'=>'Successfully canceld'];
        return ['success'=>false, 'message'=>'You have not such accept'];
    }
}

