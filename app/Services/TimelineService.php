<?php

namespace App\Services;
use App\Models\Status;
use App\Models\Like;
use Carbon\Carbon;
class TimelineService
{

    private $status,$like;
    public function __construct(Status $status,Like $like)
    {
        $this->status = $status;
        $this->like = $like;
    }
    /**
     * Creating Status for user timeline
     *
     * @param User $user
     * @return
     */
    public function getStatusReply($user, $userService)
    {
       $user_status_data = [];
       $middleArr = [];
       $statuses = $this->status
                    ->where('user_id', $user->id)
                    ->orWhereIn('user_id', $user->friends()->lists('id'))
                    ->where('parent_id',NULL)
                    ->orderBy('id', 'desc')
                    ->get();
        foreach($statuses as $status)
        {
            $daysSinceEpoch = Carbon::createFromTimestamp(strtotime($status['created_at']))->diffInDays();
            $middleArr['likes']            = $this->like->where('user_id',$status['user_id'])->get();

            $middleArr['id']               = $status['id'];
            $middleArr['body']             = $status['body'];
            $middleArr['created_at']       = Carbon::now()->subMinutes($daysSinceEpoch)->diffForHumans();
            $middleArr['user']             = $userService->getById($status['user_id']);

            $replies  = $this->status->where('parent_id',$status['id'])->get()->toArray();
            foreach($replies as $reply)
            {
                $middleArr['replies'][$reply['id']]['id']           = $reply['id'];
                $middleArr['replies'][$reply['id']]['body']         = $reply['body'];
                $middleArr['replies'][$reply['id']]['created_at']   = $reply['created_at'];
                $middleArr['replies'][$reply['id']]['likes']        = $this->like->where('user_id',$reply['user_id'])->get();
                $middleArr['replies'][$reply['id']]['user']         = $userService->getById($reply['user_id']);
            }
            $user_status_data [] = $middleArr;
            $middleArr = [];
        }
//        dd($user_status_data);
        return $user_status_data;
    }
}