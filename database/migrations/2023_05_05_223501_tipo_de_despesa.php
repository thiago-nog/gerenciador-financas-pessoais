<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_de_despesas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->integer('tipo_despesa_id')->nullable();
            $table->varchar('descricao', 100)->nullable();
            $table->integer('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
