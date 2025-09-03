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
        Schema::create('educations', function (Blueprint $table) {
             $table->id();
    $table->string('title'); // e.g., B.E. in Computer Science
    $table->string('institution'); // e.g., XYZ College
    $table->string('duration'); // e.g., 2015–2019
    $table->json('highlights')->nullable(); // e.g., list of achievements
    $table->string('type')->default('education'); // education / certification
    $table->string('border_color')->nullable(); // e.g., indigo / green
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
