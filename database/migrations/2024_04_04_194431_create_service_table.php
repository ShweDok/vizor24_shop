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
        Schema::create('service', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100)
                ->comment('Название Услуги');
            $table->string('name', 100)
                ->comment('Название название услуги для пользователей');
            $table->string('description')->nullable()
                ->comment('Описание');
            $table->text('info')->nullable()
                ->comment('Расширенное описание');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
