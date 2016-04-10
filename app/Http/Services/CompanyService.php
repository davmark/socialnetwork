<?php
namespace App\Http\Services;
use App\Http\Services\BaseService;

use App\Models\Company;

class CompanyService extends BaseService
{
    private $model;
    /**
     * Create a new UserService service instance.
     *
     * @return void
     */
    public function __construct(Company $model)
    {
        $this->model = $model;
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

