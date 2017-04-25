<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserQuoteRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('quoteRequest', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->string('IdNumber');
            $table->rememberToken();
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
        Schema::dropIfExists('quoteRequest');

    }
}
