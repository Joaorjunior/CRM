<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('atendente');
            $table->text('description');
            $table->string('sector');

            $table->integer('qualification_id')->unsigned();
            $table->foreign('qualification_id')->references('id')->on('qualifications');

            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses');

            $table->integer('phone_id')->unsigned();
            $table->foreign('phone_id')->references('id')->on('phones');

            $table->integer('email_id')->unsigned();
            $table->foreign('email_id')->references('id')->on('emails');

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
        Schema::drop('clients');
    }
}
