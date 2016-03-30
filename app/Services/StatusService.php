<?php

namespace App\Services;
use Auth;
use App\Models\Status;

class StatusService
{
    private $status;
    public function __construct(Status $status)
    {
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
        return Auth::user()->statuses()->create([
                    'body' => $status
                ]);
    }


    public function createReplyStatus($status){

        return Auth::user()->statuses()->create([
            'body' => $status
        ]);

    }

}