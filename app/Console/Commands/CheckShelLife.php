<?php

namespace App\Console\Commands;

use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckShelLife extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:shelf-life';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checking the shelf life';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $applications = Application::query()
            ->where('status', Application::STATUS_NEW)
            ->get();

        if ($applications->isEmpty())
            return Command::INVALID;

        foreach ($applications as $application) {
            $nowTime = now('Asia/Almaty')->format('Y-m-d');
            $applicationTime = Carbon::make($application->created_at)
                ->addDays(5)
                ->timezone('Asia/Almaty')->format('Y-m-d');
            $checkDate = Carbon::make($applicationTime)->getTimestamp() >= Carbon::make($nowTime)->getTimestamp();
            if (!$checkDate) {
                # удаляем по истечении 5 дней
                $application->delete();
            }
        }

        return Command::SUCCESS;
    }
}
