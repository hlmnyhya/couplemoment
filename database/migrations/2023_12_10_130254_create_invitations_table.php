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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('theme_id')->unsigned();
            $table->integer('soundbank_id')->unsigned();
            $table->string('title_invitation')->nullable();
            $table->string('name')->nullable();
            $table->string('name2')->nullable();
            $table->string('wali_name')->nullable();
            $table->string('wali_name2')->nullable();
            $table->string('code')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->string('language')->nullable();
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->date('date_invitation');
            $table->time('time_invitation');
            $table->string('timezone')->nullable();
            $table->string('address_invitation')->nullable();
            $table->string('address_url')->nullable();
            $table->string('address_maps')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('name_rekening')->nullable();
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
