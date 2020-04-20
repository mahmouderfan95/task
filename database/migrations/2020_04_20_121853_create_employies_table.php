<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('userName');
            $table->string('email');
            $table->string('password');
            $table->integer('phoneNumber');
            $table->string('image');
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
        Schema::dropIfExists('employies');
    }
}
