<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('subjects', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();
        });

        Schema::create('lessons', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('body');
            $table->integer('parent_id')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('author_id')->references('id')
                ->on('users')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('courses', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->foreignId('author_id')->references('id')
                ->on('users')->cascadeOnDelete();
            $table->foreignId('subject_id')->references('id')
                ->on('subjects')->cascadeOnDelete();
            $table->foreignId('lesson_id')->references('id')
                ->on('lessons')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('lessons');
    }
};
