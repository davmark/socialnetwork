<?php namespace App\Http\Controllers\User;

use App\Services\TimelineService;
use App\Services\UserService;
use App\Http\Controllers\User\UserBaseController;

class TimelineController extends UserBaseController
{
    public function getIndex(TimelineService $timelineService, UserService $userService)
    {
        $statuses = $timelineService->getStatusReply( $this->user,$userService );
        return view('timeline.index', ['statuses'=>$statuses]);
    }
}