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
        Schema::create('_question', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exams_id');
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
            $table->string('q4');
            $table->string('q5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_question');
    }
};
