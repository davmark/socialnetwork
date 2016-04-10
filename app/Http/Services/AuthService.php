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
    public function userRegiter($user,$service,$userData)
    {
        $userData = $this->beforeSave($userData);
        $createdUser = $service->create($userData);
        return $createdUser;
    }

    /**
     * Attempting Company type before login
     * 
     * @param User $company
     * @param array $companyData
     */
    public function companyRegiter($company,$service,$companyData)
    {
        $companyData = $this->beforeSave($companyData);
        $createdCompany = $service->create($companyData);
        return $createdCompany;
    }

    /**
     * Attempting Festival type before login
     * 
     * @param User $festival
     * @param array $festivalData
     */
    public function festivalRegiter($festival,$service,$festivalData)
    {
        $festivalData = $this->beforeSave($festivalData);
        $createdFestival = $service->create($festivalData);
        return $createdFestival;
    }
    
    private function beforeSave($data)
    {
        $data['password'] = bcrypt($data['password']);
        return $data;
    }
}
