<?php

namespace App\Console;

use App\Jobs\AttendanceCheckIn;
use App\Jobs\DeactivateCourseStudent;
use App\Jobs\InvoiceDue;
use App\Jobs\MonthlyGenerateInvoice;
use App\Jobs\OutstandingBeforeClass;
use App\Jobs\PaymentGatewayCheck;
use App\Jobs\ReferralCalculation;
use App\Jobs\YearlyUpgradeLevel;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->job(new ReferralCalculation)->dailyAt('00:00')->withoutOverlapping();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
