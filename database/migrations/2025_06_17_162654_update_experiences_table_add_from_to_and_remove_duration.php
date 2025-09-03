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
         Schema::table('experiences', function (Blueprint $table) {
        // $table->dropColumn('duration'); // Remove old
        $table->date('from')->nullable()->after('location'); // Add new
        $table->date('to')->nullable()->after('from');
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
        $table->dropColumn(['from', 'to']);
        $table->string('duration')->nullable(); // restore if rolled back
    });
}
};
