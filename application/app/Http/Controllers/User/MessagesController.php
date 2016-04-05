<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;

class MessagesController extends UserBaseController
{
    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function getIndex()
    {
        return view('messenger.index');
    }

    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
    public function getCreate()
    {
//        dd($this->user->friends()->lists('id'));
        $firendsDropdownList = [];
        $firendsDropdownList[0]='Select User';
        foreach($this->user->friends() as $user)
        {
            $firendsDropdownList[$user->id] = $user->username;
        }
        return view('messenger/create',['firendsDropdownList'=>$firendsDropdownList]);
    }
}