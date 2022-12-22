<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_name')->nullable();
            $table->string('profession')->nullable();
            $table->integer('rating')->nullable();
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->string("like")->nullable();
            $table->string("dislike")->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();          
            $table->string('streetAddress')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('workingHours')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
