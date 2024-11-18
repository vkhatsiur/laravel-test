<?php

namespace App\Jobs;

use App\Http\TmdbApiClient;
use App\Models\TvShow;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use function PHPSTORM_META\map;

class TmdbTrendingTvShowsSyncJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function handle(TmdbApiClient $tmdbApiClient): void
    {
       $tvShows = $tmdbApiClient->getTrendingTvShows();
        if ($tvShows->isNotEmpty()) {
            $tvShowsData = $this->mapToTvShows($tvShows);
            TvShow::insert($tvShowsData);
        }
    }

    private function mapToTvShows($tvShows): array
    {
        return $tvShows->map(function ($tvShow) {
            return [
                'external_id' => $tvShow['id'],
                'name' => $tvShow['name'],
                'poster_url' => 'https://image.tmdb.org/t/p/original' . $tvShow['poster_path'],
                'first_air_date' => $tvShow['first_air_date'],
                'vote_average' => $tvShow['vote_average']
            ];
        })->toArray();
    }
}
