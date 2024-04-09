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
        Schema::create('link__provider__user', function (Blueprint $table) {
            $table->id();

            $table->enum('access_provider', ['none', 'read', 'write'])->default('none');
            $table->enum('access_payment', ['none', 'read', 'write'])->default('none');
            $table->enum('access_accrual', ['none', 'read', 'write'])->default('none');

            $table->string('description')->nullable();

            $table->unsignedBigInteger('id_provider')->unsigned()
                ->comment('Указатель на поставщика');
            $table->foreign('id_provider')->references('id')->on('provider')
                ->cascadeOnUpdate()->cascadeOnUpdate();

            $table->unsignedBigInteger('id_user')->unsigned()
                ->comment('Указатель на пользователя');
            $table->foreign('id_user')->references('id')->on('user')
                ->cascadeOnUpdate()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link__provider__user');
    }
};
