<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use App\Http\Services\UserService;

class SearchController extends UserBaseController
{
    /**
     * Show Settings default page
     *
     * @return view
     */
    public function anyIndex(UserService $userService)
    {
        $results = $userService->getByUsername($this->user->id, request()->get('search_result'));
        return view('users/searches/index',['results'=>$results]);
    }
}