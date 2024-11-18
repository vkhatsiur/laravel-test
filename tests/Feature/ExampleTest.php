<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\TmdbApiClient;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_tmdb_client_return_null_when_api_token_is_invalid(): void
    {
        $api_token = 'invalid_token';
        $client = Http::withUrlParameters([
            'endpoint' => 'https://api.themoviedb.org/3',
        ])->withHeaders([
            'Authorization' => "Bearer $api_token",
            'accept' => 'application/json',
        ]);

        $tmdbClient = new TmdbApiClient($client);
        $response = $tmdbClient->getTrendingTvShows();

        $this->assertNull($response);
    }
}
