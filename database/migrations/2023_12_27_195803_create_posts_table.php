<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('description');
            $table->integer('views_count')->default(0);
            $table->integer('likes_count')->default(0);
            $table->text('meta_data')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('is_published')->default(false);
            $table->dateTime('posted_at')->nullable();
            $table->integer('category_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
