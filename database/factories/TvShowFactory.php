<?php

namespace Database\Factories;

use App\Models\TvShow;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TvShowFactory extends Factory
{
    protected $model = TvShow::class;

    public function definition(): array
    {
        return [
            'external_id' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'poster_url' => $this->faker->imageUrl(),
            'first_air_date' => Carbon::now(),
            'vote_average' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
