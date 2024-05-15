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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->nullable();
            $table->foreignId('answer_id')->nullable();
            $table->foreignId('result_id')->nullable();
            $table->string('title');
            $table->string('code');
            $table->string('duration');
            $table->timestamps();
        });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
