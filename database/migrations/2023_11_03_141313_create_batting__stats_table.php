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
            $table->foreign('player_id','custom_foreign_keyname')->references('id')->on('players');
            $table->string('match-format');
            $table->integer('matches');
            $table->integer('innings');
            $table->integer('notouts');
            $table->unsignedBigInteger('runs');
            $table->integer('high_score');
            $table->double('average');
            $table->integer('balls_faced');
            $table->double('strike_rate');
            $table->integer('hundreds');
            $table->integer('fifties');
            $table->integer('fours');
            $table->integer('sixes');
            $table->integer('catches');
            $table->integer('stumps');
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
