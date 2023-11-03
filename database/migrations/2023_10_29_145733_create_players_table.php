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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('long_name');
            $table->string('gender')->length(5);
            $table->string('image_url');
            $table->string('headshot_image_url');
            $table->timestamp('dob');
            $table->timestamp('dod');
            $table->unsignedBigInteger('country_team_id');
            $table->foreign('country_team_id', 'custom_foreign_key_name')->references('id')->on('teams');
            // $table->foreign('country_team_id')->references('id')->on('teams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
