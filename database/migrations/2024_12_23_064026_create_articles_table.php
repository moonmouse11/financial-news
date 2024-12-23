<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('complexity', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
        });

        Schema::create('categories', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('articles', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->string('slug')->unique();
            $table->string('image')->nullable(true);
            $table->foreignId('complexity_id')->nullable(true)->references('id')
                ->on('complexity')->nullOnDelete();
            $table->foreignId('author_id')->references('id')
                ->on('users');
            $table->foreignId('category_id')->nullable(true)->references('id')
                ->on('categories')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tags', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('article_tag', static function (Blueprint $table) {
            $table->foreignId('article_id')->references('id')
                ->on('articles')->cascadeOnDelete();
            $table->foreignId('tag_id')->references('id')
                ->on('tags')->cascadeOnDelete();
        });

        Schema::create('photos', static function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('article_id')->references('id')
                ->on('articles')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('photos');
        Schema::dropIfExists('article_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('complexity');
    }
};
