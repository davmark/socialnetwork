<?php
namespace App\Http\Services\User;
use App\Models\Statuse;
use App\Models\StatuseReply;

class TimelineService
{
    /**
     * Private property for Friend model
     * 
     * @var $status,$statuseReply
     */
    private $status, $statusReply;

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
    
}

