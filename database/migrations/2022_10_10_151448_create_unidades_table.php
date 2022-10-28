<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedTinyInteger('ht');
            $table->unsignedTinyInteger('hp');
            $table->foreignId('asignatura_id')
                ->constrained('asignaturas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('objetivo');
            $table->text('resultado_aprendizaje');
            $table->text('secuencia_aprendizaje');
            $table->string('espacios_formativos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades');
    }
};
