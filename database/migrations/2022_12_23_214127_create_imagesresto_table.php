<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesrestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagesresto', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('idRestaurant')->unsigned()->nullable();
            $table->string('path')->nullable();
            $table->timestamps();

            $table->foreign('idRestaurant')->references('id')->on('restaurants')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagesresto');
    }
}
