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
        Schema::table('program_modules', function (Blueprint $table) {
            $table->string('delivery_mode', 20)->default('in_person')->after('map_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_modules', function (Blueprint $table) {
            $table->dropColumn('delivery_mode');
        });
    }
};
