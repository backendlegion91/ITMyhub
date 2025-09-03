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
           Schema::table('skills', function (Blueprint $table) {
            // Add columns if they don't exist
            if (!Schema::hasColumn('skills', 'category')) {
                $table->string('category')->after('id');
            }
            if (!Schema::hasColumn('skills', 'name')) {
                $table->string('name')->after('category');
            }
            if (!Schema::hasColumn('skills', 'icon')) {
                $table->string('icon')->nullable()->after('name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn(['category', 'name', 'icon']);
        });
    }
};
