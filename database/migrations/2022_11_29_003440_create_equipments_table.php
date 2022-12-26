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
            
            //$table->integer("idVendor")->unsigned()->nullable();
            $table->integer("idCategory")->unsigned()->nullable();
            $table->integer("idSubCategory")->unsigned()->nullable();
            $table->string("product_type")->nullable();
            $table->string("product_name")->nullable();
            $table->string("brand_name")->nullable();
            $table->string("website")->nullable();
            $table->string("logo")->nullable();
            $table->text("description")->nullable();
            $table->timestamps();

            //$table->foreign('idVendor')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
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
