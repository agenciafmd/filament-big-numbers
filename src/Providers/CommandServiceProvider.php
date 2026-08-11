<?php

declare(strict_types=1);

namespace Agenciafmd\BigNumbers\Providers;

use Agenciafmd\BigNumbers\Models\BigNumber;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;

final class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            //
        ]);

        $this->app->booted(function () {
            $schedule = $this->app->make(Schedule::class);
            $minutes = config('filament-admix.schedule.minutes');

            $schedule->command('model:prune', [
                '--model' => [
                    BigNumber::class,
                ],
            ])->dailyAt("03:{$minutes}");
        });
    }
}
