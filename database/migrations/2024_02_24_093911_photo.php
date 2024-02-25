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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallery_id');
            $table->string('file_name');
            $table->string('file_path');
            $table->boolean('is_title_photo')->default(false);
            $table->boolean('is_primary_photo')->default(false);
            $table->boolean('is_groom_photo')->default(false);
            $table->boolean('is_bride_photo')->default(false);
            $table->timestamps();

            // Tambahkan kunci asing
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
