<?php

namespace App\Events;

use App\Models\Application;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class ApplicationUpdatedEvent implements ShouldQueue
{
    use Dispatchable, SerializesModels;

    public Application $application;

    public array $request;

    public function __construct(Application $application, array $request)
    {
        $this->request = $request;
        $this->application = $application;
    }
}
