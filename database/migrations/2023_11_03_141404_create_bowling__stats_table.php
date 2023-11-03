<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bowling__stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->string('match-format');
            $table->int('matches');
            $table->int('innings');
            $table->int('balls');
            $table->int('runs');
            $table->int('wickets');
            $table->double('average');
            $table->double('economy');
            $table->double('strike_rate');
            $table->int('four_wicket_hauls');
            $table->int('five_wicket_hauls');
            $table->int('ten_wicket_hauls');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bowling__stats');
    }
};
