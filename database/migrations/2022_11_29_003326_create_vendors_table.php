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
            $table->string('business_type')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('profession')->nullable();
            $table->string('certification')->nullable();
            $table->integer('rating')->nullable();
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->string("like")->default(0);
            $table->string("dislike")->default(0);
            $table->string('country')->nullable();
            $table->string('state')->nullable();          
            $table->string('streetAddress')->nullable();
            $table->string('zipcode')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('workingDays')->nullable();
            $table->text('workingHours')->nullable();
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
