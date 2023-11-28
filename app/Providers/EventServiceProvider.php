<?php

namespace App\Providers;

use App\Events\ApplicationCreatedEvent;
use App\Events\ApplicationUpdatedEvent;
use App\Listeners\BitrixCreateListener;
use App\Listeners\SyncBitrixListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ApplicationCreatedEvent::class => [
            BitrixCreateListener::class,
        ],

        ApplicationUpdatedEvent::class => [
            SyncBitrixListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
