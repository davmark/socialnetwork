<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use Illuminate\Routing\Controller;
use App\Http\Requests\StatusRequest;
use App\Services\StatusService;
use Auth;
use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Requests\ReplyStatusRequest;

class StatusController extends UserBaseController {

    /**
     * Create status
     * 
     * @param StatusRequest $request
     * @param StatusService $statusService
     * @return redirect
     */
    public function postPost(StatusRequest $request,StatusService $statusService)
    {
        $statusService->createStatus($request->input('status'));
        return redirect()
            ->back()
            ->with('info', 'Status posted');
    }

    /**
     * Create reply for status
     * 
     * @param ReplyStatusRequest $request
     * @param StatusService $statusService
     * @param Integer $statusId
     * @return redirect
     */
    public function postReply(ReplyStatusRequest $request,StatusService $statusService, $statusId)
    {
        $status = $statusService->getById($statusId);

        if(!$status)
        {
            return redirect('home');
        }
        if(!$this->user->isFriendsWith($status->user) && $this->user->id !== $status->user->id){
            return redirect('home');
        }

        $reply = Status::create([
            'body' => $request->input("reply")
        ])->user()->associate($this->user);

        $status->replies()->save($reply);

        return redirect()->back();
    }

    /**
     * Add like status
     * 
     * @param type $statusId
     * @return redirect
     */
    public function getLike($statusId){
        $status = Status::find($statusId);

        if(!$status){
            return redirect()->route('home');
        }

        if(!$this->user->isFriendsWith($status->user)){
            return redirect()->route('home');
        }

        if($this->user->hasLikedStatus($status)){
            return redirect()->back();
        }

        $like = $status->likes()->create([]);
        $this->user->likes()->save($like);

        return redirect()->back();
    }

    /**
     * Delete status by id
     * 
     * @param StatusService $statusService
     * @param Int $statusId
     * @return redirect
     */
    public function deleteDelete(StatusService $statusService,$statusId)
    {
        if($statusService->deleteById($statusId))
            return redirect ()->back()->with('success','Successfuly deleted!');
        return redirect ()->back()->withErrors('Something wet wrong.Cant delete!');
    }

    /**
     * Delete status by id
     * 
     * @param StatusService $statusService
     * @param Int $statusId
     * @return redirect
     */
    public function deleteDeleteReply(StatusService $statusService,$replyId)
    {
        if($statusService->deleteById($replyId))
            return redirect ()->back()->with('success','Successfuly deleted!');
        return redirect ()->back()->withErrors('Something wet wrong.Cant delete!');
    }

    /**
     * Update status by id
     * 
     * @param StatusService $statusService
     * @param Int $statusId
     * @return redirect
     */
    public function getUpdate(StatusService $statusService,$id)
    {
        return view('timeline/update',['model'=>$statusService->getById($id)]);
    }

    /**
     * Update status by id
     * 
     * @param StatusService $statusService
     * @param Int $statusId
     * @return redirect
     */
    public function postUpdate(StatusRequest $request,StatusService $statusService,$id)
    {
        if($statusService->updateById($request->all(),$id))
            return redirect ()->back()->with('success','Successfuly updated !');
        return redirect ()->back()->withErrors('Something wet wrong.Can not update !');
    }
}