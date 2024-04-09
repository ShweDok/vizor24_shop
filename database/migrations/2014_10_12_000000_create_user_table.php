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
        Schema::create('user', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->boolean('enabled')->default(1);

            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('login')->unique()->nullable();


            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('email_verify_code')->nullable();
            $table->timestamp('email_to_verify')->nullable();

            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('phone_verify_code')->nullable();
            $table->timestamp('phone_to_verify')->nullable();

            $table->string('password');

            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
