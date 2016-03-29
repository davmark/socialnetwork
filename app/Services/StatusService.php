<?php

namespace App\Services;
use Auth;

class StatusService
{

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