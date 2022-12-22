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
            
            $table->integer("idVendor")->unsigned()->nullable();
            $table->integer("idCategory")->unsigned()->nullable();
            $table->integer("idSubCategory")->unsigned()->nullable();
            $table->string("ref")->nullable();
            $table->string("name")->nullable();
            $table->string("type")->nullable();
            $table->string("rating")->nullable();

            $table->string("like")->nullable();
            $table->string("dislike")->nullable();

            $table->text("description")->nullable();
            $table->text("details")->nullable();
            $table->timestamps();

            $table->foreign('idVendor')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idCategory')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idSubCategory')->references('id')->on('subcategories')->onDelete('cascade')->onUpdate('cascade');

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
