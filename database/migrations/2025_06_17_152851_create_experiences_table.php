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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
              $table->string('title');
             $table->string('company');
            $table->string('location')->nullable();
             $table->string('duration');
             $table->json('highlights')->nullable(); // store list of achievements
             $table->string('color')->nullable(); // optional (e.g. 'blue', 'green')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
