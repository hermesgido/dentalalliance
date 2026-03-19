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
        Schema::table('alliance_members', function (Blueprint $table) {
            $table->string('source_page')->nullable()->after('message');
            $table->string('source_section')->nullable()->after('source_page');
            $table->string('source_button')->nullable()->after('source_section');
            $table->string('source_program_slug')->nullable()->after('source_button');
            $table->string('source_program_title')->nullable()->after('source_program_slug');
            $table->text('source_url')->nullable()->after('source_program_title');
            $table->text('referrer_url')->nullable()->after('source_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alliance_members', function (Blueprint $table) {
            $table->dropColumn([
                'source_page',
                'source_section',
                'source_button',
                'source_program_slug',
                'source_program_title',
                'source_url',
                'referrer_url',
            ]);
        });
    }
};
