<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('slug')->nullable();
            $table->string('main_image')->nullable();
            $table->string('image_alt')->nullable();
            $table->boolean('is_published')->default(false);
            $table->dateTime('posted_at')->nullable();
            $table->integer('category_id')->nullable();
            $table->index('slug');
            $table->index('is_published');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
