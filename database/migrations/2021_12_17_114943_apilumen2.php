<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apilumen2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('document_type', 10);
            $table->string('document_number', 30);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('phone', 30);
            $table->timestamps();//crea los cammpos de crear y actualizar automaticamente
            $table->softDeletes();//crea el campo de eliminacion logica
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
