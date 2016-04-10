<?php
namespace App\Http\Services;
use App\Http\Services\BaseService;

use App\Models\Festival;

class FestivalService extends BaseService
{
    /**
     * Create a new FestivalService service instance.
     *
     * @return void
     */
    public function __construct(Festival $model)
    {
        $this->user = $model;
    }

    /**
     * Get user bay email
     * 
     * @param String $email
     * @return Festival|Boolean
     */
    public function getByEmail($email)
    {
        return $this->user->where('email',$email)->first();
    }
    /**
     * Get user bay email
     * 
     * @param String $email
     * @return Festival|Boolean
     */
    public function create($data)
    {
        return $this->user->create($data);
    }
}

