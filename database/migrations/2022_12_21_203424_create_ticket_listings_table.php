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
        Schema::create('ticket_listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
			$table->boolean('status')->default(1);
            $table->string('ticket')->nullable();
            $table->string('currency')->nullable()->default('$ dollar');
			$table->string('title', 64)->nullable();
			$table->decimal('price', 10)->nullable();
			$table->integer('quantity')->nullable();
			$table->string('description', 512)->nullable()->change();
            $table->integer('customer_limit')->nullable()->default(null);
			// $table->integer('eventlisting_id');

            $table->unsignedBigInteger('eventlisting_id');
            $table->foreign('eventlisting_id')->references('id')->on('event_listings')->onDelete('cascade');

            // $table->string('ticketlisting_id');

            // $table->unsignedBigInteger('ticketlisting_id');
            // $table->foreign('ticketlisting_id')->references('id')->on('event_listings')->onDelete('cascade');
            
			$table->string('currency_type')->nullable();
            $table->string('section')->nullable();
            $table->string('row')->nullable();
            $table->string('seat_from')->nullable();
            $table->string('seat_to')->nullable();
            $table->string('reason_seating_unable')->nullable();
            $table->string('ticket_type')->nullable()->default('paper ticket');
            $table->string('ticket_restrictions')->nullable()->default('yes');
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
        Schema::dropIfExists('ticket_listings');
    }
};
