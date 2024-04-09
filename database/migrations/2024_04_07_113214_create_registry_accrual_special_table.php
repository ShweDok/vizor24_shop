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
        Schema::create('registry_accrual_special', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable()
                ->comment('Название реестра');

            $table->string('description')->nullable()
                ->comment('Описание реестра');

            $table->enum('create_method', ['email', 'telegram', 'upload', 'manual', 'other'])->nullable()
                ->comment('Способ создания реестра');

            $table->enum('process_status', ['created', 'processed', 'success', 'warning', 'error'])->nullable()
                ->comment('Статус обработки реестра');

            $table->text('process_result')->nullable()
                ->comment('Описание результатов обработки реестра');

            $table->datetime('process_datetime_start')->nullable()
                ->comment('Время начала обработки реестра');

            $table->datetime('process_datetime_stop')->nullable()
                ->comment('Время окончания обработки реестра');

            $table->integer('process_count_all')->nullable()
                ->comment('Количество записей в реестре всего');

            $table->integer('process_count_current')->nullable()
                ->comment('Количество записей в реестре обработано');


            $table->bigInteger('id_provider')->unsigned()
                ->comment('Указатель на поставщика услуг');
            $table->foreign('id_provider')->references('id')->on('provider')
                ->cascadeOnUpdate()->noActionOnDelete();

            $table->bigInteger('id_service')->unsigned()
                ->comment('Указатель на услугу поставщика услуг');
            $table->foreign('id_service')->references('id')->on('service')
                ->cascadeOnUpdate()->noActionOnDelete();

            $table->bigInteger('id_user')->unsigned()
                ->comment('Указатель на пользователя, который добавил реестр');
            $table->foreign('id_user')->references('id')->on('user')
                ->cascadeOnUpdate()->noActionOnDelete();

            $table->unsignedBigInteger('id_file')
                ->comment('Указатель на файл реестра в файловом хранилище');
            $table->foreign('id_file')->references('id')->on('file')
                ->cascadeOnUpdate()->noActionOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registry_accrual_special');
    }
};
