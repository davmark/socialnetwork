<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserBaseController;
use App\Http\Services\UserService;


class SettingsController extends UserBaseController
{
    /**
     * Show Settings default page
     * 
     * @return view
     */
    public function getIndex()
    {
        return view('users/settings/index',['countries'=>\App\Helpers\ActionClass::getCountries()]);
    }

    /**
     * Show User default age
     * 
     * @return view
     */
    public function postUpdateInfo(UserService $userService)
    {
        //Validation
        $request = request()->except('_token');
        $validator = \Validator::make($request, [
                'first_name'    => 'required',
                'last_name'     => 'required',
                'occupation'    => 'required',
                'country_id'    => 'required',
                'email'         => 'required|email',
            ]);
        if($validator->fails())
            return back()->withErrors($validator);
        // End Validation
        
        if($userService->updateById($this->user, $request))
            return back()->with('success','Successfuly updated');
        return back()->withErrors('Something wet wrong.Can not updtae info');
    }
    
    /**
     * Show User default age
     * 
     * @return view
     */
    public function postChangePassword(UserService $userService)
    {
        //Validation
        $request = request()->except('_token');
        $validator = \Validator::make($request, [
                'password'    => 'required'
            ]);
        if($validator->fails())
            return back()->withErrors($validator);
        // End Validation
        
        if($userService->changePasswordById($this->user->id, request()->get('password')))
            return back()->with('success','Successfuly changed');
        return back()->withErrors('Something wet wrong.Can not change password');
    }
    
    /**
     * Show User default age
     * 
     * @return view
     */
    public function postCropAvatar( UserService $userService )
    {
        if(request()->ajax())
        {
            if(request()->file('avatar_file'))
                return $userService->crop($this->user, request()->file('avatar_file'), json_decode(request()->get('avatar_data')));
        }
        return back()->withErrors('This method is depricated');
    }
}