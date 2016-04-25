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

    /**
     * Show Timeline default page
     *
     * @return view
     */
    public function postCreateStatus( TimelineService $timelineService )
    {
        $timelineService->setModel('status');
        $data = request()->except('_token');
        $data['user_id'] = $this->user->id;
        $status = $timelineService->create($data);
        if($status)
            return back()->with('success','Successfuly created');
        return back()->with('success','Can not create status');
    }

    /**
     * Show Timeline default page
     *
     * @return view
     */
    public function postCreateReply( TimelineService $timelineService )
    {
        dd();
        $timelineService->setModel('statusReply');
        $timelineService->create($data);
    }
}