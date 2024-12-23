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
        Schema::create('categories', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();
        });

        Schema::create('lessons', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('body');
            $table->softDeletes();
        });

        Schema::create('chapters', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->softDeletes();
        });

        Schema::create('courses', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->foreignId('author_id')->references('id')->on('users');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreignId('chapter_id')->references('id')->on('chapters')->onDelete('set null');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('chapters', function (Blueprint $table) {
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade');
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->foreignId('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('chapters');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('courses');
    }
};
