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
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 100)->nullable()->default('text');
            $table->biginteger('creditos')->unsigned()->nullable();
            $table->string('docente')->nullable()->default('text');
            $table->string('prerrequisito', 100)->nullable()->default('text');
            $table->biginteger('horasTA')->unsigned()->nullable();
            $table->biginteger('horasTD')->unsigned()->nullable();
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
        Schema::dropIfExists('asignaturas');
    }
};
