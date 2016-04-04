<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use Illuminate\Routing\Controller;
use App\Http\Requests\StatusRequest;
use App\Services\StatusService;
use App\Http\Requests\ReplyStatusRequest;

class StatusController extends UserBaseController
{
    /**
     * Create status
     * 
     * @param StatusRequest $request
     * @param StatusService $statusService
     * @return redirect
     */
    public function postPost( StatusRequest $request, StatusService $statusService )
    {
        if($statusService->createStatus($request->all(),$this->user))
            return redirect()->back()->with('info', 'Status posted');
        return redirect()->back()->with('info', 'Something wet wrong.Cant create status!!!');
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
        if( $statusService->createStatusReply(request()->all(),$this->user,$statusId) )
            return redirect()->back()->with('info', 'Reply posted');
        return redirect()->back()->with('info', 'Something wet wrong.Cant create Reply!!!');
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
    public function postUpdate( StatusRequest $request, StatusService $statusService, $id )
    {
        if($statusService->updateById($request->all(),$id))
            return redirect ()->back()->with('success','Successfuly updated !');
        return redirect ()->back()->withErrors('Something wet wrong.Can not update !');
    }

    /**
     * Downloading files
     * 
     * @param type $file
     * @return Download
     */
    public function getDownloadFile($uniqFileName,$originFileName)
    {
        $filePath = public_path('/users/files/status/'.$uniqFileName);
        if(\File::exists($filePath))
            return response()->download($filePath,$originFileName);
        return redirect()->back()->withErrors('File not found');
    }
}