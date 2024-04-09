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
        Schema::create('column', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100)->comment('Название колонки');
            $table->string('slug', 100)->comment('Название латинскими буквами без пробелов, для идентификации программой');
            $table->string('type', 20)->nullable()->comment('Тип пол');
            $table->boolean('nullable')->nullable();

            $table->bigInteger('id_set_column')->unsigned()
                ->comment('Указатель на набор колонок');
            $table->foreign('id_set_column')->references('id')->on('set_column')
                ->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('column');
    }
};
