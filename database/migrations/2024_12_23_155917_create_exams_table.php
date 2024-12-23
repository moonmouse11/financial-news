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
        Schema::create('exams', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->text('body');
            $table->string('slug')->unique();
            $table->foreignId('complexity_id')->nullable(true)->references('id')
                ->on('complexity')->onDelete('set null');
            $table->foreignId('course_id')->references('id')
                ->on('courses')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tasks', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->json('answers');
            $table->foreignId('exam_id')->references('id')
                ->on('exams')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('results', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')
                ->on('users')->cascadeOnDelete();
            $table->foreignId('exam_id')->references('id')
                ->on('exams')->cascadeOnDelete();
            $table->integer('score')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('results');
        Schema::dropIfExists('exams');
    }
};
