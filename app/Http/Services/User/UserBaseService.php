<?php
namespace App\Http\Services\User;
use App\Models\Status;
use App\Models\StatusReply;

class TimelineService
{
    /**
     * Private property for Friend model
     * 
     * @var $status,$statusReply
     */
    private $status, $statusReply;

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
    
}

