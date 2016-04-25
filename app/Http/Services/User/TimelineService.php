<?php
namespace App\Http\Services\User;
use App\Models\Statuse;
use App\Models\StatuseReply;

class TimelineService
{
    use \App\Http\Traits\CRUDTrait;
    /**
     * Private property for Friend model
     * 
     * @var $status,$statuseReply
     */
    private $status, $statusReply,$model;

    /**
     * Create a new TimelineService service instance.
     * 
     * @param Statuse $status
     * @return void
     */
    public function __construct( Statuse $status, StatuseReply $statuseReply )
    {
        $this->status       = $status;
        $this->statuseReply = $statuseReply;
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
