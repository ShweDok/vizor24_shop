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
        Schema::create('provider', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('name');
            $table->string('description')->nullable();
            $table->text('info')->nullable();
            $table->bigInteger('external_id')->nullable();
            $table->json('settings_json')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider');
    }
};
