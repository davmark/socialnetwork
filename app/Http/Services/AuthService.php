<?php
namespace App\Http\Services;

class AuthService
{
    
    /**
     * Attempting User type before login
     * 
     * @param User $user
     * @param array $userData
     */
    public function userLogin($user,$userData)
    {
        return $user->attempt($userData);
    }

    /**
     * Attempting Company type before login
     * 
     * @param User $company
     * @param array $companyData
     */
    public function companyLogin($company, $companyData)
    {
        dd('$company');
    }

    /**
     * Attempting Festival type before login
     * 
     * @param User $festival
     * @param array $festivalData
     */
    public function festivalLogin($festival, $festivalData)
    {
        dd('$festival');
    }
    
    /**
     * Attempting User type before login
     * 
     * @param User $user
     * @param array $userData
     */
    public function userRegiter($user,$userData)
    {
        $userData['password'] = bcrypt($userData['password']);
        dd($user->attempt($userData));
        $createdUser = $user->create($userData);
        if($createdUser)
            return $user->attempt($createdUser);
    }

    /**
     * Attempting Company type before login
     * 
     * @param User $company
     * @param array $companyData
     */
    public function companyRegiter($company, $companyData)
    {
        dd('$company',$companyData);

    }

    /**
     * Attempting Festival type before login
     * 
     * @param User $festival
     * @param array $festivalData
     */
    public function festivalRegiter($festival, $festivalData)
    {
        dd('$festival',$festivalData);
    }
}
