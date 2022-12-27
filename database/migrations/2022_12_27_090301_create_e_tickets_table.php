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
        Schema::create('e_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticketlisting_id');
            $table->foreign('ticketlisting_id')->references('id')->on('ticket_listings')->onDelete('cascade');
            $table->longtext('ticket_path');
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
        Schema::dropIfExists('e_tickets');
    }
};
