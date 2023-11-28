<?php

namespace App\Console\Commands;

use App\Models\Application;
use Illuminate\Console\Command;

class RemoveOldApplicationCommand extends Command
{
    protected $signature = 'remove:old-application';

    protected $description = 'Remove old application';

    public function handle(): int
    {
        $this->info('Removing old application...');

        $applications = Application::where('created_at', '<', now()->subDays(5))
            ->where('status', Application::STATUS_NEW)
            ->get();

        if ($applications->count() < 1){
            $this->error('No old application found!');
            return 0;
        }

        foreach ($applications as $app) {
            $this->info("Removing application: $app->id, ($app->phone) ({$app->created_at->diffForHumans()})");
            $app->sendSms()->delete();
            $app->delete();
        }

        $this->info('Old application removed!');
        return 0;
    }
}
