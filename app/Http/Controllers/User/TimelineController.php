<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use App\Http\Services\User\TimelineService;

class TimelineController extends UserBaseController
{
    /**
     * Show Timeline default page
     *
     * @return view
     */
    public function getIndex( TimelineService $timelineService )
    {
        $lastStatus = $timelineService->getLastStatus($this->user);
        return view('users/timelines/index',['lastStatus'=>$lastStatus]);
    }
}