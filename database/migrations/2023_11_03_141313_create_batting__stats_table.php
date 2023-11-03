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
            $table->string('match-format');
            $table->int('matches');
            $table->int('innings');
            $table->int('notouts');
            $table->unsignedBigInteger('runs');
            $table->int('high_score');
            $table->double('average');
            $table->int('balls_faced');
            $table->double('strike_rate');
            $table->int('hundreds');
            $table->int('fifties');
            $table->int('fours');
            $table->int('sixes');
            $table->int('catches');
            $table->int('stumps');
            $table->boolean('batsman_out');
            $table->timestamps();
        });
    }

    //	average	balls_faced	strike_rate	hundreds	fifties	fours	sixes	catches	stumps	batsman_out

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batting__stats');
    }
};
