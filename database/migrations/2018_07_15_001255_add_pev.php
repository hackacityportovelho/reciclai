<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPev extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pevs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->string('cep');
            $table->string('endereco');
            // $table->string('numero');
            $table->string('telefone');
            $table->string('responsavel');
            $table->string('latLong');
            // $table->enum('dias', [0,1,2,3,4,5,6]);
            // $table->enum('tiposResiduos', [0, 1, 2]);
            $table->string('email')->unique();
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
        Schema::drop('pevs');
    }
}
