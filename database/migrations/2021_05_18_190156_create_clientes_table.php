<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->char('num_expe',12)->nullable();
            $table->string('nombre',30)->nullable();
            $table->string('apellido1',20)->nullable();
            $table->string('apellido2',20)->nullable();
            $table->char('telefono',9)->nullable();
            $table->char('DNI',9)->nullable();
            $table->string('direccion',80)->nullable();
            $table->string('ciudad',40)->nullable();
            $table->char('id_personal',10);
            $table->timestamps();
            $table->unique('num_expe');
            $table->primary('num_expe');
	    //$table->foreignId('id_personal')->constrained('personal');
	    $table->foreign('id_personal')->references('id_personal')->on('personal')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
