<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->longText('description');
            $table->string('price');
            $table->string('type');
            $table->text('picture');
            $table->longText('pictures');
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
        Schema::dropIfExists('houses');
    }
}
