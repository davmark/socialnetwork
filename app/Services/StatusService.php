<?php

namespace App\Services;
use App\Services\BaseService;
use App\Models\Status;
use Auth,Image;

class StatusService extends BaseService
{
    private $status;
    public function __construct(Status $status)
    {
        parent::__construct();
        $this->status = $status;
    }

    /**
     * Get status by id
     *
     * @param Integer $id
     * @return Status|boolean
     */
    public function getById($id)
    {
        return $this->status->find($id);
    }

    /**
     * Creating Status for user timeline
     *
     * @param String $status
     * @return String|boolean
     */
    public function createStatus($status)
    {
        dd($status);
        return Auth::user()->statuses()->create([
                    'body' => $status
                ]);
    }

    /**
     * Cretae replay for status
     * 
     * @param String $status
     * @return type
     */
    public function createReplyStatus($status){

        return Auth::user()->statuses()->create([
            'body' => $status
        ]);

    }

    /**
     * Deleting status by id
     * 
     * @param type $id
     */
    public function deleteById($id)
    {
        $status = $this->status->find($id);
        if( $status )
        {
            if( $status->delete() )
            {
                $this->status->where('parent_id', $status->id)->delete();
                return true;
            }
        }
        return false;
    }

    /**
     * Deleting status by id
     * 
     * @param type $id
     */
    public function updateById($status,$id)
    {
        return $this->status->find($id)->update($status);
    }
}