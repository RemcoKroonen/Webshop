<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('firstname');
            $table->string('insertion');
            $table->string('lastname');
            $table->string('companyname');
            $table->string('country');
            $table->string('postalcode');
            $table->string('housenumber');
            $table->string('dateofbirth');
            $table->string('phonenumber');
            $table->string('email')->unique();
            $table->
            $table->
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
        Schema::dropIfExists('clients');
    }
}
