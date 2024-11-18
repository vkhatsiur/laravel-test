<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tv_shows', function (Blueprint $table) {
            $table->id();
            $table->string('external_id')->unique();
            $table->string('name');
            $table->string('poster_url');
            $table->date('first_air_date');
            $table->float('vote_average');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tv_shows');
    }
};
