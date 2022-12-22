<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosprodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videosprod', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProduct')->unsigned()->nullable();
            $table->string('path')->nullable();
            $table->timestamps();

            $table->foreign('idProduct')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videosprod');
    }
}
