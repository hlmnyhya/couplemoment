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
        Schema::create('sound_banks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('singer')->nullable();
            $table->string('duration')->nullable();
            $table->string('file_mp3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sound_banks');
    }
};
