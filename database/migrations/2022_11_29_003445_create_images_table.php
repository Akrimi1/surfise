<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('idEquipment')->unsigned()->nullable();
            $table->integer('idVendor')->unsigned()->nullable();
            $table->string('path')->nullable();
            $table->timestamps();

            $table->foreign('idEquipment')->references('id')->on('equipments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idVendor')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
