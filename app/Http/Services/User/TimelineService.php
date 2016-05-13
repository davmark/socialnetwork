<?php
namespace App\Http\Services\User;
use App\Models\Status;
use App\Models\StatusReply;

class TimelineService
{
    use \App\Http\Traits\CRUDTrait;
    /**
     * Private property for Friend model
     * 
     * @var $status,$statusReply
     */
    private $status, $statusReply,$model;

    /**
     * Create a new TimelineService service instance.
     * 
     * @param Status $status
     * @return void
     */
    public function __construct( Status $status, StatusReply $statusReply )
    {
        $this->status       = $status;
        $this->statusReply  = $statusReply;
    }

    /**
     * Inicialize $model property
     * 
     * @param string $model
     */
    public function setModel( $model )
    {
        $this->model = $this->$model;
    }

    /**
     * Inicialize $model property
     * 
     * @param string $model
     */
    public function getLastStatus( $user )
    {
        $lastStatus = $this->status
                        ->where('user_id',$user->id)
                        ->orderBy('id','DESC')
                        ->first();
        return $lastStatus;
    }
}
