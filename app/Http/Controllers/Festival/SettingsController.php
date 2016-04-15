<?php
namespace App\Http\Controllers\Festival;

use App\Http\Services\FestivalService;
use App\Http\Controllers\Festival\FestivalBaseController;

class SettingsController extends FestivalBaseController
{
    /**
     * Show Settings default page
     * 
     * @return view
     */
    public function getIndex()
    {
        return view('festivals/settings/index',['countries'=>\App\Helpers\ActionClass::getCountries()]);
    }
    
     /**
     * Update user info
     * 
     * @param FestivalService $festivalService
     * @return redirect
     */
    public function postUpdateInfo(FestivalService $festivalService)
    {
        //Validation
        $request = request()->except('_token');
        $validator = \Validator::make($request, [
                'name'          => 'required',
                'country_id'    => 'required',
                'start_time'    => 'required',
                'end_time'      => 'required',
                'email'         => 'required|email',
            ]);
        if($validator->fails())
            return back()->withErrors($validator);
        // End Validation
        
        if($festivalService->updateById($this->user->id, $request))
            return back()->with('success','Successfuly updated');
        return back()->withErrors('Something wet wrong.Can not updtae info');
    }

    /**
     * Show User default age
     * 
     * @return view
     */
    public function postChangePassword(FestivalService $festivalService)
    {
        //Validation
        $request = request()->except('_token');
        $validator = \Validator::make($request, [
                'password'    => 'required'
            ]);
        if($validator->fails())
            return back()->withErrors($validator);
        // End Validation
        
        if($festivalService->changePasswordById($this->user->id, request()->get('password')))
            return back()->with('success','Successfuly changed');
        return back()->withErrors('Something wet wrong.Can not change password');
    }
}