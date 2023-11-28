<?php

namespace App\Events;

use App\Models\Application;
use Illuminate\Foundation\Events\Dispatchable;

class ApplicationCreatedEvent
{
    use Dispatchable;

    public Application $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }
}
