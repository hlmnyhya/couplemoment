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
        Schema::create('greetings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kehadiran', ['hadir', 'berhalangan']);
            $table->text('ucapan_doa');
            $table->timestamps();
        });

        Schema::create('invitation_greetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invitation_id');
            $table->unsignedBigInteger('greetings_id');
            $table->foreign('invitation_id')->references('id')->on('invitations')->onDelete('cascade');
            $table->foreign('greetings_id')->references('id')->on('greetings')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitation_greetings');
        Schema::dropIfExists('greetings');
    }
};
