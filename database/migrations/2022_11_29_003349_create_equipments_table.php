<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("idCategory")->unsigned();
            $table->integer("idVendor")->unsigned();
            $table->string("ref");
            $table->string("name");
            $table->string("type");
            $table->text("description");
            $table->text("details");
            $table->timestamps();

            $table->foreign('idVendor')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idCategory')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
}
