<?php

use App\Jobs\TmdbTrendingTvShowsSyncJob;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::job(TmdbTrendingTvShowsSyncJob::class)->weeklyOn(1, '5:00');
