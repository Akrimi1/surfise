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
            $table->string('vendor_type')->nullable();
            $table->string('business_name')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();          
            $table->string('zipcode')->nullable();
            $table->string('like')->nullable();
            $table->string('dislike')->nullable();
            $table->string('state')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->text('description')->nullable();
            $table->text('workingDays')->nullable();
            $table->text('workingHours')->nullable();
            $table->text('logo')->nullable();
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
