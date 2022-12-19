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
        Schema::table('tickets', function (Blueprint $table) {
            //
            $table->string('section')->nullable();
            $table->string('row')->nullable();
            $table->string('seat_from')->nullable();
            $table->string('seat_to')->nullable();
            $table->string('ticket_type')->nullable()->default('paper ticket');
            $table->string('ticket_restrictions')->nullable()->default('yes');
            $table->string('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            //
            $table->dropColumn('deleted_at','ticket_restrictions','ticket_type','seat_to','seat_from','row','section');
        });
    }
};
