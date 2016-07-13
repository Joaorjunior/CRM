<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');

            $table->string('titulo');
            $table->string('email');
            $table->string('phone');
            $table->string('celular');

            $table->string('atendente');

            /*Schema::table('logs', function(Blueprint $table) {

                $table->integer('contact_id')->unsigned()->nullable();
                $table->foreign('contact_id')->references('id')->on('contacts');
            });*/




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


        Schema::drop('contacts');
    }
}
