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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('section_heading')->nullable();
            $table->string('slug')->unique();
            $table->string('author')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('image')->nullable();
            $table->foreignId('post_section_id')->nullable()->constrained('post_sections')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
