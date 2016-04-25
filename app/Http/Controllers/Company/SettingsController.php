<?php
namespace App\Http\Controllers\Company;

use App\Http\Services\CompanyService;
use App\Http\Controllers\Company\CompanyBaseController;

class SettingsController extends CompanyBaseController
{
    /**
     * Show Settings default page
     * 
     * @return view
     */
    public function getIndex()
    {
        return view('companies/settings/index');
    }
    
    /**
     * Update user info
     * 
     * @param CompanyService $companyService
     * @return redirect
     */
    public function postUpdateInfo(CompanyService $companyService)
    {
        //Validation
        $request = request()->except('_token');
        $validator = \Validator::make($request, [
                'name'        => 'required',
                'email'       => 'required|email',
                'category_id' => 'required',
                'subcategory' => 'required',
                'country_id'  => 'required',
            ]);
        if($validator->fails())
            return back()->withErrors($validator);
        // End Validation
        
        if($companyService->updateById($this->user, $request))
            return back()->with('success','Successfuly updated');
        return back()->withErrors('Something wet wrong.Can not updtae info');
    }
    
    /**
     * Show User default age
     * 
     * @return view
     */
    public function postChangePassword(CompanyService $companyService)
    {
        //Validation
        $request = request()->except('_token');
        $validator = \Validator::make($request, [
                'password'    => 'required'
            ]);
        if($validator->fails())
            return back()->withErrors($validator);
        // End Validation
        
        if($companyService->changePasswordById($this->user->id, request()->get('password')))
            return back()->with('success','Successfuly changed');
        return back()->withErrors('Something wet wrong.Can not change password');
    }
        
    /**
     * Show User default age
     * 
     * @return view
     */
    public function postCropAvatar( CompanyService $userService )
    {
        if(request()->ajax())
        {
            if(request()->file('avatar_file'))
                return $userService->crop($this->user, request()->file('avatar_file'), json_decode(request()->get('avatar_data')));
        }
        return back()->withErrors('This method is depricated');
    }
}