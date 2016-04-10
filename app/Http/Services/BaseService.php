<?php
namespace App\Http\Services;

class BaseService
{
    
    public $model;
    
    /**
     * Before saving into table
     * 
     * @param array $data
     * @return redirect|array
     */
    public function beforeSave($data)
    {
        $data['password'] = bcrypt($data['password']);
        $data['username'] = strtolower($data['first_name']).'_'.strtolower($data['last_name']);
        if($this->getByUsername($data['username']))
            return ['success'=>false,'message'=>$data['first_name'].' '.$data['last_name'].' user already exist'];
        return $data;
    }
    
    /**
     * Get By Username
     * 
     * @param string $firstName
     * @param string $lastName
     * @return boolean
     */
    public function getByUsername($username)
    {
        return !$this->model
                ->where('username',$username)
                ->get()
                ->isEmpty();
    }
}

