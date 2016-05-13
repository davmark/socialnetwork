<?php
namespace App\Http\Services\User;

use App\Models\Status;
use App\Models\StatusReply;

class StatusService
{
    use \App\Http\Traits\CRUDTrait;

    public $model,$status,$statusReply;

    /**
     * Initialize property
     * 
     * @param Status $status
     * @param StatusReply $statusReply
     */
    public function __construct( Status $status, StatusReply $statusReply ) 
    {
        $this->status = $status;
        $this->statusReply = $statusReply;
    }

    /**
     * Initialize model property
     * 
     * @param string $model
     * @return 
     */
    public function setModel($model) 
    {
        $this->model = $this->$model;
    }
}