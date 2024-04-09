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
        Schema::create('file', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('path', 500);
            $table->string('extension', 20);
            $table->integer('size');
            $table->string('mime_type', 100)->nullable();
            $table->string('storage', 50);
            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file');
    }
};
