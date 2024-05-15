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
        Schema::create('_result', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('exams_id');
            $table->string('exams_title');
            $table->string('code');
            $table->string('grade');
            $table->string('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_result');
    }
};
