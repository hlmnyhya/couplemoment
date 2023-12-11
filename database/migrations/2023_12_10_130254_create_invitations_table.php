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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->integer('theme_id')->unsigned();
            $table->string('title_invitation')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('language')->nullable();
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->date('date_invitation');
            $table->time('time_invitation');
            $table->string('timezone')->nullable();
            $table->string('address_invitation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
