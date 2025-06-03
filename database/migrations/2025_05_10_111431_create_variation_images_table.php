<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('variation_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variation_id')->constrained('variations')->onDelete('cascade');
            $table->string('image_path', 255); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('variation_images');
    }
};
