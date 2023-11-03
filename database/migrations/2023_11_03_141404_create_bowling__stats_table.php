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
            $table->foreign('player_id', 'custom__foreign__key__name')->references('id')->on('players');
            $table->string('match-format');
            $table->integer('matches');
            $table->integer('innings');
            $table->integer('balls');
            $table->integer('runs');
            $table->integer('wickets');
            $table->double('average');
            $table->double('economy');
            $table->double('strike_rate');
            $table->integer('four_wicket_hauls');
            $table->integer('five_wicket_hauls');
            $table->integer('ten_wicket_hauls');
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
