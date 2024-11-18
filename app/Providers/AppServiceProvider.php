<?php

namespace App\Providers;

use App\Http\TmdbApiClient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(TmdbApiClient::class, function () {
            $api_token = config('services.tmdb.api_token');
            $client = Http::withUrlParameters([
                'endpoint' => config('services.tmdb.base_url'),
            ])->withHeaders([
                'Authorization' => "Bearer $api_token",
                'accept' => 'application/json',
            ]);

            return new TmdbApiClient($client);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
    }
}
