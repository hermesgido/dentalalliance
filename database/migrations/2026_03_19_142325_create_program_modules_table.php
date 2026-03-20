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
        Schema::create('program_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug');
            $table->string('cover_image')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('summary')->nullable();
            $table->text('lead')->nullable();
            $table->text('intro')->nullable();
            $table->json('participation_items')->nullable();
            $table->json('registration_steps')->nullable();
            $table->text('highlights_intro')->nullable();
            $table->json('highlights_items')->nullable();
            $table->string('status_label')->nullable();
            $table->string('status_style')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->string('location_name')->nullable();
            $table->string('location_address')->nullable();
            $table->text('map_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();

            $table->unique(['program_id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_modules');
    }
};
