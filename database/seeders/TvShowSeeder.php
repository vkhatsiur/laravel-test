<?php

namespace Database\Seeders;

use App\Models\TvShow;
use Illuminate\Database\Seeder;

class TvShowSeeder extends Seeder
{
    public function run(): void
    {
        TvShow::factory()->count(20)->create();
    }
}
