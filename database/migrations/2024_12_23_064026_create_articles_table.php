<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complexity', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
        });

        Schema::create('articles', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->string('slug')->unique();
            $table->foreignId('complexity_id')->nullable(true)->references('id')
                ->on('complexity')->onDelete('set null');
            $table->foreignId('author_id')->references('id')
                ->on('users');
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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('complexity');
    }
};
