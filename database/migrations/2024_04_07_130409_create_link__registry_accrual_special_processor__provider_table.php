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
        Schema::create('link__registry_accrual_special_processor__provider', function (Blueprint $table) {
            $table->id();

            $table->string('title')
                ->comment('Название обработчика для поставщика');

            $table->string('description')->nullable()
                ->comment('Описание обработчика для поставщика');

            $table->unsignedBigInteger('id_provider')->unsigned()
                ->comment('Указатель на поставщика');
            $table->foreign('id_provider', 'l__rasp_provider_id_provider_foreign')->references('id')->on('provider')
                ->cascadeOnUpdate()->cascadeOnUpdate();

            $table->unsignedBigInteger('id_registclry_accrual_special_processor')->unsigned()
                ->comment('Указатель на обработчик');
            $table->foreign('id_registry_accrual_special_processor', 'l__rasp_processor_id_processor_foreign')->references('id')->on('registry_accrual_special_processor')
                ->cascadeOnUpdate()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link__registry_accrual_special_processor__provider');
    }
};
