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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('advanced-clinical-training');
            $table->string('cover_image')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('summary')->nullable();
            $table->text('description')->nullable();
            $table->text('lead')->nullable();
            $table->text('intro')->nullable();
            $table->json('participation_items')->nullable();
            $table->json('registration_steps')->nullable();
            $table->text('highlights_intro')->nullable();
            $table->json('highlights_items')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->string('location_name')->nullable();
            $table->string('location_address')->nullable();
            $table->text('map_url')->nullable();
            $table->boolean('has_modules')->default(false);
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
