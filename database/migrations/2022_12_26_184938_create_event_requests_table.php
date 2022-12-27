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
        Schema::create('event_requests', function (Blueprint $table) {
            $table->id();
            $table->string('event')->nullable();
            $table->string('category_event')->nullable();
            $table->string('event_date')->nullable();
            $table->string('venue_name')->nullable();
            $table->string('location')->nullable();
            $table->string('start_time',256)->nullable();
			$table->string('end_time',256)->nullable();
            $table->string('deleted_at')->nullable();
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
        Schema::dropIfExists('event_requests');
    }
};
