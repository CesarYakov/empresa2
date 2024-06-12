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
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->char('cPerApellido', 50)->nullable()->index('persona_cperapellido_index');
            $table->char('cPerNombre', 50)->nullable()->index('persona_cpernombre_index');
            $table->string('cPerDireccion')->nullable();
            $table->date('dPerFechNac');
            $table->integer('nPerEdad');
            $table->char('cPerSexo', 15)->nullable()->default('Masculino');
            $table->decimal('cPerSueldo', 6, 2);
            $table->string('cPerRnd', 50);
            $table->char('nPerEstado', 1)->nullable()->default('1');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps(); // This creates both created_at and updated_at columns as nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
