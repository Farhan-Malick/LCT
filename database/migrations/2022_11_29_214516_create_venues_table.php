<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('venue_type')->nullable();
            $table->text('amenities')->nullable();
            $table->string('slug')->unique();
            $table->integer('seated_guestnumber')->nullable();
            $table->integer('standing_guestnumber')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('glat')->nullable();
            $table->string('glong')->nullable();
            $table->text('image');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('venues');
    }
};
