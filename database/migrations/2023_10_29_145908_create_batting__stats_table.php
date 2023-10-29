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
        Schema::create('batting__stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->string('match_format');
            $table->integer('innings');
            $table->integer('balls');
            $table->integer('runs');
            $table->integer('wickets');
            $table->string('best_bowling_innings');
            $table->string('best_bowling_match');
            $table->double('average');
            $table->double('economy');
            $table->double('strike_rate');
            $table->integer('four_wicket_hauls');
            $table->integer('five_wicket_hauls');
            $table->integer('ten_wicket_hauls');
            $table->date('matches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batting__stats');
    }
};
