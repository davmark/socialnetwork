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
    public function beforeSave($data, $role = 'user')
    {
        if($role == 'user')
            $data['username'] = strtolower($data['first_name']).'_'.strtolower($data['last_name']);
        else
            $data['username'] = strtolower($data['name']);
        $data['password'] = bcrypt($data['password']);
        if(!$this->getUserByData(['username'=>$data['username']])->isEmpty())
            return ['success'=>false,'message'=>$data['first_name'].' '.$data['last_name'].' user already exist'];
        return $data;
    }

    /**
     * Get All User|Company|Festival
     * 
     * @return User|Company|Festival
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Get By id User|Company|Festival
     * 
     * @return User|Company|Festival
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get user by username
     * 
     * @param string $firstName
     * @param string $lastName
     * @return boolean
     */
    public function getByUsername($authUserId,$username)
    {
        $search = $search1 = [];
        if( count($info = explode(' ', $username)) > 1 )
        {
           $search['first_name'] = $info[0];
           $search['last_name'] = $info[1];
           
           $search1['first_name'] = $info[1];
           $search1['last_name'] = $info[0];
        }else
           $search['username'] = $username;
        return  $this->model
                    ->where('id','<>',$authUserId)
                    ->where($search)
                    ->orWhere($search1)
                    ->get();
    }

    /**
     * Get user by data
     * 
     * @param array $data
     * @return boolean
     */
    public function getUserByData(array $data)
    {
        return $this->model
                ->where($data)
                ->get();
    }

    /**
     * Update user info by id
     * 
     * @param int $userId
     * @param array $data
     * @return bollean
     */
    public function updateById($userId, $data)
    {
        if(isset($data['first_name']))
            $data['username'] = strtolower($data['first_name']).strtolower($data['last_name']);
        else
            $data['username'] = strtolower($data['name']);
        return $this->model
                ->find($userId)
                ->update($data);
    }

    /**
     * Update user info by id
     * 
     * @param int $userId
     * @param array $data
     * @return bollean
     */
    public function changePasswordById($userId,$password)
    {
        $password = bcrypt($password);
        return $this->model
                ->find($userId)
                ->update(['password'=>$password]);
    }

    /**
     * Get model bay email
     * 
     * @param String $email
     * @return User|Boolean
     */
    public function getByEmail($email)
    {
        return $this->model->where('email',$email)->first();
    }

    /**
     * Get model bay email
     * 
     * @param String $email
     * @return User|Boolean
     */
    public function create($data)
    {
        return $this->model->create($data);
    }
}