<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserProfileFormRequest;
use App\Services\ProfileService;
use Auth,Validator;

class ProfileController extends UserBaseController
{
    /**
     * Show user indx page
     * 
     * @param String $username
     * @return view
     */
    public function getIndex($username)
    {
        $user = User::where('username', $username)->first();
        if(!$user){
            abort(404);
        }

        $statuses = $user->statuses()->notReply()->get();

        return view('profile/index')
            ->with('user', $user)
            ->with('statuses', $statuses)
            ->with('authUserIsFriend', $this->user->isFriendsWith($user));
    }
    /**
     * Show profile edit page
     * 
     * @return view
     */
    public function getEdit(){
        return view('profile.edit');
    }

    /**
     * Update user profile data
     * 
     * @param UserProfileFormRequest $request
     * @param ProfileService $profileService
     * @return redirect
     */
    public function postEdit(UserProfileFormRequest $request,ProfileService $profileService)
    {
        if($request->hasFile('img')){
            $profileService->uploadProfileImg($request->file('img'), $this->user);
        }
        Auth::user()->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'location' => $request->input('location'),
        ]);
        return redirect('user/profile/edit')
            ->with('info', 'Your profile has been updated');
    }
}
