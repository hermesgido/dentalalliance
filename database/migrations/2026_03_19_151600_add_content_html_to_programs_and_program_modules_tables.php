<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->longText('content_html')->nullable()->after('intro');
        });

        Schema::table('program_modules', function (Blueprint $table) {
            $table->longText('content_html')->nullable()->after('intro');
        });
    }

    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn('content_html');
        });

        Schema::table('program_modules', function (Blueprint $table) {
            $table->dropColumn('content_html');
        });
    }
};
