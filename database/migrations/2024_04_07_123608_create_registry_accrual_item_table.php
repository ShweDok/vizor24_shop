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
        Schema::create('registry_accrual_item', function (Blueprint $table) {
            $table->id();

            $table->string('account_number', 100)->nullable();
            $table->string('account_number_other', 255)->nullable();
            $table->string('branch', 10)->nullable();
            $table->string('fio', 255)->nullable();
            $table->string('f', 150)->nullable();
            $table->string('i', 150)->nullable();
            $table->string('o', 150)->nullable();
            $table->string('address')->nullable();
            $table->string('address_fias_code', 100)->nullable();
            $table->string('address_other_code', 100)->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_street_prefix', 20)->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_house', 20)->nullable();
            $table->string('address_house_letter', 20)->nullable();
            $table->string('address_house_building', 20)->nullable();
            $table->string('address_flat', 20)->nullable();
            $table->string('address_flat_room', 20)->nullable();
            $table->date('period_date')->nullable();
            $table->string('period_month', 10)->nullable();
            $table->string('period_mmyy', 10)->nullable();
            $table->decimal('saldo', 16, 2)->nullable();
            $table->decimal('calc', 16, 2)->nullable();
            $table->string('service', 20)->nullable();
            $table->string('object_id', 20)->nullable();
            $table->json('other_fields_json')->nullable();
            $table->unsignedBigInteger('external_provider_id')->nullable();

            $table->unsignedBigInteger('id_registry_accrual')->unsigned()
                ->comment('Указатель на реестр которому принадлежит данная строка');
            $table->foreign('id_registry_accrual')->references('id')->on('registry_accrual')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registry_accrual_item');
    }
};
