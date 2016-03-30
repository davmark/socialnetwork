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

    public function postPost(StatusRequest $request,StatusService $statusService)
    {
        $statusService->createStatus($request->input('status'));
        return redirect()
            ->back()
            ->with('info', 'Status posted');
    }

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
}