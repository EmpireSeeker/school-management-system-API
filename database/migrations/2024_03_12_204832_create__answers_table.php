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
        Schema::create('_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exams_id');
            $table->string('a1');
            $table->string('a2');
            $table->string('a3');
            $table->string('a4');
            $table->string('a5');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_answers');
    }
};
