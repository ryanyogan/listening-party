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
        Schema::create('listening_parties', function (Blueprint $table) {
            $table->id();
            $table->foreignId("episode_id")->constrained()->cascadeOnUpdate();
            $table->string("name");
            $table->dateTime("start_time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listening_parties');
    }
};
