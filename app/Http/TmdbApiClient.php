<?php

namespace App\Http;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class TmdbApiClient
{
    private PendingRequest $client;

    function __construct(PendingRequest $client)
    {

        $this->client = $client;
    }

    public function getPremierTvShows(int $year = 2024) : ?Collection
    {
        try {
            $response = $this->client->get('{+endpoint}/discover/tv', [
                'first_air_date_year' => $year,
                'include_adult' => 'false',
                'include_null_first_air_dates' => 'false',
                'language' => 'en-US',
                'page' => 1,
                'sort_by' => 'popularity.desc'
            ]);
        }
        catch (\Exception $e) {
            Log::warning($e->getMessage());
            return null;
        }

        return $response->successful() ? collect($response->json()['results']) : null;
    }

    public function getTrendingTvShows() : ?Collection
    {
        try {
            $response = $this->client->get('{+endpoint}/trending/tv/week', [
                'language' => 'en-US'
            ]);
        }
        catch (\Exception $e) {
            Log::warning($e->getMessage());
            return null;
        }

        return $response->successful() ? collect($response->json()['results']) : null;
    }
}
