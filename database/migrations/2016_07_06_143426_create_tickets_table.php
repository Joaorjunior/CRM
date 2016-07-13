<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tickets', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->integer('client_id')->unsigned();
           $table->foreign('client_id')->references('id')->on('clients');
           $table->string('type');
           $table->dateTime('datefinal');
           $table->string('fase');
           $table->string('loss');
           $table->string('price');
           $table->string('next');
           $table->text('description');
           $table->string('atendente');

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

      Schema::drop('tickets');
    }
}
