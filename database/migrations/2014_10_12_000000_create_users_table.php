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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exams_id')->nullable();
            $table->foreignId('result_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('DOB')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    //'first_name',
    //    'last_name',
     //   'email',
      //  'phone_number',
      //  'DOB',
        //'address',
        //'password',

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
