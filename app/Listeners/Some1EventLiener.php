<?php

namespace App\Listeners;

use App\Events\Some1Event;
use App\Events\Some2Event;

class Some1EventLiener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(Some1Event $event)
    {
        dd($event);
    }
}