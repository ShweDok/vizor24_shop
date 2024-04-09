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
        Schema::create('registry_payment', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable()
                ->comment('Название реестра');

            $table->string('description')->nullable()
                ->comment('Описание реестра');

            $table->datetime('datetime_begin')->nullable()
                ->comment('ДатаВремя начала периода реестра');

            $table->datetime('datetime_end')->nullable()
                ->comment('ДатаВремя окончания периода реестра');

            $table->decimal('amount', 16, 2)->default(0)
                ->comment('Сумма реестра');

            $table->integer('count')->default(0)
                ->comment('Количество записей реестра');

            $table->enum('period', ['day', 'week', 'month', 'year', 'custom'])
                ->comment('Тип периода, за который создан реестр оплаты');

            $table->unsignedBigInteger('id_provider')->unsigned()
                ->comment('Указатель на поставщика которому принадлежит реестр');
            $table->foreign('id_provider')->references('id')->on('provider')
                ->noActionOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('id_file')->unsigned()
                ->comment('Указатель на файл реестра в хранилище');
            $table->foreign('id_file')->references('id')->on('file')
                ->noActionOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registry_payment');
    }
};
