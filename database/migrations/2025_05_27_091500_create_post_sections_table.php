<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('post_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')
                ->nullable()
                ->constrained()
                ->onDelete('cascade');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_sections');
    }
};
