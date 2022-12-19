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
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title', 64);
			$table->decimal('price', 10);
			$table->integer('quantity');
			$table->string('description', 512)->nullable()->change();
            $table->integer('customer_limit')->nullable()->default(null);
			$table->integer('event_id');
			$table->timestamps();
			$table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
